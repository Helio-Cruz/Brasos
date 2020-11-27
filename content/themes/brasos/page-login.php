
    <!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body page-login">
        <p>Área exclusiva para Membros</p>
        <div id="form_output"></div>

        <form name="loginform" id="loginform">
            <p class="login-username uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                <input type="text" name="log" id="user" class="input" value="" size="20" placeholder="Email">
            </p>
            <p class="login-password uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                <input type="password" name="pwd" id="pass" class="input" value="" size="20" placeholder="Senha">
            </p>
            <p class="login-submit">
                <input type="submit" name="wp-submit" id="wp-submit" class="button button-primary" value="Entrar">
            </p>
            <?php wp_nonce_field('ajax-login-nonce', 'security'); ?>
        </form>
    </div>
</div>


<?php
/*

            $args = array(
                // 'form_id' => 'loginform-custom',
                'label_username' => __('Email'),
                'id_username' => 'user',
                'id_password' => 'pass',
                'value_remember' => true
            );

            wp_login_form($args);
            */
?>