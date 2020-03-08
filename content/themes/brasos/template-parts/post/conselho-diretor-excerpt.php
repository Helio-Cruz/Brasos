<div class="board__card">
  <a href="<?php the_permalink(); ?>">
    <div class="board__card__image">
      <img src="<?php the_post_thumbnail_url(); ?>">
    </div>
    <div class="board__card__body">
      <h3 class="h3-title"><?php the_title(); ?></h3>
      <?php the_excerpt(); ?>
    </div>
  </a>
</div>