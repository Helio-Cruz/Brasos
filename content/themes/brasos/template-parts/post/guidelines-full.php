<div class="uk-card uk-card-default uk-card-body uk-width-1-2@m uk-flex tree guidelines uk-card-hover">
  <div class="uk-card-body">
    <?php if (get_field('guidelines_imagem')) : ?>
      <img data-src="<?php the_field('guidelines_imagem'); ?>" src="<?php the_field('guidelines_imagem'); ?>" uk-img />
    <?php endif; ?>
  </div>
  <div class="uk-card-body">
    <h3><?php the_title(); ?></h3>
    <p><?php the_field('guidelines_texto'); ?></p>
    <?php
    $link = get_field('guidelines_link');
    if ($link) :
    ?>
      <button class="general-button">
        <a class="uk-link-toggle" target="blank" href="<?php echo esc_url($link); ?>">
          <span class="uk-link-heading">Acesse</span>
        </a>
      </button>
    <?php endif; ?>
  </div>
</div>