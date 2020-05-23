<!DOCTYPE html>
<html <?php language_attributes(); ?>>

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

<body>
  <?php get_template_part('template-parts/header/header', 'navbar'); ?>
  <?php get_template_part('template-parts/header/header', 'navbarmobile'); ?>
  <?php get_template_part('template-parts/header/header', 'sidebar'); ?>