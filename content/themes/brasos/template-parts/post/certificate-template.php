<?php get_header(); ?>
<div class="diplom__content">
  <div class="diplom__research">
    <h2 class="h2-title">CERTIFICADOS</h2>
    <h3 class="h3-title">BRASIT 2018 - BRASOStbt 2019</h3>

    <!-- <form class="uk-search uk-search-default">
      <a href="" class="uk-search-icon-flip" uk-search-icon></a>
      <input class="uk-search-input" type="search" name="s" placeholder="Search...">
    </form>
    <p>Por favor, digite seu nome para acessar os certificados disponíveis.</p>
 </div> -->


    <div class="diplom__show">

      <?php
      $args = [
        'post_type' => 'certificados',
        'posts_per_page' => -1,
        'order' => 'ASC',
      ];
      $wp_query = new WP_Query($args); ?>

      <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

          <?php
          $current_user = get_current_user_id();
          $selected_user = get_field('nome_do_palestrante');
          // if logged_in user is the same as the user selected in ACF "user" field
          // show the post of that user only

          // if logged_in user is an admin
          // show posts of all users
          if (($current_user == $selected_user['ID']) || ($current_user == current_user_can('administrator'))) : ?>
          
            <?php if ($selected_user) : ?>
            <h3 class="h3-title"><?php echo $selected_user['display_name']; ?></h3>
            <?php endif; ?>

            <div uk-flex uk-flex-center uk-grid>
              <?php if (have_rows('certificados')) : while (have_rows('certificados')) : the_row(); ?>
                  <?php $file = get_sub_field('certificado'); ?>
                  <?php $title = get_sub_field('titulo_do_certificado'); ?>
                  <div class="uk-card uk-card-default uk-card-hover">
                    <a href="<?php echo $file['url']; ?>" target="_blank">
                      <div class="uk-card-header">
                        <img class="uk-border-circle" src="<?php echo get_template_directory_uri() . '/public/images/certificate_icon.png' ?>">
                      </div>
                      <div class="uk-card-body">
                        <h3 class="h3-title"><?php echo $title; ?></h3>
                        <p>
                          <a class="download_image" href="<?php echo $file['url']; ?>" download>Clique para fazer download</a>
                        </p>
                      </div>
                    </a>
                  </div>
              <?php endwhile;
              endif; ?>
            </div>

          <?php endif; ?>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>