<?php

function conselhoDiretor_cpt() {

    /**
     * Post Type: conselho_diretor
     * Post URL: conselho-diretor
     */

    $labels = [
        "name" => __("Conselho Diretor", "custom-post-type-ui"),
        "singular_name" => __("Conselho Diretor", "custom-post-type-ui"),
        "menu_name" => __("Conselho Diretor", "custom-post-type-ui"),
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
        "rewrite" => [
					"slug" => "conselho-diretor", 
					"with_front" => true
				],
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
		"name" => __( "Eventos", "custom-post-type-ui" ),
		"singular_name" => __( "Evento", "custom-post-type-ui" ),
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
            "slug" => "eventos", 
            "with_front" => true,
            'hierarchical' => true
        ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "revisions", "custom-fields" ]
	];
    register_post_type( "evento", $args );
    
}

function certificados_cpt() {

	/**
	 * Post Type: certificados
   * Post URL: certificados-palestrantes
	 */

	$labels = [
		"name" => __( "Certificados", "custom-post-type-ui" ),
		"singular_name" => __( "Certificado", "custom-post-type-ui" ),
    "menu_name" => __("Certificados", "custom-post-type-ui"),
	];
	$args = [
		"label" => __( "Certificados", "custom-post-type-ui" ),
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
            "slug" => "certificados-palestrantes", 
            "with_front" => true,
            'hierarchical' => true
        ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => [ "title", "revisions", "custom-fields" ],
		"taxonomies" => [ "category" ],
	];
    register_post_type( "certificados", $args );
    
}

add_action( 'init', 'conselhoDiretor_cpt' );
add_action( 'init', 'eventos_cpt' );
add_action( 'init', 'certificados_cpt' );