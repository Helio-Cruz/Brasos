<?php
/*
Template Name: Referências Nacionais
*/
?>
 <?php get_header(); ?>
 <div class="ref-nacionais">
    <h2>Referências Nacionais</h2>
    <div uk-flex uk-flex-center uk-grid>
       <div class="uk-card uk-card-default ref-nacionais__card">
         <img data-src="<?php echo get_template_directory_uri() . '/public/images/referencias/nacionais/abm.png' ?>"   alt="" uk-img>
       </div>
       <div class="uk-card uk-card-default ref-nacionais__card">
         <img data-src="<?php echo get_template_directory_uri() . '/public/images/referencias/nacionais/sbed.jpg' ?>"   alt="" uk-img>
      </div>
   </div>

  <div uk-flex uk-flex-center uk-grid>
      <div class="uk-card uk-card-default ref-nacionais__card">
        <img data-src="<?php echo get_template_directory_uri() . '/public/images/referencias/nacionais/sbg.png' ?>"   alt="" uk-img>
      </div>
      
      <div class="uk-card uk-card-default ref-nacionais__card">
        <img data-src="<?php echo get_template_directory_uri() . '/public/images/referencias/nacionais/sbot.png' ?>"   alt="" uk-img>
      </div>  
  </div>

    <div uk-flex uk-flex-center uk-grid>
        <div class="uk-card uk-card-default ref-nacionais__card">
            <img data-src="<?php echo get_template_directory_uri() . '/public/images/referencias/nacionais/sc.png' ?>"   alt="" uk-img>
        </div>
        <div class="uk-card uk-card-default ref-nacionais__card">
            <img data-src="<?php echo get_template_directory_uri() . '/public/images/referencias/nacionais/sb.png' ?>"   alt="" uk-img>
        </div>
   </div>
</div>
 <?php get_footer(); ?>