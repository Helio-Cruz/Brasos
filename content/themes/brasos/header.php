<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=" Brasos Brazilian Society for Osteoarthritis, Osteoporosis and Sarcopenia">
  <link rel="icon" href=" <?php echo get_template_directory_uri() . '/public/images/favicon.ico' ?>">
  <?php wp_head(); ?>
</head>

<body>
  <?php get_template_part('template-parts/header/header', 'navbar'); ?>
  <?php get_template_part('template-parts/header/header', 'navbarmobile'); ?>
  <?php get_template_part('template-parts/header/header', 'sidebar'); ?>