<ul class="uk-switcher">

  <!-- INFORMAÇOES BASICAS -->
  <li>
    <!-- LOCAL E DATA -->
    <?php
    $current_page_id = get_the_ID();

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'data-local',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
 
        <div class="blog__content events__layout">
          <h2 class="h2-title uk-text-center"><?php the_title(); ?></h2>
          <div class="blog__content-infos">
            <img class="img-event" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <div class="text-event"><?php the_content(); ?></div>
          </div>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

    <!-- MENSAGEM PRESIDENTE  -->
    <?php

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'mensagem',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <div class="message">
          <h2 class="h2-title uk-text-center"><?php the_title(); ?></h2>
          <div class="message__content"><?php the_content(); ?></div>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

    <!-- COMISSAO ORGANIZADORA -->
    <?php

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'comissao-organizadora',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <div class="events__comissao" uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: false">
          <h2 class="h2-title"><?php the_title(); ?></h2>
          <div class="events__comissao__text box uk-text-center">
            <?php the_content(); ?>
          </div>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

    <!-- SOBRE O EVENTO -->
    <?php

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'sobre-o-evento',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <div class="events__content" uk-scrollspy="cls: uk-animation-slide-bottom; target: .box; delay: 300; repeat: false">
          <div class="event__block box">
            <h2 class="h2-title"><?php the_title(); ?></h2>
            <div class="event__text"><?php the_content(); ?></div>
          </div>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

  </li>

  <!-- ACCORDION PROGRAMACAO -->
  <li>
    <div class="accordion__content events__layout">
      <ul uk-accordion>

        <?php

        $args = [
          'post_type' => 'evento',
          'post_parent' => $current_page_id,
          'category_name'  => 'programacao',
          'posts_per_page' => -1,
          'post_status'    => 'publish',
          'order' => 'ASC'
        ];
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>

            <li>
              <a class="uk-accordion-title href=" #">
                <h3 class="h3-title"><?php the_title(); ?></h3>
              </a>
              <div class="uk-accordion-content">
                <?php the_content(); ?>
              </div>
            </li>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </ul>
    </div>

  </li>

  <!-- PALESTRANTES  -->
  <li>

    <?php

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'palestrantes-convidados',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
        <div class="columns__list-names" uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: true">
          <div class="columns__background">
            <h2 class="h2-title"><?php the_title(); ?></h2>
            <div class="uk-column-1-1 uk-column-1-3@m box">
              <?php the_content(); ?>
            </div>
          </div>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

    <!-- CERTIFICADOS -->
    <?php

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'certificados',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <?php echo do_shortcode('[certificados]'); ?>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

  </li>

  <!-- INFORMAÇOES DE INSCRIÇAO  -->
  <li>

    <?php

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'informacoes-de-pagamento',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>

        <div class="blog__content inscriptions__content">
          <h2 class="h2-title"><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>

    <!-- INFORMAÇOES DE CURSOS -->
    <div class="congress__content events__cards">
      <div uk-flex uk-flex-center uk-grid uk-scrollspy="cls: uk-animation-fade; target: .box; delay: 500; repeat: false">
        <?php

        $args = [
          'post_type' => 'evento',
          'post_parent' => $current_page_id,
          'category_name'  => 'cursos-oferecidos',
          'posts_per_page' => -1,
          'post_status'    => 'publish',
          'order' => 'ASC'
        ];
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
        ?>


            <div class="uk-card uk-card-default box">
              <div class="uk-card-header">
                <h3 class="uk-card-title h3-title">
                  <?php the_title(); ?>
                </h3>
              </div>
              <div class="uk-card-body">
                <?php the_content(); ?>
              </div>
            </div>

        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>

    </div>
    <!-- FORMULARIO DE INSCRIÇAO  -->
    <?php

    $args = [
      'post_type' => 'evento',
      'post_parent' => $current_page_id,
      'category_name'  => 'formulario-de-inscricao',
      'posts_per_page' => -1,
      'post_status'    => 'publish',
      'order' => 'ASC'
    ];
    $wp_query = new WP_Query($args);
    if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
    ?>
        <div class="blog__content inscriptions__content">
          <h2 class="h2-title"><?php the_title(); ?></h2>
          <?php the_content(); ?>

          <div class="uk-flex uk-height-small uk-margin uk-text-center">
            <a class="uk-margin-auto uk-margin-auto-vertical normal-button special-button margin-button" href="#modal-form" uk-toggle><?php the_title(); ?></a>
          </div>
        </div>

        <div id="modal-form" class="uk-flex-top" uk-modal>
          <div class="uk-modal-dialog uk-margin-auto-vertical contact-form contact-form-inscription">
            <h2 class="h2-title">Inscrição</h2>
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="contact-form-block">
              <?php echo do_shortcode('[contact-form-7 id="301" title="Inscrição"]'); ?>
            </div>
          </div>
        </div>

    <?php endwhile;
    endif;
    wp_reset_postdata();
    ?>
    </div>
  </li>
</ul>