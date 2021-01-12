<?php get_header();

 $setCookie = $_COOKIE['my_setcookie'];
$popup = get_theme_mod('brasos_popup_image');
$default = null;
$img = !empty($popup) && isset($_COOKIE['popup_cookie']) ? $popup : $default;
$img = !empty($popup) ? $popup : $default;

// if(isset($$setCookie)) {
//  // $setCookie = $_COOKIE['my_setcookie'];
 
//   echo $popup;
//   var_dump($popup);
// } else {
//   $default;
//   echo $default;
// }
 
?>
<?php 
// $cookie_name = "user";
// $cookie_value = "John Doe";
//  $setCookie = $_COOKIE['my_setcookie'];
//  setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//  if(!isset($_COOKIE[$cookie_name])) {
//   echo "Cookie '" . $cookie_name . "' is set!<br>";
//   echo "Value is: " . $_COOKIE[$cookie_name];
// } else {
//   echo "Cookie named '" . $cookie_name . "' is not set!";
// }
?>
 
<!-- POP UP -->
<!-- This is a button toggling the modal with the outside close button -->
<div id="modal-media-image" class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
    <button class="uk-modal-close-outside" type="button" uk-close></button>
    <img class="modal-image" src="<?= $img; ?>" alt="">
    <!--
      <//?php echo do_shortcode('[link_popup link="https://regency.iweventos.com.br/site/brasit2020/inscreva-se" text="Mais informações e inscrição, Acesse"]'); ?>
    -->
  </div>
</div>

<!-- POP UP  brasit2020 media-->
<!-- This is a button toggling the modal with the outside close button -->
<div id="modal-media-brasit2020"  class="uk-flex-top" uk-modal>
  <div class="uk-modal-dialog uk-width-auto uk-margin-auto-vertical">
    <button class="uk-modal-close-outside" type="button" uk-close></button>
      <iframe
          src="https://www.youtube.com/embed/pKxNDvlUX3M?showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1"
          width="1000" height="560" frameborder="0" allowfullscreen uk-responsive uk-video="autoplay=false">
      </iframe>
  </div>
</div>


<?php get_template_part('template-parts/home/home', 'carousel'); ?>
<?php get_template_part('template-parts/home/home', 'blog'); ?>
<?php get_template_part('template-parts/home/home', 'brasos'); ?>
<?php get_template_part('template-parts/home/footer', 'images'); ?>

<?php get_footer(); ?>