<div class="bw-videos uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    <div class="uk-card-media-left uk-cover-container">
        <div>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="" uk-cover>
            <canvas width="800" height="400"></canvas>
        </div>
    </div>
    <div class="uk-card-body">
        <h3 class="uk-card-title"><?php the_title(); ?></h3>
        <a href="<?php the_permalink(); ?>">Assistir</a>
    </div>
</div>