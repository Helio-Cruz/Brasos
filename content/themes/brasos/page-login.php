<?php
/*
Template Name: Page Login
*/
?>


<?php 
get_header(); ?>

<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body page-login">
        <p>Área exclusiva para Membros</p>
        <?php

        $login  = (isset($_GET['login'])) ? $_GET['login'] : 0;

        if ($login === "failed") {
            echo '<p class="login-msg"><strong>ERROR:</strong> Invalid username and/or password.</p>';
        } elseif ($login === "empty") {
            echo '<p class="login-msg"><strong>ERROR:</strong> Username and/or Password is empty.</p>';
        } elseif ($login === "false") {
            echo '<p class="login-msg"><strong>ERROR:</strong> You are logged out.</p>';
        }

        
        ?>
        <?php
        $args = array(
            'redirect' => home_url(),
            // 'form_id' => 'loginform-custom',
           'label_username' => __('Email'),
            'id_username' => 'user',
            'id_password' => 'pass'
        ); ?>
        <?php wp_login_form($args); ?>

    </div>

</div>