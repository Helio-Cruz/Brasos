<?php get_header(); ?>

<?php  get_template_part('template-parts/home/home', 'carousel'); ?>  
<?php  get_template_part('template-parts/home/home', 'carousel-2'); ?>  
<?php  get_template_part('template-parts/home/home', 'blog'); ?>  
<?php  get_template_part('template-parts/home/home', 'brasos'); ?>  
<?php

              // $args = [
              //   'category_name' => 'Congressos'
              //     //  'posts_per_page'    => 1
              //   ];

              //   $wp_query = new WP_Query($args);

              //   if ($wp_query->have_posts()): while ($wp_query->have_posts()): $wp_query->the_post();

              //          the_title();

              //              the_content();  

              //        endwhile; endif;

              // //  wp_reset_postdata();

?>

<?php get_footer(); ?>