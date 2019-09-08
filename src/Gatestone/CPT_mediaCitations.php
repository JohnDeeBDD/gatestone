<?php

// Register Custom Post Type
function CPTmediaCitations () {
    //die("CPTmedia");
    $labels = array(
        'name'                  => _x( 'Media Citations ', 'Post Type General Name', 'Gatestone' ),
        'singular_name'         => _x( 'Media Citation ', 'Post Type Singular Name', 'Gatestone' ),
        'menu_name'             => __( 'Media Citations ', 'Gatestone' ),
        'name_admin_bar'        => __( 'Media Citations ', 'Gatestone' ),
        'archives'              => __( 'Media Citation Archives', 'Gatestone' ),
        'attributes'            => __( 'Media Citation Attributes', 'Gatestone' ),
        'parent_item_colon'     => __( 'Parent Media Citations :', 'Gatestone' ),
        'all_items'             => __( 'All Media Citations ', 'Gatestone' ),
        'add_new_item'          => __( 'Add New Media Citation ', 'Gatestone' ),
        'add_new'               => __( 'Add New', 'Gatestone' ),
        'new_item'              => __( 'New Media Citation ', 'Gatestone' ),
        'edit_item'             => __( 'Edit Media Citation ', 'Gatestone' ),
        'update_item'           => __( 'Update Media Citation ', 'Gatestone' ),
        'view_item'             => __( 'View Media Citation ', 'Gatestone' ),
        'view_items'            => __( 'View Citations', 'Gatestone' ),
        'search_items'          => __( 'Search Media Citations ', 'Gatestone' ),
        'not_found'             => __( 'Not found', 'Gatestone' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'Gatestone' ),
        'featured_image'        => __( 'Featured Image', 'Gatestone' ),
        'set_featured_image'    => __( 'Set featured image', 'Gatestone' ),
        'remove_featured_image' => __( 'Remove featured image', 'Gatestone' ),
        'use_featured_image'    => __( 'Use as featured image', 'Gatestone' ),
        'insert_into_item'      => __( 'Insert into Media Citations', 'Gatestone' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Media citations', 'Gatestone' ),
        'items_list'            => __( 'Media Citations  list', 'Gatestone' ),
        'items_list_navigation' => __( 'Media Citations  list navigation', 'Gatestone' ),
        'filter_items_list'     => __( 'Filter Media citations list', 'Gatestone' ),
    );
    $args = array(
        'label'                 => __( 'Media Citations ', 'Gatestone' ),
        'description'           => __( 'An external link.', 'Gatestone' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 4,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );
    register_post_type( 'media-citations', $args );

}
//die('hello!0');
add_action( 'init', 'CPTmediaCitations', 0 );