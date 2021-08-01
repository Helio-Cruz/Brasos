<?php
/*
add_action('wp_ajax_nopriv_authResetPassword', 'authResetPassword');
add_action('wp_ajax_authResetPassword', 'authResetPassword');


function authResetPassword()
{
    // right place ?
    check_ajax_referer('ajax-login-nonce', 'security');

    global $wpdb;

    $userID = $_POST['log'];
    $userPWD = $_POST['pwd'];
    // $remember = $_POST['rememberme'];

    if (isset($userID) && isset($userPWD)) {

        if (empty($userID) || empty($userPWD)) {
            echo json_encode(array('message' => 'Por favor, Preencha os campos vazios.'));
        } else {

            $username = $wpdb->escape($userID);
            $password = $wpdb->escape($userPWD);

            $login_data = array();
            $login_data['user_login'] = $username;
            $login_data['user_password'] = $password;

            /*
        $user_verify = wp_signon($login_data, true);

        if (!is_wp_error($user_verify)) {
            echo "<span style='color:#FF0000'>Cest bon!</span>";         
        } else {
            echo "<span style='color:#FF0000'>Invalid username or password. Please try again!</span>";
            
        }*/
/*
            $user_signon = wp_signon($login_data, false);

            if (is_wp_error($user_signon)) {
                echo json_encode(array('loggedin' => false, 'message' => __('Email ou Senha inválidos.')));
            } else {
                echo json_encode(array('loggedin' => true));
            }
        }
    }

    wp_die();
}
*/


add_action('wp_ajax_nopriv_authResetPassword', 'authResetPassword', 20);
add_action('wp_ajax_authResetPassword', 'authResetPassword', 20);

function authResetPassword()
{
    check_ajax_referer('ajax-resetpassword-nonce', 'security');
    $response = [
        "status" => false,
        "error" => true,
        "data" => "",
    ];

    extract($_POST);

    $user_email = sanitize_text_field($email);

    $user = get_user_by('email', $user_email);
    if (isset($user) && !empty($user)) {
        $response['status'] = true;
        $response['error'] = false;

        $user_id = $user->ID;
        $user_info = get_userdata($user_id);
        $user_login = $user_info->user_login;
        $reset_key = get_password_reset_key($user_info);
        $link = esc_url( add_query_arg( array( 'key' => $reset_key, 'id' => $user_id ), wc_get_endpoint_url( 'lost-password', '', wc_get_page_permalink( 'myaccount' ) ) ) );

        $headers = ['Content-Type: text/html; charset=UTF-8'];
        $subject = 'Solicitação de definição de senha na Brasos';
        $message = '<div style="text-align:center;" class="email-container">';
        $message .= '<table style="width:538px;margin:40px auto;text-align:left;" class="email-table">';
        $message .= '<thead style="color:#fff;background-color:#006e78;">';
        $message .= '<tr class="header-row"><td>';
        $message .= '<h1 style="padding:0.2em 1em;font-size:24px;font-weight:300;line-height:150%;">Solicitação de definição de senha na Brasos</h1>';
        $message .= '</td></tr></thead>';
        $message .= '<tbody style="background-color:#f2f2f2;color:#333;font-size:14px;line-height:150%;">';
        $message .= '<tr class="body-row"><td>';
        $message .= '<p style="margin:16px 0;padding:0.2em 2em;">Olá ' . esc_html($user_login) . '</p>';
        $message .= '<p style="margin:16px 0;padding:0.2em 2em;">Alguém solicitou uma senha para a seguinte conta na Brasos:</p>';
        $message .= '<p style="margin:16px 0;padding:0.2em 2em;">Usuário: ' . esc_html($user_login) . '</p>';
        $message .= '<p style="margin:16px 0;padding:0.2em 2em;">Se você não fez essa solicitação, ignore este e-mail. Se você gostaria de prosseguir:</p>';
        $message .= '<p style="margin:16px 0;padding:0.2em 2em;"><a style="font-weight:normal;text-decoration:underline;color:#006e78" href="' . $link . '">Clique aqui para redefinir sua senha</a></p>';
        $message .= '</td></tr></tbody></table></div>';
        wp_mail($user_email, $subject, $message, $headers);
        $response['data'] = ["message" =>  'O link para definir a senha foi enviado no seu email.'];
        wp_send_json($response);
    }

    $response['data'] = ["message" =>  'Este endereço de e-mail não existe no nosso banco de dados.'];
    wp_send_json($response);

    die();
}
