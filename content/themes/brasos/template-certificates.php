<?php
/*
Template Name: Certificados
*/
?>
 
<?php

if (!is_page('login') && !is_page('register') && !is_user_logged_in()) {
    auth_redirect();
} elseif (is_user_logged_in()) {
    get_template_part('template-parts/post/certificate', 'template');
}

?>

 