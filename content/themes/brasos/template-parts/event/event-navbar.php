<!-- SUBNAV -->
<nav class="uk-navbar-container navbar-container-events">
  <div uk-navbar>
    <div class="uk-navbar-center">
      <ul class="uk-navbar-nav">
        <?php
        $menu = wp_nav_menu([
          'menu' => 'nav-brasos2019',
          'container_class' => '',
          'container' => '',
          'items_wrap' => '<li class="navbar-events"><a href="%2$s">%3$s</a></li>',
          'echo' => true
        ]);
        $menu = strip_tags($menu, '');
        echo $menu;
        ?>
      </ul>
    </div>
  </div>
</nav>