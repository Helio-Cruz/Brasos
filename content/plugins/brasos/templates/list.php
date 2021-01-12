<?php

echo '<h2>Lista de Membros Brasos</h2>Membros<br /><br />';
?>
<div class="search">
    <p class="search-box">
        <label class="screen-reader-text" for="search-search-input">Search:</label>
        <input type="search" id="search-search-input" name="s" value="">
        <input type="submit" id="search-submit" class="button" value="Search">
    </p>

</div>
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
                <th scope="col">Profissão</th>
                <th scope="col">Mensagem</th>
                <th scope="col">data/registro</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $managers = array(
                ['Paulo Cesar Hamdan', 'MB01',  'null',  'null', "Ortopedia",  'null',  'null',  'null', 'null'],
                ['Marcos Britto da Silva', 'MB02',  'null ',  'null', "Ortopedia",  'null',  'null',  'null', 'null'],
                ['Cyro Scala de Almeida Jr.', 'MB03',  'null ',  'null', "Ortopedia",  'null',  'null',  'null', 'null'],
                ['Fabiano Gonçalves Cunha',' MB04',  'null ',  'null', "Ortopedia",  'null',  'null',  'null', 'null'],
                ['Gustavo Constantino de Campos', 'MB05',  'null ',  'null', "Ortopedia",  'null',  'null',  'null', 'null'],
                ['Zartur José Barcelos Menegassi', 'MB06',  'null ',  'null', "Ortopedia",  'null',  'null',  'null', 'null'],
                ['Antonio Martins Tieppo', 'MB07',  'null ',  'null', "Ortopedia",  'null',  'null',  'null', 'null'],
                ['Caio Gonçalvez de Souza', 'MB08',  'null ',  'null', "Ortopedia",  'null',  'null',  'null', 'null']
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
            
            $args = array(
                'role'    => 'subscriber',
                'orderby' => 'id',
                'order'   => 'ASC',

            );
            //   $usermeta = array();
            // $userData = get_user_meta($user->ID);
            $users = get_users($args);
            // Array of WP_User objects.
            foreach ($users as $user) {
                echo
                    ' <tr>' .
                        '<td class="has-row-actions column-primary">' . '<b>'  . ($user->full_name) . '</b>' .
                        ' <button type="button" class="toggle-row"><span class="screen-reader-text">Mostrar mais detalhes</span></button>' . '</td>',
                    '<td>' . esc_html($user->brasos_id) . '</td>',
                    '<td>'   . ($user->user_email) . '</td>',
                    '<td>'   . ($user->phone) . '</td>',
                    '<td>'   . ($user->especiality) . '</td>',
                    '<td>'   . ($user->crm) . '</td>',
                    '<td>'   . ($user->other_professions) . '</td>',
                    '<td>'   . ($user->message) . '</td>',
                    '<td>'   . ($user->user_registered) . '</td>'
                        . '</tr>';
            }
            
            ?>
        </tbody>
    </table>
</div>