<?php
/*
Plugin Name: Brasos
Description: Parametros para o Tema Brasos
Author: Agencia Fazer
Version: 0.1
*/

 
if (!defined('WPINC')) {die();}




require plugin_dir_path(__FILE__) . 'inc/dashboard.php';
//require plugin_dir_path(__FILE__) . 'inc/brasos.php';

//blog_cpt = new Brasos_cpt();

// A l'activation du plugin... fait ca !
//register_activation_hook(__FILE__, [$blog_cpt, 'activate']);
// A la désactivation du plugin... fait ca (mais autre chose) !!
//register_deactivation_hook(__FILE__, [$blog_cpt, 'deactivate']);