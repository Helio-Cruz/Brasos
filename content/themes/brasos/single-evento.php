<?php get_header(); ?>

<!-- IMAGE COVER -->
<div class="events-cover uk-child-width-1-1" uk-grid>
  <img class="events-cover__img" src="<?php if (class_exists('MultiPostThumbnails')) :
                                        MultiPostThumbnails::the_post_thumbnail(
                                          get_post_type(),
                                          'evento-thumbnail-2'
                                        );
                                      else :
                                        the_post_thumbnail_url();
                                      endif; ?>">
  <!-- <h1 class="h1-title "><//?php the_title(); ?></h1>-->
</div>

<!-- NAVIGATION -->
<ul class="uk-subnav navbar-events" uk-switcher>
  <?php if (have_rows('informacoes_basicas') || have_rows('mensagem_do_presidente') || get_field('comissao_organizadora') || have_rows('sobre_o_evento') || get_field('turismo')) : ?>
    <li><a href="#">INFORMAÇÕES GERAIS</a></li>
  <?php endif; ?>
  <?php if (have_rows('programacao')) : ?>
    <li><a href="#">PROGRAMAÇÃO</a></li>
  <?php endif; ?>
  <?php if (get_field('palestrantes')) : ?>
    <li><a href="#">PALESTRANTES CONVIDADOS</a></li>
  <?php endif; ?>
  <?php if (have_rows('valores') || have_rows('cursos') || get_field('formulario_de_inscricao')) : ?>
    <li><a href="#">INSCRIÇÕES/PAGAMENTO</a></li>
  <?php endif; ?>
</ul>

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

    get_template_part('template-parts/post/event', 'full');

  endwhile;
endif;
wp_reset_postdata(); ?>

<?php get_footer(); ?>