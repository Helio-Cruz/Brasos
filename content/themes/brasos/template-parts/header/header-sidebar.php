<!-- SIDEBAR -->
<div id="sidenav" uk-offcanvas="overlay: true; flip: true">
   <div class="uk-offcanvas-bar uk-background-default">
     <button class="uk-offcanvas-close" type="button" uk-close></button>
     <ul class="uk-nav">
       <div class="flag">
         <?php
          $menu = wp_nav_menu([
            'menu' => 'flag',
            'container' => '',
            'items_wrap' => '<a href="%2$s">%3$s</a>',
            'echo' => true
          ]);
          $menu = strip_tags($menu, '<li></li>');
          echo $menu;
          ?>
       </div>
       <li class="uk-nav-divider"></li>
       <li><a href="<?php echo home_url(); ?>">Home</a></li>
       <li class="uk-parent">
         <a href="">Institucional</a>
         <ul class="uk-nav-sub uk-navbar-dropdown-nav">
           <?php
            $menu = wp_nav_menu([
              'menu' => 'subnav-institucional',
              'theme_location' => '',
              'container' => '',
              'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
              'echo' => true
            ]);
            $menu = strip_tags($menu, '');
            echo $menu;
            ?>
         </ul>
       </li>
       <li class="uk-parent">
         <a href="">Eventos</a>
         <ul class="uk-nav-sub uk-navbar-dropdown-nav">
           <?php
            $menu = wp_nav_menu([
              'menu' => 'subnav-eventos',
              'theme_location' => '',
              'container' => '',
              'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
              'echo' => true
            ]);
            $menu = strip_tags($menu, '');
            echo $menu;
            ?>
         </ul>
       </li>
       <?php
        $menu = wp_nav_menu([
          'menu' => 'menu-header',
          'container' => '',
          'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
          'echo' => true
        ]);
        $menu = strip_tags($menu, '');
        echo $menu;
        ?>
     </ul>
   </div>
 </div>