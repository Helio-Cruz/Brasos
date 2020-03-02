<div class="blog__cover">
    <div class="uk-child-width-1-1" uk-grid>
      <div>
        <div class="uk-card uk-card-default" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
          <div class="uk-card-body">
            <h3 class="uk-card-title"><?php the_title(); ?></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="blog__content">
    <h3 class="h3-title">Subtitulo</h3>
    <p> 
     <?php the_content(); ?>
    </p>
    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    <h3 class="h3-title">Subtitulo</h3>
    <p>
     <?php the_content(); ?>
    </p>
  </div>