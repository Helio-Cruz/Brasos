<?php

add_action('wp_ajax_nopriv_login_member', 'login_member');
add_action('wp_ajax_login_member', 'login_member');


function login_member()
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
