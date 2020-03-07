<div class="cv-board">
  <h2 class="h2-title"><a href="<?php echo home_url('/conselho-diretor/') ?>">Conselho diretor</a></h2>
  <div class="cv-board__content">
    <div class="background-back">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="">
      <h3 class="h3-title"><?php the_title(); ?></h3>
      <div class="cards">
        <div class="white-card">
          <p><?php the_excerpt(); ?></p>
        </div>
        <div class="green-card">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</div>