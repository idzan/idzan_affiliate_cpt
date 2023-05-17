<?php
/*
Plugin Name: Affiliates
Plugin URI: https://idzan.eu
Description: Custom Post Type for Affiliate Links
Version: 1.1
Author: Idzan Marko
Author URI: https://idzan.eu
License: GPLv3
*/

/* Custom Post Type - Affiliates */
function idzan_affiliate_cpt() {

    $labels = array(
        'name' => _x( 'Affiliates', 'Post Type General Name', 'idzan-affiliates' ),
        'singular_name' => _x( 'Affiliate', 'Post Type Singular Name', 'idzan-affiliates' ),
        'menu_name' => _x( 'Affiliates', 'Admin Menu text', 'idzan-affiliates' ),
        'name_admin_bar' => _x( 'Affiliate', 'Add New on Toolbar', 'idzan-affiliates' ),
        'archives' => __( 'Affiliate', 'idzan-affiliates' ),
        'attributes' => __( 'Affiliate', 'idzan-affiliates' ),
        'parent_item_colon' => __( 'Affiliate', 'idzan-affiliates' ),
        'all_items' => __( 'All Affiliates', 'idzan-affiliates' ),
        'add_new_item' => __( 'Add New Affiliate', 'idzan-affiliates' ),
        'add_new' => __( 'Add New', 'idzan-Affiliates' ),
        'new_item' => __( 'New Affiliate', 'idzan-affiliates' ),
        'edit_item' => __( 'Edit Affiliate', 'idzan-affiliates' ),
        'update_item' => __( 'Update Affiliate', 'idzan-affiliates' ),
        'view_item' => __( 'View Affiliate', 'idzan-affiliates' ),
        'view_items' => __( 'View Affiliates', 'idzan-affiliates' ),
        'search_items' => __( 'Search Affiliate', 'idzan-affiliates' ),
        'not_found' => __( 'Not found', 'idzan-affiliates' ),
        'not_found_in_trash' => __( 'Not found in Trash', 'idzan-affiliates' ),
        'featured_image' => __( 'Featured Image', 'idzan-affiliates' ),
        'set_featured_image' => __( 'Set featured image', 'idzan-affiliates' ),
        'remove_featured_image' => __( 'Remove featured image', 'idzan-affiliates' ),
        'use_featured_image' => __( 'Use as featured image', 'idzan-affiliates' ),
        'insert_into_item' => __( 'Insert into Affiliate', 'idzan-affiliates' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Affiliate', 'idzan-affiliates' ),
        'items_list' => __( 'Affiliates list', 'idzan-affiliates' ),
        'items_list_navigation' => __( 'Affiliates list navigation', 'idzan-affiliates' ),
        'filter_items_list' => __( 'Filter Affiliates list', 'idzan-affiliates' ),
    );
    
    $args = array(
        'label' => __( 'Affiliate', 'idzan-affiliates' ),
        'description' => __( 'Affiliates', 'idzan-affiliates' ),
        'labels' => $labels,
        'menu_icon' => 'dashicons-share',
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'taxonomies' => array('affiliatecategory', 'affiliatetype'),
        'hierarchical' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'has_archive' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'show_in_nav_menus' => true,
        'menu_position' => 5,
        'capability_type' => 'post',
        'show_in_rest' => true,
    );
    
    register_post_type( 'affiliate', $args );

}
add_action( 'init', 'idzan_affiliate_cpt', 0 );