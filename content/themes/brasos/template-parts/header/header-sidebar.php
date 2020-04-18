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
            <?php
        $menu = wp_nav_menu([
          // 'menu' => 'menu-header',
          'menu' => 'menu-mobile',
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
        <ul class="uk-nav uk-flex uk-flex-center uk-position-center">
          <li>
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri() . '/public/images/logo.png' ?>" alt="">
            </a>
          </li>
        </ul>
      </div>
      </ul>
    </div>
  </div>