<?php if (get_field('site_web')) : ?>
  <a href="<?php the_field('site_web'); ?>" target="_blank">
    <div class="uk-card uk-card-default uk-card-body articleBrasos__body">
      <img class="uk-align-center uk-flex-middle" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3 class="uk-card-title uk-text-center articleBrasos__title"><?php the_title(); ?></h3>
    </div>
  </a>
<?php else : ?>
  <a href="<?php the_permalink(); ?>">
    <div class="uk-card uk-card-default uk-card-body articleBrasos__body">
      <img class="uk-align-center uk-flex-middle" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3 class="uk-card-title uk-text-center articleBrasos__title"><?php the_title(); ?></h3>
    </div>
  </a>
<?php endif; ?>