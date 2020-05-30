 <div>
     <div class="uk-card uk-card-default box">
         <a href="<?php the_permalink(); ?>">
             <div class="uk-card-media-top">
                 <img src="<?php the_post_thumbnail_url(); ?>" alt="">
             </div>
             <div class="uk-card-body">
                 <h3 class="uk-card-title h3-title"><?php the_title(); ?></h3>
                 <p>                
                     <?php  echo substr(get_the_excerpt(), 0,155).'...'; ?>
                 </p>
             </div>
         </a>
     </div>
 </div>