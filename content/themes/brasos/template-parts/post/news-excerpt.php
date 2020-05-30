<div class="box">
  <h3 class="h3-title uk-text-center uk-center"><?php the_title(); ?></h3>
  <div class="uk-card uk-card-default articles-cards-events">
    <a href="<?php the_permalink(); ?>">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    </a>
  </div>
</div>