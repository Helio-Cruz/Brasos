<?php
/*
Template Name: Area de Membros
*/
?>
<?php get_header(); ?>


<?php

$current_user = wp_get_current_user();

if ( is_page('membros') && !is_user_logged_in() ) {

  get_template_part('404');
 

} elseif( is_page('membros') && is_user_logged_in() ) {
?>
    <div class="page-membros">

        <div class="page-membros__header">
            <?php printf(__('Bem Vindo, %s .', 'textdomain'), esc_html($current_user->user_firstname)); ?>
            <a href="<?php echo wp_logout_url(home_url()); ?>" title="Logout">Sair <span uk-icon="icon: sign-out"></span></a>
        </div>

        <?php
        $args = [
            'post_type' => 'area_de_membros',
            'posts_per_page' => -1,
            'post_status'    => 'publish'
        ];

        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

                get_template_part('template-parts/post/membros-content', 'excerpt');

            endwhile;
        endif;

        wp_reset_postdata();
        ?>

    </div>
<?php
}

?>
<?php get_footer(); ?>