<?php
/*
Template Name: Area de Membros
*/
?>
<?php get_header(); ?>

<?php

$current_user = wp_get_current_user();

if (!is_user_logged_in()) {
    get_template_part('page-login');
} else {
    (wp_redirect('membros'));
?>
    <div class="page-membros">

        <div class="page-membros__header">
            <?php printf(__('Bem Vindo, %s', 'textdomain'), esc_html($current_user->user_firstname)) . '.' ; ?>
            <a href="<?php echo wp_logout_url(home_url()); ?>" title="Logout">Sair <span uk-icon="icon: sign-out"></span></a>
        </div>

        <?php get_template_part('template-parts/post/membros', 'content'); ?>
    </div>

<?php

}

get_footer(); ?>