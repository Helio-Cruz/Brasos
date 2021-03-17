<?php

class BecomeMember
{
    private $wpdb;
    private $brasosMembers;

    public function __construct()
    {

        global $wpdb; // access the database

        $this->wpdb = $wpdb;
        $this->usersTable = $wpdb->prefix . 'users';
        $this->usermetaTable = $wpdb->prefix . 'usermeta';
        $this->brasosMembers = $wpdb->prefix . 'brasos_members';
        // $this->charset_collate = $wpdb->get_charset_collate();


        add_action('init', [$this, 'createMembersTable'], 100);

        add_action('wp_enqueue_scripts', [$this, 'init_jsForm'], 20);

        add_action('wp_ajax_nopriv_ajax_onFormSubmit', [$this, 'ajax_onFormSubmit'], 20);
        add_action('wp_ajax_ajax_onFormSubmit', [$this, 'ajax_onFormSubmit'], 20);

        add_action('admin_menu', [$this, 'addAdminMembersContent']);

        // Add action hook only if action=download_csv
        if (isset($_GET['action']) && $_GET['action'] == 'download_csv') {
            // Handle CSV Export
            add_action('init', [$this, 'exportCsv']);
        }
    }
    public function createMembersTable()
    {

        $sql = "CREATE TABLE IF NOT EXISTS " . $this->brasosMembers . " (
                `user_id` INT NOT NULL,
                `full_name` VARCHAR(255) NOT NULL,
                `phone` VARCHAR(255) NOT NULL,
                `especiality` VARCHAR(255) NOT NULL,
                `crm` VARCHAR(255)  NOT NULL,
                `brasos_id` VARCHAR(255) NOT NULL,
                PRIMARY KEY (user_id)
            );";
        $this->wpdb->query($sql);
    }


    /**
     * Members Lists 
     */
    public function addAdminMembersContent()
    {
        add_menu_page(
            'Lista de Membros',
            'Lista de Membros',
            'manage_options',
            __FILE__,
            array($this, 'members_content'),
            'dashicons-wordpress',
            3
        );
    }

    public function members_content()
    {
        require __DIR__ . './../templates/list.php';
    }


    public function init_jsForm()
    {
        wp_enqueue_script(
            'init_jsForm',
            plugin_dir_url(__DIR__) . 'public/js/jsForm.js',
            [],
            '1.0.0',
            true
        );

        wp_localize_script(
            'init_jsForm',
            'ajax_formMembers',
            [
                'ajaxurl' => admin_url('admin-ajax.php'),
                'nonce' => wp_create_nonce('ajax_nonce')
            ]
        );
    }




    /**
     * Members Form
     */
    public function ajax_onFormSubmit()
    {



        $error = '';
        $success = '';

        // sécurité pour vérifier l’authenticité des requêtes
        check_ajax_referer('ajax_nonce', 'nonce');

        if (false) {
            $error = 'Occoreu um erro, tente de novo mais tarde.';
            echo '<div id="formMembers_error" class="uk-text-danger">' . $error . '</div>';
            exit;
        } else {
            $fullname =  $this->wpdb->escape(trim($_POST['full_name']));
            // https://www.w3schools.com/php/filter_validate_email.asp
            // Remove all illegal characters from email
            $email =  $this->wpdb->escape(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
            $phone =  $this->wpdb->escape(trim($_POST['phone']));
            $especiality =  $this->wpdb->escape(trim($_POST['especiality']));
            $crm =  $this->wpdb->escape(trim($_POST['crm']));

            // champs obligatoires
            // si nom et email sont complétés "et" (spécialité + crm "ou" profession)
            if (!empty($fullname) && !empty($email) && ((!empty($especiality) && !empty($crm)))) {
                // If email is not valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $error = $email . 'Endereço de email invalido, favor tente de novo.';
                    echo '<div id="formMembers_error" class="uk-alert-danger" uk-alert>' .
                        '<a class="uk-alert-close" uk-close></a>' .
                        '<p>' . $error . '</p>' .
                        '</div>';
                } else {
                    // if email is valid, check if user is not already registered
                    $userExists = $this->checkRegisteredUser($email);

                    if ($userExists) {
                        $error = 'Email ja existente em nosso banco de dados, por favor insira outro e-mail!';
                        echo '<div id="formMembers_error" class="uk-alert-danger" uk-alert>' .
                            '<a class="uk-alert-close" uk-close></a>' .
                            '<p>' . $error . '</p>' .
                            '</div>';
                    } else {
                        //   $this->createMembersTable();
                        // if user is not registered & fields are ok
                        // add user to db
                        $this->wpdb->insert(
                            $this->usersTable,
                            [
                                'user_email' => $email,
                                'user_registered' => current_time('mysql')
                            ],
                            [
                                '%s',
                                '%s',
                            ]
                        );
                        /* find the last ID created in wp_users */
                        $id = $this->getUserId($email);



                        //Join string MB0 to $id 
                        $userCustomId = 'MB' . $id;


                        /*
                        $this->wpdb->query("
                                INSERT INTO $this->usermetaTable
                                    (user_id, meta_key, meta_value)
                                    VALUES
                                    ('$id', 'wp_capabilities', 'a:1:{s:10:\"subscriber\";b:1;}')
                                ");
                        */

                        $this->wpdb->insert(
                            $this->usermetaTable,
                            [
                                'user_id' => $id,
                                'meta_key' => 'wp_capabilities',
                                'meta_value' => 'a:1:{s:10:\"subscriber\";b:1;}'
                            ],
                            [
                                '%d',
                                '%s',
                                '%s',
                            ]
                        );
                        /* insert espaces strings atumatically */
                        $this->wpdb->insert(
                            $this->brasosMembers,
                            [
                                'user_id' => $id,
                                'full_name' => $fullname,
                                'phone' => $phone,
                                'especiality' => $especiality,
                                'crm' => $crm,
                                'brasos_id' => $userCustomId

                            ],
                            [
                                '%d',
                                '%s',
                                '%s',
                                '%s',
                                '%s',
                                '%s'
                            ]
                        );


                        $success = 'Obrigado por se inscrever';
                        echo '<div id="formMembers_error" class="uk-alert-success" uk-alert>' .
                            '<a class="uk-alert-close" uk-close></a>' .
                            '<p>' . $success . '</p>' .
                            '</div>';

                        /**
                         * Email sending confirmation
                         */
                        $to = $email;
                        $subject = "Confirmaçao de inscriçao";
                        $headers = [
                            'Content-Type: text/html; charset=UTF-8',
                            'From: noreply@brasos.com.br'
                        ];
                        $body = 'Bem vindo a Brasos,' . "\n";
                        $body .= 'Obrigado por tornar-se membro da Brasos !' . "\n\n";
                        $body .= 'Retornaremos em breve,' . "\n\n";
                        $body .= '---------------' . "\n\n";
                        $body .= 'Este email é automático, Por favor não responder.' . "\n";

                        wp_mail($to, $subject, $body, $headers);
                    }
                }
            } else {
                $error = 'Por favor complete os campos obrigatórios !';
                echo '<div id="formMembers_error" class="uk-alert-danger" uk-alert>' .
                    '<a class="uk-alert-close" uk-close></a>' .
                    '<p>' . $error . '</p>' .
                    '</div>';
            }
        }
        wp_die(); // terminate immediately and return a proper response /!\ required !
    }

    public function checkRegisteredUser($email)
    {
        $getRegisteredUser = $this->wpdb->prepare(
            "
              SELECT id
              FROM {$this->usersTable}
              WHERE user_email = %s;
            ",
            $email
        );

        return $this->wpdb->get_var($getRegisteredUser);
    }

    public function getUserId($email)
    {
        $getLastRegisteredUser = $this->wpdb->prepare(
            "
              SELECT max(ID)
              FROM {$this->usersTable}
              WHERE user_email = %s;
            ",
            $email
        );

        return $this->wpdb->get_var($getLastRegisteredUser);
    }


    public function exportCsv()
    {
        // Check for current user privileges 
        if (!current_user_can('manage_options')) {
            return false;
        }
        // Check if we are in WP-Admin
        if (!is_admin()) {
            return false;
        }

        // Nonce Check
        $nonce = isset($_GET['_wpnonce']) ? $_GET['_wpnonce'] : '';
        if (!wp_verify_nonce($nonce, 'download_csv')) {
            die('Not Valid.. Download nonce..!! ');
        }

        ob_start();
        $userstable = $this->usersTable;
        $usermetaTable = $this->usermetaTable;

        $domain = $_SERVER['SERVER_NAME'];
        // $filename = $this->usersTable . $domain . '-' . time() . '.csv';
        $filename =  $domain . '-' . time() . '.csv';

        $header_row = array(
            'Email',
            'ID',
            'Nome Completo',
            'Telefone',
            'Especialidade',
            'CRM',
            'Data de registro',

        );
        $data_rows = array();
        // $sql = "SELECT u.ID, u.user_email, u.user_registered, um.user_id FROM  $userstable u JOIN  $usermetaTable um ON u.ID = um.user_id  ";
        //  $sql = "SELECT u.*, um.* FROM $userstable u, $usermetaTable um WHERE u.ID = um.user_id and um.meta_key IN ('full_name', 'phone', 'message')" ;


        /*
       $sql = "SELECT 'u.ID' = 'um.user_id' FROM 
        $userstable u, $usermetaTable um  
        WHERE 'u.ID '= 'um.user_id'";
        
        
       // $sql = "SELECT * FROM  $userstable ";
       
       
        $sql = "SELECT * from $this->usermetaTable WHERE meta_key = 'wp_capabilities' AND meta_value = 'a:1:{s:10:\"subscriber\";b:1;}'";
        $getData = $this->wpdb->get_users( $sql, 'ARRAY_A'  );
        foreach ($getData as $user) {
            $row = array(
                $user['user_email'],
                $user['full_name'],
                $user['phone'],
                $user['especiality'],
                $user['crm'],
                $user['other_professions'],
                $user['message'],
                $user['user_registered'],
            );
            $data_rows[] = $row;
        }
        
*/

        $args = array(
            'role'    => 'subscriber',
            'order'   => 'DESC'
        );
        $getUsers = get_users($args);
        foreach ($getUsers as $user) {
            $row = array(
                $user->user_email,
                $user->brasos_id,
                $user->full_name,
                $user->phone,
                $user->especiality,
                $user->crm,
                $user->user_registered
            );
            $data_rows[] = $row;
        }

        ob_end_clean();
        $fh = @fopen('php://output', 'w');
        header("Content-Disposition: attachment; filename={$filename}");
        fputcsv($fh, $header_row);
        foreach ($data_rows as $data_row) {
            fputcsv($fh, $data_row);
        }
        fclose($fh);
        die();
    }

    public function activate()
    {
        $this->createMembersTable();
        flush_rewrite_rules();
    }

    public function deactivation()
    {
        flush_rewrite_rules();
    }
}

$becomeMember = new BecomeMember();
register_activation_hook(__FILE__, [$becomeMember, 'activate']);
register_deactivation_hook(__FILE__, [$becomeMember, 'deactivation']);
