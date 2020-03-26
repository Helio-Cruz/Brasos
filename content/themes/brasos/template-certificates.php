<?php
/*
Template Name: Certificados
*/
?>
 
<?php

// if ( ! post_password_required( $post ) ) {
//       // Your custom code should here
//       get_template_part('template-parts/template', 'ebdbook');
// }else{
//     // we will show password form here
//     echo get_the_password_form();
// }

if (!is_page('login') && !is_page('register') && !is_user_logged_in()) {
    auth_redirect();
} elseif (is_user_logged_in()) {
    get_template_part('template-parts/post/certificate', 'template');
}

?>

 