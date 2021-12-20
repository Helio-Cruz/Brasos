<?php get_header(); ?>

<!-- IMAGE COVER -->
<div class="events-cover uk-child-width-1-1" uk-grid>
  <img class="events-cover__img" src="<?php the_post_thumbnail_url(); ?>" alt="" />
</div>


<!-- NAVIGATION -->

<ul class="uk-subnav navbar-events" uk-switcher>
  <?php
  $post = $wp_query->get_queried_object();
  $pagename = $post->post_name;
  if ($pagename === 'brasostba-2021') { ?>
    <li> <a href="">Ao Vivo 03/12</a></li>
    <li> <a href="">Ao Vivo 04/12</a></li>
    <li> <?= (get_field('valores_de_inscricao')) ? '<a href="#">Valores de inscrição</a>' : '';  ?></li>
    <li> <?= (get_field('sobre_o_evento')) ? '<a href="#">Política de Inscrição</a>' : '';  ?></li>
    <li> <?= (get_field('palavra_do_presidente')) ? '<a href="#">PALAVRA DO PRESIDENTE</a>' : '';  ?></li>
    <li> <?= (get_field('palavra_do_secretario')) ? '<a href="#">PALAVRA DO SECRETÁRIO</a>' : '';  ?></li>
    <li> <?= (have_rows('palestrantes_nacionais')) && (have_rows('palestrantes_internacionais'))  ? ' <a href="#">PALESTRANTES CONVIDADOS</a>' : '';  ?></li>
    <li> <a href="#">Certificados</a> </li>
  <?php } else { ?>
    <li> <?= (get_field('sobre_o_evento')) ? '<a href="#">Informaçoes gerais</a>' : '';  ?></li>
    <li> <?= (have_rows('programacao')) ? '<a href="#">PROGRAMAÇÃO</a>' : '';  ?> </li>
    <li> <?= (have_rows('palestrantes_nacionais')) && (have_rows('palestrantes_internacionais'))  ? ' <a href="#">PALESTRANTES CONVIDADOS</a>' : '';  ?></li>

  <?php  }
  ?>
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