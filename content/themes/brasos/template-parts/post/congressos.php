 

 

  <div class="uk-section uk-light uk-background-cover uk-section-large" style="background-image: url(<?php echo get_template_directory_uri() . '/public/images/brasit-foto.jpg' ?>)">
    <div class="uk-container">

       
      <div>
        <?php if (get_field('local')) : ?>
          <p><?php the_field('local'); ?></p>
        <?php endif; ?>
        <br />
        <?php if (get_field('data')) : ?>
          <p><?php the_field('data'); ?></p>
        <?php endif; ?>
        <br />
        <?php if (get_field('link')) : ?>
          <button href="<?php the_field('link'); ?>" class="uk-button uk-button-default">
            <a href="<?php the_field('link'); ?>" target="_blank">Acesse o site</a>
          </button>
        <?php endif; ?>
      </div>

    </div>
  </div>
 