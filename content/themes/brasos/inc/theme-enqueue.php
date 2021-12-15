<?php

if (!function_exists('brasos_scripts')) :

    function brasos_scripts()
    {
        wp_enqueue_style(
            'brasos-style-css',
            get_theme_file_uri('/public/css/style.css'),
            [],
            '1.0.0'
        );



        wp_enqueue_script(
            'brasos-js',
            get_theme_file_uri('/public/js/app.js'),
            [],
            '1.1.0',
            true
        );
/*
        wp_localize_script(
            'brasos-js',
            'ajax_login_object',
            [
                'ajaxurl' => admin_url('admin-ajax.php'),
             //   'redirecturl' => home_url('/evento-transmissao/')
            ]
        );
*/

        wp_localize_script(
            'brasos-js',
            'ajax_brasos',
            [
                'ajaxurl' => admin_url('admin-ajax.php'),
                'security' => wp_create_nonce('ajax-resetpassword-nonce'),
              //  'redirecturl' => home_url('/my-account/downloads')
                'redirecturl' => home_url('/my-account/order')
            ]
        );
    }

endif;


add_action('wp_enqueue_scripts', 'brasos_scripts');

// custom login page
function my_login_logo()
{
?>
    <style type="text/css">
        #login h1 a,
        .login h1 a {
            background-image: url(<?php echo get_theme_file_uri('/public/images/logo.png') ?>);
            height: 100px;
            width: 320px;
            background-size: 250px auto;
            background-repeat: no-repeat;
            padding-bottom: 0;
        }
    </style>
<?php
}
add_action('login_enqueue_scripts', 'my_login_logo');




/*

function my_register_stylesheet()
{
?>
    <style type="text/css">
        .register-name {
            display: flex;
            width: 270px;
            padding: 0 0.5em;
        }
    </style>
    <?php


}
add_action('login_enqueue_scripts', 'my_register_stylesheet');

*/





// REDIRECT TO HOME PAGE IF ASSINANTE ACCESS DASHBOARD
// ASSINANTES = SUBSCRIBERS
/*
function dashboard_redirect()
{
    if (is_admin() && !defined('DOING_AJAX') && current_user_can('subscriber')) {
        wp_redirect(home_url());
        exit;
    }
}
add_action('init', 'dashboard_redirect');
*/


// remove SITE NAME from the admin bar
// = no access to the dashboard as subscriber
/*
function ebd_admin_bar_render()
{
    if (!is_admin() && current_user_can('subscriber')) {
        global $wp_admin_bar;
        $wp_admin_bar->remove_node('wp-logo');
        $wp_admin_bar->remove_menu('site-name');
    }
}
add_action('wp_before_admin_bar_render', 'ebd_admin_bar_render');
*/
/*

function override_admin_bar_css()
{
    if (is_admin_bar_showing()) { ?>
        <style type="text/css">
            @media screen and (max-width: 600px) {
                #wpadminbar {
                    position: fixed !important;
                }
            }
        </style>
<?php }
}
// on backend area
add_action('admin_head', 'override_admin_bar_css');
// on frontend area
add_action('wp_head', 'override_admin_bar_css');
*/


/* not sending email registration */
// remove_action('register_new_user', 'wp_send_new_user_notifications');




/* Remove admin bar for subscribers */
/*
if (!current_user_can('manage_options')) {
    show_admin_bar(false);
}



add_filter('authenticate', 'verify_username_password', 1, 3);
*/
