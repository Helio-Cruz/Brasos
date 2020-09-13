<?php get_header(); ?>

<?php
$args = [
  'post_type' => 'certificados',
  'posts_per_page' => -1,
  'order' => 'ASC',
];
$wp_query = new WP_Query($args); ?>

<div class="diplom__content">
  <div class="diplom__research">
    <h2 class="h2-title">CERTIFICADOS</h2>
    <p>Insira seu nome completo com as iniciais em maiúsculo</p>
    <?php if ($wp_query->have_posts()) : ?>
      <form action="" class="uk-search uk-search-default" method="post">
        <input class="uk-search-input" type="search" placeholder="Digite seu nome completo..." list="people" name="person" id="person">
        <!-- <datalist id="">
          < ?php while ($wp_query->have_posts()) : $wp_query->the_post();
            $users = get_field('nome_do_palestrante');
          ?>
            <option value="< ?= $users; ?>">< ?= $users; ?></option>
          < ?php endwhile; ?>
        </datalist> -->
        <button class="uk-search-icon-flip"><input name="person-submit" type="submit" uk-search-icon></button>
      </form>
      <p class="diplom-error-message">Seu nome não foi encontrado.</p>
    <?php endif; ?>

    <div class="diplom__show">

      <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
          $user = $_POST['person'];
          $users = get_field('nome_do_palestrante');

          if ($user === $users) : ?>

            <h3 class="h3-title"><?php echo $users; ?></h3>

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
          <?php endif;  ?>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>