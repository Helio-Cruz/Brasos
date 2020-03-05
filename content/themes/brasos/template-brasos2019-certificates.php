<?php
/*
Template Name: Brasos2019 Certificates
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/event/event', 'cover'); ?>
<?php get_template_part('template-parts/event/event', 'navbar'); ?>

<?php
get_template_part('/template-parts/certificate/certificate', 'template');
?>

<?php get_footer(); ?>
