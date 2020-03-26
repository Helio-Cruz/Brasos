<?php

// if ( ! post_password_required( $post ) ) {
//       // Your custom code should here
//       get_template_part('template-parts/template', 'ebdbook');
// }else{
//     // we will show password form here
//     echo get_the_password_form();
// }


global $current_user;
global $user_login;
$username = $current_user->user_login;
$users = get_field('nome_do_palestrante');
$show_content = true;

if (!is_page('login') && !is_page('register') && !is_user_logged_in()) {
    auth_redirect();
} elseif (is_user_logged_in() && $users) {
    $show_content = false;
    foreach ($users as $user) {
        // Loop through each user array from the ACF field
        if ($user['display_name'] == $username) {
            $show_content = true;
            break;
        }
    }
}
?>

<?php if ($show_content) {
    get_template_part('template-parts/certificate/certificate', 'template');
} ?>