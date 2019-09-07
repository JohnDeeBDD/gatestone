<?php

// Register Custom Post Type
function CPTmediaCitation () {
    //die("CPTmedia");
    $labels = array(
        'name'                  => _x( 'Media Citation ', 'Post Type General Name', 'Gatestone' ),
        'singular_name'         => _x( 'Media Citation ', 'Post Type Singular Name', 'Gatestone' ),
        'menu_name'             => __( 'Media Citation ', 'Gatestone' ),
        'name_admin_bar'        => __( 'Media Citation ', 'Gatestone' ),
        'archives'              => __( 'Media Citation  Archives', 'Gatestone' ),
        'attributes'            => __( 'Media Citation  Attributes', 'Gatestone' ),
        'parent_item_colon'     => __( 'Parent Media Citation :', 'Gatestone' ),
        'all_items'             => __( 'All Media Citation ', 'Gatestone' ),
        'add_new_item'          => __( 'Add New Media Citation ', 'Gatestone' ),
        'add_new'               => __( 'Add New', 'Gatestone' ),
        'new_item'              => __( 'New Media Citation ', 'Gatestone' ),
        'edit_item'             => __( 'Edit Media Citation ', 'Gatestone' ),
        'update_item'           => __( 'Update Media Citation ', 'Gatestone' ),
        'view_item'             => __( 'View Media Citation ', 'Gatestone' ),
        'view_items'            => __( 'ViewFeatures', 'Gatestone' ),
        'search_items'          => __( 'Search Media Citation ', 'Gatestone' ),
        'not_found'             => __( 'Not found', 'Gatestone' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'Gatestone' ),
        'featured_image'        => __( 'Featured Image', 'Gatestone' ),
        'set_featured_image'    => __( 'Set featured image', 'Gatestone' ),
        'remove_featured_image' => __( 'Remove featured image', 'Gatestone' ),
        'use_featured_image'    => __( 'Use as featured image', 'Gatestone' ),
        'insert_into_item'      => __( 'Insert into Media Citation', 'Gatestone' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Media citation', 'Gatestone' ),
        'items_list'            => __( 'Media Citation  list', 'Gatestone' ),
        'items_list_navigation' => __( 'Media Citation  list navigation', 'Gatestone' ),
        'filter_items_list'     => __( 'Filter Media citation list', 'Gatestone' ),
    );
    $args = array(
        'label'                 => __( 'Media Citation ', 'Gatestone' ),
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
    register_post_type( 'media-citation', $args );

}
//die('hello!0');
add_action( 'init', 'CPTmediaCitation', 0 );