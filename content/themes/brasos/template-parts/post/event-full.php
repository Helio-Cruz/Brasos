<!-- INFORMAÇOES BASICAS -->
<?php
$args = [
  'post_type' => 'evento',
  'category_name'  => 'informacoes-data-local',
  'posts_per_page' => -1,
  'post_status'    => 'publish',
  'order' => 'ASC'
];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
?>

    <div class="blog__content">
      <h2 class="h2-title uk-text-center"><?php the_title(); ?></h2>
      <div class="blog__content-infos">
        <img class="img-event" src="<?php the_post_thumbnail_url(); ?>" alt="">
        <div class="text-event"><?php the_content(); ?></div>
      </div>
    </div>


<?php endwhile;
endif;  ?>

<!-- MENSAGEM PRESIDENTE -->
<?php
$args = [
  'post_type' => 'evento',
  'category_name'  => 'mensagem',
  'posts_per_page' => -1,
  'post_status'    => 'publish',
  'order' => 'ASC'
];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
?>

    <section>
      <div class="message">
        <h2 class="h2-title uk-text-center"><?php the_title(); ?></h2>
        <div class="message__content"><?php the_content(); ?></div>
      </div>
    </section>

<?php endwhile;
endif;  ?>


<!-- COMMISAO + BRASOS -->
<div class="events__content">
  <?php
  $args = [
    'post_type' => 'evento',
    'category_name'  => 'comissao',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'order' => 'ASC'
  ];
  $wp_query = new WP_Query($args);
  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

      <div class="event__block">
        <h2 class="h2-title uk-text-center"><?php the_title(); ?></h2>
        <div class="event__text"><?php the_content(); ?></div>
      </div>

  <?php endwhile;
  endif;  ?>
</div>

<!-- CERTIFICATES -->
<?php
$args = [
  'post_type' => 'evento',
  'category_name'  => 'certificados',
  'posts_per_page' => -1,
  'order' => 'ASC'
];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
?>

    <?php echo do_shortcode('[certificados]'); ?>

<?php endwhile;
endif;  ?>


<!-- ACCORDION PROGRAMACAO -->
<div class="accordion__content">
  <h2 class="h2-title">Programação</h2>
  <ul uk-accordion>

    <?php
    $args = [
      'post_type' => 'evento',
      'category_name'  => 'programacao',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <li>
          <a class="uk-accordion-title uk-accordion-title-xs" href="#">
            <h3 class="h3-title"><?php the_title(); ?></h3>
          </a>
          <div class="uk-accordion-content">
            <?php the_content(); ?>
          </div>
        </li>

    <?php endwhile;
    endif;  ?>
</div>

<!-- PALESTRANTES -->
<?php
$args = [
  'post_type' => 'evento',
  'category_name'  => 'palestrantes',
  // 'category_in' => '18', // category child "palestrantes"
  'posts_per_page' => -1,
  'order' => 'ASC'
];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
?>
    <div class="columns__list-names">
      <div class="columns__background">
        <h2 class="h2-title"><?php the_title(); ?></h2>
        <div class="uk-column-1-1 uk-column-1-3@m">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
    
<?php endwhile;
endif;  ?>


<div class="blog__content inscriptions__content">
  <!-- INFORMAÇOES DE INSCRIÇAO -->
  <?php
  $args = [
    'post_type' => 'evento',
    'category_name'  => 'informations-inscriptions',
    'posts_per_page' => -1,
    'order' => 'ASC'
  ];
  $wp_query = new WP_Query($args);
  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

      <?php the_content(); ?>

  <?php endwhile;
  endif;  ?>

  <!-- INFORMAÇOES DE CURSOS-->
  <?php
  $args = [
    'post_type' => 'evento',
    'category_name'  => 'cursos',
    'posts_per_page' => -1,
    'order' => 'ASC'
  ];
  $wp_query = new WP_Query($args);
  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
  ?>

      <h3 class="h3-title"><?php the_title(); ?></h3>
      <?php the_content(); ?>

  <?php endwhile;
  endif;  ?>

</div>

<!-- FORMULARIO DE INSCRIÇAO -->
<?php
$args = [
  'post_type' => 'evento',
  'category_name'  => 'formulario-de-inscricao',
  'posts_per_page' => -1,
  'order' => 'ASC'
];
$wp_query = new WP_Query($args);
if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
?>
    <div class="blog__content inscriptions__content">
      <?php the_content(); ?>
    </div>
    <section uk-height-viewport class="contact-section inscription-section">
      <div class="contact-form contact-form-inscription">
        <h2 class="h2-title">Inscrição</h2>
        <div class="contact-form-block">
          <?php echo do_shortcode('[contact-form-7 id="301" title="Inscrição"]'); ?>
        </div>
      </div>
    </section>

<?php endwhile;
endif;  ?>