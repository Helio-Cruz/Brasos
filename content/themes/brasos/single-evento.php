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
  <h1 class="h1-title "><?php the_title(); ?></h1>
</div>

<!-- NAVIGATION -->
<ul class="uk-subnav navbar-events uk-height-small" uk-switcher>
  <li><a href="#">INFORMAÇÕES GERAIS</a></li>
  <li><a href="#">PROGRAMAÇÃO</a></li>
  <li><a href="#">PALESTRANTES CONVIDADOS</a></li>
  <li><a href="#">INSCRIÇÕES/PAGAMENTO</a></li>
</ul>

<?php get_template_part('template-parts/post/event', 'full'); ?>

<?php get_footer(); ?>