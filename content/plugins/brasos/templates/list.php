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
        <a href="" style="float:right; margin:0;" class="button">Export CSV</a> </div>
    <div class="tablenav-pages one-page"><span class="displaying-num">35 itens</span>
        <span class="pagination-links"><span class="tablenav-pages-navspan button disabled" aria-hidden="true">«</span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">‹</span>
            <span class="paging-input"><label for="current-page-selector" class="screen-reader-text">Página atual</label><input class="current-page" id="current-page-selector" type="text" name="paged" value="1" size="1" aria-describedby="table-paging"><span class="tablenav-paging-text"> de <span class="total-pages">1</span></span></span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">›</span>
            <span class="tablenav-pages-navspan button disabled" aria-hidden="true">»</span></span></div>
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
            <tr>
                <td class="has-row-actions column-primary">Claire Cruz
                    <button type="button" class="toggle-row"><span class="screen-reader-text">Mostrar mais detalhes</span></button>
                </td>
                <td>1</td>
                <td>helio-cruz@hotmail.com </td>
                <td>11 98454-4545</td>
                <td>Ortopedia</td>
                <td>CRM-11111</td>
                <td>null</td>
                <td>Bom dia este é um teste</td>
                <td>12/12/2020 18:30</td>
            </tr>
            <?php

            $args = array(
                'role'    => 'subscriber',
                //'orderby' => 'last_name',
                'order'   => 'DESC'
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
                    '<td>' . esc_html($user->ID) . '</td>',
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