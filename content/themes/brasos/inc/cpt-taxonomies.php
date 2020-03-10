<?php

function conselhoDiretor_cpt() {

    /**
     * Post Type: conselho_diretor
     * Post URL: conselho-diretor
     */

    $labels = [
        "name" => __("conselho_diretor", "custom-post-type-ui"),
        "singular_name" => __("conselho_diretor", "custom-post-type-ui"),
        "menu_name" => __("Conselho-Diretor", "custom-post-type-ui"),
    ];
    $args = [
        "label" => __("conselho_diretor", "custom-post-type-ui"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => ["slug" => "conselho-diretor", "with_front" => true],
        "menu_icon" => "dashicons-groups",
		"query_var" => true,
        "supports" => ["title", "editor", "thumbnail", "excerpt", "custom-fields"],
    ];
    register_post_type("conselho_diretor", $args);
}

function eventos_cpt() {

	/**
	 * Post Type: evento
     * Post URL: evento
	 */

	$labels = [
		"name" => __( "eventos", "custom-post-type-ui" ),
		"singular_name" => __( "evento", "custom-post-type-ui" ),
        "menu_name" => __("Eventos", "custom-post-type-ui"),
	];
	$args = [
		"label" => __( "eventos", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ 
            "slug" => "evento", 
            "with_front" => true,
            'hierarchical' => true
        ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "page-attributes", "post-formats", "editor", "thumbnail", "revisions" ],
		"taxonomies" => [ "category" ],
	];
    register_post_type( "evento", $args );
    
}

function brasit2018_cpt() {

	/**
	 * Post Type: brasit2018
     * Post URL: brasit2018
	 */

	$labels = [
		"name" => __( "brasit2018", "custom-post-type-ui" ),
		"singular_name" => __( "brasit2018", "custom-post-type-ui" ),
        "menu_name" => __("Brasit2018", "custom-post-type-ui"),
    ];


	$args = [
		"label" => __( "brasit2018", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ 
            "slug" => "brasit2018", 
            "with_front" => true,
            'hierarchical' => true
        ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "editor", "thumbnail", 'excerpt', 'custom-fields', "revisions" ],
		"taxonomies" => [ "category" ],
	];

    register_post_type('brasit2018', $args);
}

function brasostbt2019_cpt() {

	/**
	 * Post Type: brasostbt2019
     * Post URL: brasostbt2019
	 */

	$labels = [
		"name" => __( "brasostbt2019", "custom-post-type-ui" ),
		"singular_name" => __( "brasostbt2019", "custom-post-type-ui" ),
        "menu_name" => __("Brasostbt2019", "custom-post-type-ui"),
    ];


	$args = [
		"label" => __( "brasostbt2019", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ 
            "slug" => "brasostbt2019", 
            "with_front" => true,
            'hierarchical' => true
        ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "editor", "thumbnail", 'excerpt', 'custom-fields', "revisions" ],
		"taxonomies" => [ "category" ],
	];

    register_post_type('brasostbt2019', $args);
}

function brasit2020_cpt() {

	/**
	 * Post Type: brasit2020
     * Post URL: brasit2020
	 */

	$labels = [
		"name" => __( "brasit2020", "custom-post-type-ui" ),
		"singular_name" => __( "brasit2020", "custom-post-type-ui" ),
        "menu_name" => __("Brasit2020", "custom-post-type-ui"),
    ];


	$args = [
		"label" => __( "brasit2020", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"rewrite" => [ 
            "slug" => "brasit2020", 
            "with_front" => true,
            'hierarchical' => true
        ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "editor", "thumbnail", 'excerpt', 'custom-fields', "revisions" ],
		"taxonomies" => [ "category" ],
	];

    register_post_type('brasit2020', $args);
}

add_action( 'init', 'conselhoDiretor_cpt' );
add_action( 'init', 'eventos_cpt' );
add_action( 'init', 'brasit2018_cpt' );
add_action( 'init', 'brasostbt2019_cpt' );
add_action( 'init', 'brasit2020_cpt' );