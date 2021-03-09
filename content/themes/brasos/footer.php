 <div class="uk-section uk-section-muted footer-nav">
   <div class="uk-container">
     <h2 class="footer-nav__title fadeBottom">Faça Parte da Nossa Comunidade</h2>
     <button class="footer-nav__button">
       <a href="<?php echo esc_url(get_permalink(get_page_by_title('Torne-se Membro'))); ?>"><?php esc_html_e('Torne-se Membro', 'textdomain'); ?></a>
     </button>
   </div>
   <div uk-navbar class="footer-nav__menu-fast ">
     <div class="uk-navbar-center">
       <ul class="uk-navbar-nav uk-flex-wrap uk-child-width-expand@s">
         <?php
          $menu = wp_nav_menu([
            'menu' => 'menu-footer',
            'container' => false,
            'items_wrap' => '%3$s',
            'echo' => true
          ]);
          $menu = strip_tags($menu, '<li><a href="%2$s">');
          echo $menu;
          ?>
       </ul>
     </div>
   </div>

   <div class="uk-grid-match uk-child-width-expand@s footer-nav__contact" uk-grid>
     <div>
       <p>Responsável Técnico<br>
         <b>Antonio Martins Tieppo<br></b>
         Primeiro Secretário<br>
         CRM/SP: 47.777
       </p>
     </div>
     <div class="footer-nav__media-social">
       <div class="uk-flex-wrap">
         <?php
          $menu = wp_nav_menu([
            'menu' => 'midia-social',
            'container' => '',
            'items_wrap' => '<a href="%2$s">%3$s</a>',
            'echo' => true
          ]);
          $menu = strip_tags($menu, '<div></div>');
          echo $menu;
          ?>
         <p>secretario@brasos.med.br</p>
       </div>

     </div>
   </div>
 </div>
 <div class="uk-grid-match uk-child-width-expand@s footer-mentions" uk-grid>
   <div>
     <p>Copyright © 2014 - <?php echo date('Y') ?> Agência Fazer</p>
   </div>
   <div class="footer-nav__logo">
     <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/public/images/logo.png' ?>" alt=""></a>
   </div>
   <div>
     <a id="indiceBtn" uk-icon="icon: chevron-up"></a>
   </div>
 </div>
 </div>
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
 


 <?php wp_footer(); ?>
 </body>

 </html>