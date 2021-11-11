 <?php

  if (has_category('patrocinadores')) {
  ?>
   <div class="blog__content" style="border: none;box-shadow:none;">
     <?php the_content(); ?>
   </div>
 <?php
    get_template_part('template-parts/woocommerce/footer', 'patrocinio');
  }

  if (has_category('inscrever')) {
  ?>
   <div class="blog__content" style="border: none;box-shadow:none;">
     <?php the_content(); ?>
   </div>
 <?php
    get_template_part('template-parts/woocommerce/footer', 'patrocinio');
  }

  if (has_category('Artigo')) {
  ?>
   <div class="article-cover uk-child-width-1-1">
     <?php
      if (has_post_thumbnail()) {
      ?>
       <img class="article-cover__img" src="<?php the_post_thumbnail_url(); ?>">
       <h3 class="h1-title"><?php the_title(); ?></h3>
     <?php
      }
      ?>
   </div>
   <div class="blog__content">
     <?php the_content(); ?>
   </div>
 <?php
  }
