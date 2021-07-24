<?php get_header(); ?>

<!-- IMAGE COVER -->
<div class="events-cover uk-child-width-1-1" uk-grid>
  <img class="events-cover__img" src="<?php the_post_thumbnail_url(); ?>" alt="" />
</div>

<!-- NAVIGATION -->
<div class="uk-subnav navbar-events">
  <?php
  $link = get_field('inscreva-se');
  if ($link) :
  ?>
    <a class="normal-link normal-link-one" target="_blank" href="<?php echo esc_url($link);  ?>">INSCREVA-SE</a>
  <?php endif; ?>
</div>
<ul class="uk-subnav navbar-events" uk-switcher>
  <li>
    <a href="#">INFORMAÇÕES GERAIS</a>
  </li>
  <li>
  <?php  echo (have_rows('programacao')) ? '<a href="#">PROGRAMAÇÃO</a>' : null ;  ?>
  </li>
  <li>
    <?php  echo (have_rows('palestrantes_nacionais')) && (have_rows('palestrantes_internacionais'))  ? '<a href="#">PALESTRANTES CONVIDADOS</a>' : null ;  ?>
  </li>
</ul>
<!--
  <div class="uk-subnav navbar-events">
  <a class="normal-link" href="<//?php echo site_url('/certificados/'); ?>">CERTIFICADOS</a>
</div>
-->


<?php
$current_page_id = get_the_ID();
$args = [
  'post_type' => 'evento',
  'p' => $current_page_id,
  'posts_per_page' => -1,
  'post_status'    => 'publish',
  'order' => 'ASC'
];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();

    get_template_part('template-parts/events/event', 'full');

  endwhile;
endif;
wp_reset_postdata(); ?>

<?php get_footer(); ?>