<?php

if ( ! function_exists('add_concert') ) {

    // Register Custom Post Type
    function add_concert() {
    
        $labels = array(
            'name'                  => _x( 'Concerts', 'Post Type General Name', 'custom_post_concert' ),
            'singular_name'         => _x( 'Concert', 'Post Type Singular Name', 'custom_post_concert' ),
            'menu_name'             => __( 'Concerts', 'custom_post_concert' ),
            'name_admin_bar'        => __( 'Concerts', 'custom_post_concert' ),
            'archives'              => __( 'Item Archives', 'custom_post_concert' ),
            'attributes'            => __( 'Item Attributes', 'custom_post_concert' ),
            'parent_item_colon'     => __( 'Parent Item:', 'custom_post_concert' ),
            'all_items'             => __( 'All Items', 'custom_post_concert' ),
            'add_new_item'          => __( 'Add New Item', 'custom_post_concert' ),
            'add_new'               => __( 'Add New', 'custom_post_concert' ),
            'new_item'              => __( 'New Item', 'custom_post_concert' ),
            'edit_item'             => __( 'Edit Item', 'custom_post_concert' ),
            'update_item'           => __( 'Update Item', 'custom_post_concert' ),
            'view_item'             => __( 'View Item', 'custom_post_concert' ),
            'view_items'            => __( 'View Items', 'custom_post_concert' ),
            'search_items'          => __( 'Search Item', 'custom_post_concert' ),
            'not_found'             => __( 'Not found', 'custom_post_concert' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'custom_post_concert' ),
            'featured_image'        => __( 'Featured Image', 'custom_post_concert' ),
            'set_featured_image'    => __( 'Set featured image', 'custom_post_concert' ),
            'remove_featured_image' => __( 'Remove featured image', 'custom_post_concert' ),
            'use_featured_image'    => __( 'Use as featured image', 'custom_post_concert' ),
            'insert_into_item'      => __( 'Insert into item', 'custom_post_concert' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'custom_post_concert' ),
            'items_list'            => __( 'Items list', 'custom_post_concert' ),
            'items_list_navigation' => __( 'Items list navigation', 'custom_post_concert' ),
            'filter_items_list'     => __( 'Filter items list', 'custom_post_concert' ),
        );
        $args = array(
            'label'                 => __( 'Concert', 'custom_post_concert' ),
            'description'           => __( 'Some concerts', 'custom_post_concert' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-format-audio',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'concerts', $args );
    
    }
    add_action( 'init', 'add_concert', 0 );
    
}

?>