
      <div class="uk-card uk-card-default box">
        <div class="uk-card-header">
          <h3 class="uk-card-title h3-title">
            <?php if( get_field('link') ): ?>
            <a href="<?php the_field('link'); ?>" target="_blank"><?php the_title(); ?></a>
            <?php endif; ?>
          </h3>
        </div>
        <div class="uk-card-body">
        <?php if( get_field('local') ): ?>
          <h4>Local</h4>
          <p><?php the_field('local'); ?></p>
        <?php endif; ?>
        <?php if( get_field('data') ): ?>
          <h4>Data</h4>
          <p><?php the_field('data'); ?></p>
        <?php endif; ?>
        </div>
      </div>