<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php 
//   $cookie_name = "user";
//   $cookie_value = "John Doe";
//    $setCookie = $_COOKIE['my_setcookie'];
//    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

//    if(!isset($_COOKIE[$cookie_name])) {
//     echo "Cookie named '" . $cookie_name . "' is not set!";
// } else {
//     echo "Cookie '" . $cookie_name . "' is set!<br>";
//     echo "Value is: " . $_COOKIE[$cookie_name];
// }
?>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=" Brasos Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia">
  <link rel="icon" href=" <?php echo get_template_directory_uri() . '/public/images/favicon.ico' ?>">
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165049558-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165049558-1');
</script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php get_template_part('template-parts/header/header', 'navbar'); ?>
  <?php get_template_part('template-parts/header/header', 'navbarmobile'); ?>
  <?php get_template_part('template-parts/header/header', 'sidebar'); ?>