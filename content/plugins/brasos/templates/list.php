<?php

echo '<h2>Lista de Membros Brasos</h2>Membros<br /><br />';
?>
<div class="tablenav top">
    <div class="alignleft">
        <a href="<?php echo admin_url('admin.php?page=myplugin-settings-page') ?>&action=download_csv&_wpnonce=<?php echo wp_create_nonce('download_csv') ?>" style="float:right; margin:0;" class="button"><?php _e('Export CSV', 'my-plugin-slug'); ?>
        </a>
    </div>
    <div class="tablenav-pages one-page"><span class="displaying-num">35 itens</span>
        <span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
            <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Página atual</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> de <span class="total-pages">1</span></span></span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span>
    </div>
    <br class="clear">
</div>
<br />
<br />
<div class="members-list">
    <table class="wp-list-table widefat fixed striped table-view-list">
        <thead>
            <tr>
                <th scope="col" class="manage-column column-user-fullname column-primary">Nome Completo</th>
                <th scope="col">ID</th>
                <th scope="col">Email</th>
                <th scope="col">Telefone</th>
                <th scope="col">Especialidade</th>
                <th scope="col">CRM</th>
                <th scope="col">data/registro</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

            <?php
            $managers = array(
                ['Paulo Cesar Hamdan', 'MB01',  'none',  'none', "Ortopedia",  'none',  'none',  '', ''],
                ['Marcos Britto da Silva', 'MB02',  'none',  'none', "Ortopedia",  'none',  'none',  '', ''],
                ['Cyro Scala de Almeida Jr.', 'MB03',  'none',  'none', "Ortopedia",  'none',  'none',  '', ''],
                ['Fabiano Gonçalves Cunha', ' MB04',  'none',  'none', "Ortopedia",  'none',  'none',  '', ''],
                ['Gustavo Constantino de Campos', 'MB05',  'none',  'none', "Ortopedia",  'none',  'none',  '', ''],
                ['Zartur José Barcelos Menegassi', 'MB06',  'none',  'none', "Ortopedia",  'none',  'none',  '', ''],
                ['Antonio Martins Tieppo', 'MB07',  'none',  'none', "Ortopedia",  'none',  'none',  '', ''],
                ['Caio Gonçalvez de Souza', 'MB08',  'none',  'none', "Ortopedia",  'none',  'none',  '', '']
            );
            foreach ($managers as $manager) {
                echo '<tr>';
                foreach ($manager as $array) {
                    echo   '<td class="has-row-actions column-primary">' . $array . '</td>';
                }
                echo '</tr>';
            }
            ?>


            <?php

            /*
            function getData()
            {
                global $wpdb; // access the database

                $usersTable = $wpdb->prefix . 'users';
                $brasosMembers = $wpdb->prefix . 'brasos_members';

                $sql = $wpdb->prepare(
            
                "SELECT u.ID, u.user_email, u.user_registered, bm.full_name, bm.phone, bm.especiality, bm.crm, bm.brasos_id  
                    
                    FROM $usersTable  u,  $brasosMembers bm          
            
                    WHERE u.ID  = bm.user_id

                    ORDER BY user_id ASC", ARRAY_A

                );

                return $wpdb->get_results($sql);
            }

            $getData = getData();

*/



            global $wpdb; // access the database


            $usersTable = $wpdb->prefix . 'users';
            $brasosMembers = $wpdb->prefix . 'brasos_members';


            $sql = "SELECT * 
            
             FROM $usersTable  u,  $brasosMembers bm          
    
            WHERE u.ID  = bm.user_id

            ORDER BY user_id ASC";
         

            $getData = $wpdb->get_results($sql);
   
            foreach ($getData as $user) {

                echo

                ' <tr>' .
                    '<td class="has-row-actions column-primary">' . '<b>'  . ($user->full_name) . '</b>' .
                    ' <button type="button" class="toggle-row"><span class="screen-reader-text">Mostrar mais detalhes</span></button>' . '</td>',
                '<td>' . esc_html($user->brasos_id) . '</td>',
                '<td>'   . ($user->user_email) . '</td>',
                '<td>'   . ($user->phone) . '</td>',
                '<td>'   . ($user->especiality) . '</td>',
                '<td>'   . ($user->crm) . '</td>',
                '<td>'   . ($user->user_registered) . '</td>',
                '<td>'   . '</td>',
                '<td>'   . '</td>',
                '</tr>';
            }
            ?>
        </tbody>
    </table>
</div>