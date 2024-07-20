<?php
function register_my_cpts_formats()
{

    /**
     * Post Type: COFFEE FORMATS
     */

    $labels = [
        "name" => __('Форматы кофеен', 'lemon_site'),
        "singular_name" => __('Формат кофейни', 'lemon_site'),
    ];

    $args = [
        "label" => __('Форматы кофеен', 'lemon_site'),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => false,
        "rest_base" => "",
        "show_in_menu" => true,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        'rewrite' => ['slug' => 'formats', 'with_front' => false],
        'has_archive' => 'formats',
        'menu_icon' => 'dashicons-admin-multisite',
        "query_var" => true,
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
    ];

    register_post_type("formats", $args);
}

add_action('init', 'register_my_cpts_formats');