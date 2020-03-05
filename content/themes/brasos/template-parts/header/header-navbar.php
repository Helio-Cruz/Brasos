 <!-- NAVBAR -->
 <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">
   <nav class="uk-navbar-container" uk-navbar="dropbar: true;">
     <div class="uk-navbar-center uk-visible">
       <ul class="uk-navbar-nav">
         <li>
           <div class="header-nav__logo">
             <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/public/images/logo.png' ?>" alt=""></a>
           </div>
         </li>
       </ul>
       <ul class="uk-navbar-nav">
         <li><a href="<?php echo home_url(); ?>">Home</a></li>
         <li>
           <a href="">Institucional</a>
           <div class="uk-navbar-dropdown">
             <ul class="uk-nav uk-navbar-dropdown-nav">
               <?php
                $menu = wp_nav_menu([
                  'menu' => 'subnav',
                  'theme_location' => 'menu-top',
                  'container' => '',
                  'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
                  'echo' => true
                ]);
                $menu = strip_tags($menu, '');
                echo $menu;
                ?>
             </ul>
           </div>
         </li>
         <li>
           <a href="">Eventos</a>
           <div class="uk-navbar-dropdown">
             <ul class="uk-nav-sub uk-navbar-dropdown-nav">
               <?php
                $menu = wp_nav_menu([
                  'menu' => 'menu-header',
                  //  'theme_location' => 'menu-top',
                  // 'container_class' => '',
                  'container' => '',
                  'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
                  'echo' => true
                ]);
                $menu = strip_tags($menu, '');
                echo $menu;
                ?>
             </ul>
           </div>
         </li>
         <?php
          $menu = wp_nav_menu([
            'menu' => 'menu-header',
            //  'theme_location' => 'menu-top',
            // 'container_class' => '',
            'container' => '',
            'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
            'echo' => true
          ]);
          $menu = strip_tags($menu, '');
          echo $menu;
          ?>
       </ul>
       <ul class="uk-navbar-nav">
         <div class="flag">
           <?php
            $menu = wp_nav_menu([
              'menu' => 'flag',
              'container_class' => '',
              'container' => '',
              'items_wrap' => '<a href="%2$s">%3$s</a>',
              'echo' => true
            ]);
            $menu = strip_tags($menu, '<li></li>');
            echo $menu;
            ?>
         </div>
       </ul>
       <a href="#" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
     </div>
   </nav>
 </div>
 <div id="sidenav" uk-offcanvas="overlay: true; flip: true">
   <div class="uk-offcanvas-bar uk-background-default">
     <button class="uk-offcanvas-close" type="button" uk-close></button>
     <ul class="uk-nav">
       <div class="flag">
         <li>
           <a href="#">
             <img src="<?php echo get_template_directory_uri() . '/public/images/flag/brazil.png' ?>" alt="">
           </a>
         </li>
         <li>
           <a href="#">
             <img src="<?php echo get_template_directory_uri() . '/public/images/flag/usa.png' ?>" alt="">
           </a>
         </li>
       </div>
       <li class="uk-nav-divider"></li>
       <li><a href="index.html">Home</a></li>
       <li class="uk-parent">
         <a href="">Institucional</a>
         <ul class="uk-nav-sub uk-navbar-dropdown-nav">
           <li><a href="institutional.html">Brasos</a></li>
           <li><a href="law.html">Estatuto Abeti</a></li>
           <li><a href="words.html">Palavras do Presidente</a></li>
           <li><a href="directory.html">Conselho Diretor</a></li>
         </ul>
       </li>
       <li class="uk-parent">
         <a href="">Eventos</a>
         <ul class="uk-nav-sub uk-navbar-dropdown-nav">
           <li><a href="">BRASIT 2020</a></li>
           <li><a href="">BRASOStbt 2019</a></li>
           <li><a href="">BRASIT 2018</a></li>
         </ul>
       </li>
       <li><a href="articles.html">Artigos</a></li>
       <li><a href="contact.html">Contato</a></li>
       <li><a href="member.html">Torne-se membro</a></li>
     </ul>
   </div>
 </div>
 <!-- MENU MOBILE -->
 <div class="menu-mobile" uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky;">
   <div class="header-nav__logo">
     <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/public/images/logo.png' ?>" alt=""></a>
   </div>
   <a href="#" class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
 </div>