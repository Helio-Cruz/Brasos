<!-- SUBNAV -->
<nav class="uk-navbar-container navbar-container-events">
  <div uk-navbar>
    <div class="uk-navbar-center">
      <ul class="uk-navbar-nav navbar-events">
        <?php
        $menu = wp_nav_menu([
          'menu' => 'nav-brasos2019',
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
</nav>