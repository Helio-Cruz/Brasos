<!-- SUBNAV -->
<nav class="uk-navbar-container">
  <div uk-navbar>
    <div class="uk-navbar-center">
      <ul class="uk-navbar-nav navbar-events">
        <?php
        $menu = wp_nav_menu([
          'menu' => 'nav-brasos2019',
          'container_class' => '',
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
</nav>