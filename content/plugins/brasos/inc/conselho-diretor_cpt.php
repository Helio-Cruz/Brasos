<?php

/**
 * Post Type: conselho_diretor
 * Post URL: conselho-diretor
 */

class ConselhoDiretor_cpt {

  public function __construct() {
    add_action( 'init', 'conselhoDiretor_cpt' );
  }

  public function conselhoDiretor_cpt() {
    $labels = [
        "name" => __( "conselho_diretor", "custom-post-type-ui" ),
        "singular_name" => __( "conselho_diretor", "custom-post-type-ui" ),
        "menu_name" => __( "Conselho-Diretor", "custom-post-type-ui" ),
    ];

    $args = [
        "label" => __( "conselho_diretor", "custom-post-type-ui" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true, // false
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "conselho-diretor", "with_front" => true ],
        "query_var" => true,
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
    ];

    register_post_type( "conselho_diretor", $args );
  }

  public function activation() {
    $this->conselhoDiretor_cpt();

    flush_rewrite_rules();
  }

  public function deactivation() {
    flush_rewrite_rules();
  }
}