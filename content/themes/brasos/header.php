<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="#">
  <title><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="scss/main.scss" type="text/scss" />

  <?php wp_head(); ?>
</head>
<body>
<?php  get_template_part('template-parts/header/header', 'navbar'); ?>  