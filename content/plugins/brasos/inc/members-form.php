<?php

class BecomeMember
{

    private $wpdb;
    private $userstable;
    private $usersmeta;

    public function __construct()
    {


        global $wpdb;

        $this->wpdb = $wpdb;
        $this->userstable = $wpdb->prefix . 'users';
        $this->usersmeta = $wpdb->prefix . 'usermeta';


        add_action('init', [$this, 'ajax_onFormSubmit'], 20);

        add_action('wp_ajax_nopriv_ajax_onFormSubmit', 'ajax_onFormSubmit');
        add_action('wp_ajax_ajax_onFormSubmit', 'ajax_onFormSubmit');
    }


    public function ajax_onFormSubmit() {

        if (empty($_POST['members_form_submit'])) {
            return;
        }

        if (isset($_POST['email'],
        $_POST['full_name'],
        $_POST['phone'],
        $_POST['especiality'],
        $_POST['crm'],
        $_POST['other_professions'],
        $_POST['message'])) {
            $email =  $this->wpdb->escape(trim($_POST['email']));
            $fullname =  $this->wpdb->escape(trim($_POST['full_name']));
            $phone =  $this->wpdb->escape(trim($_POST['phone']));
            $especiality =  $this->wpdb->escape(trim($_POST['especiality']));
            $crm =  $this->wpdb->escape(trim($_POST['crm']));
            $other_professions = $this->wpdb->escape(trim($_POST['other_professions']));
            $message =  $this->wpdb->escape(trim($_POST['message']));

           
            // error message on empty inputs
            if (empty($email) || empty($fullname) || empty($phone)) {
                $error = 'Por favor complete os campos restantes!';
                if (!empty($error)) :  echo '<p>' . $error . '</p>';
                endif;
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $error = 'Endereço de email invalido, favor tentar de novo.';
                if (!empty($error)) :  echo '<p>' . $error . '</p>';
                endif;
            } else if (preg_match('/^?\(?([0-9]{3})\)?([ .-]?)([0-9]{3})([ .-]?)([0-9]{2})/', $phone)) {
                $error = 'Numero invalido por favor tente novamente';
                if (!empty($error)) :  echo '<p>' . $error . '</p>';
                endif;
            }
        }

        // If  an email exist on database
        $exist = $this->alreadyExists($_POST['email']);

        if ($exist) {
            $error = 'Este Endereço de email ja existe em nossa base de dados';
            if (!empty($error)) :  echo '<p style="color:red">' . $error . '</p>';
            endif;
        } else {

            // Sinon je l'ajoute
            $this->wpdb->insert(
                $this->userstable,
                [
                    'user_email' => $email,
                    'user_registered' => current_time('mysql')
                ],
                [
                    '%s',
                    '%s',
                ]
            );
            /* find me the last ID cretated on wp_users data */
            $id = $this->getUsersId();

                /*INSERT manipulation Language */
            $this->wpdb->query("
            INSERT INTO $this->usersmeta
                    (user_id, meta_key, meta_value)
                        VALUES
                        ('$id', 'wp_capabilities', 'a:1:{s:10:\"subscriber\";b:1;}'),
                        ('$id', 'full_name', '$fullname'),
                        ('$id', 'message', '$message'),
                        ('$id', 'phone', '$phone')
            ");

            /* MEDICA condition */
            if (!empty($crm) && !empty($especiality)) {
                $this->wpdb->query("
                        INSERT INTO $this->usersmeta
                                (user_id, meta_key, meta_value)
                                    VALUES
                                    ('$id', 'especiality', '$especiality'),
                                    ('$id', 'crm', '$crm')
                                ");
            }
            /* OUTROS condition */
            if (!empty($other_professions)) {
                $this->wpdb->query("
                INSERT INTO $this->usersmeta
                   (user_id, meta_key, meta_value)
                       VALUES
                       ('$id', 'other_professions', '$other_professions')
                   ");
            }

            $success = 'Obrigado por se inscrever';
            if(!empty($success)) {
                echo '<p>' . $success . '</p>';

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
                $body .= 'Obrigado por se inscrever como membro brasos.' . "\n\n";
                $body .= '---------------' . "\n\n";
                $body .= 'Este email é automatico, Por favor nao responder.' . "\n";

                wp_mail($to, $subject, $body, $headers);
            }       
        }
       
    }

    public function alreadyExists($email)
    {
        $prepared = $this->wpdb->prepare(
            "
              SELECT id
              FROM {$this->userstable}
              WHERE user_email = %s;
            ",
            $email
        );

        return $this->wpdb->get_var($prepared);
    }
    public function getUsersId()
    {
        $prepared = $this->wpdb->prepare(
            "
              SELECT max(ID)
              FROM {$this->userstable}
            "
        );
        print_r($this->wpdb->get_var($prepared));
        var_dump($prepared);
        return $this->wpdb->get_var($prepared);
    }


    public function activate()
    {

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
