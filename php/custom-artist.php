<?php

if ( ! function_exists('add_artist') ) {

    // Register Custom Post Type
    function add_artist() {
    
        $labels = array(
            'name'                  => _x( 'Artists', 'Post Type General Name', 'custom_post_artist' ),
            'singular_name'         => _x( 'Artist', 'Post Type Singular Name', 'custom_post_artist' ),
            'menu_name'             => __( 'Artists', 'custom_post_artist' ),
            'name_admin_bar'        => __( 'Artists', 'custom_post_artist' ),
            'archives'              => __( 'Item Archives', 'custom_post_artist' ),
            'attributes'            => __( 'Item Attributes', 'custom_post_artist' ),
            'parent_item_colon'     => __( 'Parent Item:', 'custom_post_artist' ),
            'all_items'             => __( 'All Items', 'custom_post_artist' ),
            'add_new_item'          => __( 'Add New Item', 'custom_post_artist' ),
            'add_new'               => __( 'Add New', 'custom_post_artist' ),
            'new_item'              => __( 'New Item', 'custom_post_artist' ),
            'edit_item'             => __( 'Edit Item', 'custom_post_artist' ),
            'update_item'           => __( 'Update Item', 'custom_post_artist' ),
            'view_item'             => __( 'View Item', 'custom_post_artist' ),
            'view_items'            => __( 'View Items', 'custom_post_artist' ),
            'search_items'          => __( 'Search Item', 'custom_post_artist' ),
            'not_found'             => __( 'Not found', 'custom_post_artist' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'custom_post_artist' ),
            'featured_image'        => __( 'Featured Image', 'custom_post_artist' ),
            'set_featured_image'    => __( 'Set featured image', 'custom_post_artist' ),
            'remove_featured_image' => __( 'Remove featured image', 'custom_post_artist' ),
            'use_featured_image'    => __( 'Use as featured image', 'custom_post_artist' ),
            'insert_into_item'      => __( 'Insert into item', 'custom_post_artist' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'custom_post_artist' ),
            'items_list'            => __( 'Items list', 'custom_post_artist' ),
            'items_list_navigation' => __( 'Items list navigation', 'custom_post_artist' ),
            'filter_items_list'     => __( 'Filter items list', 'custom_post_artist' ),
        );
        $args = array(
            'label'                 => __( 'Artist', 'custom_post_artist' ),
            'description'           => __( 'Some artists', 'custom_post_artist' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-admin-users',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'artists', $args );
    
    }
    add_action( 'init', 'add_artist', 0 );
    
}

?>