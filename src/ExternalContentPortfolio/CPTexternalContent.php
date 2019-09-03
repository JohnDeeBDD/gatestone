<?php
// Register Custom Post Type
function CPTexternalContent() {
            //die('what is up?');
            $labels = array(
                'name'                  => _x( 'External Content', 'Post Type General Name', 'ContentPortfolio' ),
                'singular_name'         => _x( 'External Content', 'Post Type Singular Name', 'ContentPortfolio' ),
                'menu_name'             => __( 'External Content', 'ContentPortfolio' ),
                'name_admin_bar'        => __( 'External Content', 'ContentPortfolio' ),
                'archives'              => __( 'External Content Archives', 'ContentPortfolio' ),
                'attributes'            => __( 'External Content Attributes', 'ContentPortfolio' ),
                'parent_item_colon'     => __( 'Parent External Content:', 'ContentPortfolio' ),
                'all_items'             => __( 'All External Content', 'ContentPortfolio' ),
                'add_new_item'          => __( 'Add New External Content', 'ContentPortfolio' ),
                'add_new'               => __( 'Add New', 'ContentPortfolio' ),
                'new_item'              => __( 'New External Content', 'ContentPortfolio' ),
                'edit_item'             => __( 'Edit External Content', 'ContentPortfolio' ),
                'update_item'           => __( 'Update External Content', 'ContentPortfolio' ),
                'view_item'             => __( 'View External Content', 'ContentPortfolio' ),
                'view_items'            => __( 'ViewFeatures', 'ContentPortfolio' ),
                'search_items'          => __( 'Search External Content', 'ContentPortfolio' ),
                'not_found'             => __( 'Not found', 'ContentPortfolio' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'ContentPortfolio' ),
                'featured_image'        => __( 'Featured Image', 'ContentPortfolio' ),
                'set_featured_image'    => __( 'Set featured image', 'ContentPortfolio' ),
                'remove_featured_image' => __( 'Remove featured image', 'ContentPortfolio' ),
                'use_featured_image'    => __( 'Use as featured image', 'ContentPortfolio' ),
                'insert_into_item'      => __( 'Insert into external content', 'ContentPortfolio' ),
                'uploaded_to_this_item' => __( 'Uploaded to this external content', 'ContentPortfolio' ),
                'items_list'            => __( 'External Content list', 'ContentPortfolio' ),
                'items_list_navigation' => __( 'External Content list navigation', 'ContentPortfolio' ),
                'filter_items_list'     => __( 'Filter external content list', 'ContentPortfolio' ),
            );
            $args = array(
                'label'                 => __( 'External Content', 'ContentPortfolio' ),
                'description'           => __( 'A external content of a software entity.', 'ContentPortfolio' ),
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
            register_post_type( 'external-content', $args );
            
        }
add_action( 'init', 'CPTexternalContent', 0 );