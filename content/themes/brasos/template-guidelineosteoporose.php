<?php
/*
Template Name:  Guidelines em Osteoporose
*/
?>
<?php get_header(); ?>

<?php
        $args = [
                'post_type' => 'guidelines',
                'category_name' => 'Guideline Osteoporose',
                'posts_per_page' => -1,
                'post_status'    => 'publish',
                'order' => 'DESC'
        ];

        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

                        get_template_part('template-parts/post/guidelines', 'full');

                endwhile;
        endif;
        wp_reset_query();
?>

<?php get_footer(); ?>