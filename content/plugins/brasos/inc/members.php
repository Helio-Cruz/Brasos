<?php
class Members
{
    public function __construct()
    {
        add_action('init', [$this, 'members']);
    }

    public function members_area()
    {
        /**
         * Area: members
         */
        $labels = [
            "name" => __("Membros Brasos"),
            "singular_name" => __("Membros Brasos"),
            "menu_name" => __("Lista de Membros"),
        ];
        $args = [
            "label" => __("membros"),
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
                "slug" => "",
                "with_front" => true,
                'hierarchical' => false
            ],
            "query_var" => true,
            "menu_icon" => "dashicons-format-audio",
            "supports" => ["title", "custom-fields", "revisions"],
            "taxonomies" => ["category", "post_tag"]
        ];
        register_post_type("members", $args);
    }

    public function members_activate()
    {
        $this->members_area();
        flush_rewrite_rules();
    }
    public function members_deactivate()
    {
        flush_rewrite_rules();
    }
}

$members = new Members();

// A l'activation du plugin...
register_activation_hook(__FILE__, [$members, 'members_activate']);
register_deactivation_hook(__FILE__, [$members, 'members_deactivate']);
