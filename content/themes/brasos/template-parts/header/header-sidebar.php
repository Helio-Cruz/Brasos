<!-- SIDEBAR -->
<div id="sidenav" uk-offcanvas="overlay: true; flip: true">
  <div class="uk-offcanvas-bar uk-background-default">
    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <div class="white-block">
      <ul class="uk-nav">
        <div class="flag">
        <?php
          $menu = wp_nav_menu([
            'menu' => 'flag',
            'container' => false,
            'items_wrap' => '%3$s',
            'echo' => true
          ]);
          $menu = strip_tags($menu, '<li><a href="%2$s">');
          echo $menu;
          ?>
        </div>
        <li><a href="<?php echo home_url(); ?>">Home</a></li>
        <li><a href="<?php echo home_url('/aboutBrasos/'); ?>">Institucional</a></li>
        <li><a href="<?php echo home_url('/events/'); ?>">Eventos</a></li>
        <!-- <li class="uk-parent">
         <a href="">Institucional</a>
         <ul class="uk-nav-sub uk-navbar-dropdown-nav">
           < ?php
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
           < ?php
            $menu = wp_nav_menu([
              'menu' => 'subnav-eventos',
              'theme_location' => '',
              'container' => '',
              'items_wrap' => '<li><a href="%2$s">%3$s</a></li>',
              'echo' => true
            ]);
            $menu = strip_tags($menu, '');
            echo $menu;
            ?> -->
            <?php
        $menu = wp_nav_menu([
          'menu' => 'menu-header',
          'container' => false,
          'items_wrap' => '%3$s',
          'echo' => true
        ]);
        $menu = strip_tags($menu, '<li><a href="%2$s">');
        echo $menu;
        ?>
      </ul>
    </div>
    <div class="green-block">
      <div class="green-diagonal"></div>
      <ul class="uk-nav uk-flex uk-flex-center uk-flex-wrap">
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
    </ul>
  </div>
</div>