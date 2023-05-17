<?php
/*
Plugin Name: Affiliates
Plugin URI: https://idzan.eu
Description: Custom Post Type for Affiliate Links
Version: 1.0
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
        'menu_icon' => 'dashicons-portfolio',
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

/* Taxonomy for Affiliates - Services of Affiliates */
function idzan_affiliate_Type() {
	$labels = array(
		'name'              => _x( 'Affiliate type', 'taxonomy general name', 'idzan-affiliate-Type' ),
		'singular_name'     => _x( 'Affiliate Type', 'taxonomy singular name', 'idzan-affiliate-Type' ),
		'search_items'      => __( 'Search Affiliate type', 'idzan-affiliate-Type' ),
		'all_items'         => __( 'All Affiliate type', 'idzan-affiliate-Type' ),
		'parent_item'       => __( 'Parent Affiliate Type', 'idzan-affiliate-Type' ),
		'parent_item_colon' => __( 'Parent Affiliate Type:', 'idzan-affiliate-Type' ),
		'edit_item'         => __( 'Edit Affiliate Type', 'idzan-affiliate-Type' ),
		'update_item'       => __( 'Update Affiliate Type', 'idzan-affiliate-Type' ),
		'add_new_item'      => __( 'Add New Affiliate Type', 'idzan-affiliate-Type' ),
		'new_item_name'     => __( 'New Affiliate Type Name', 'idzan-affiliate-Type' ),
		'menu_name'         => __( 'Affiliate Type', 'idzan-affiliate-Type' ),
	);
    
	$args = array(
		'labels' => $labels,
		'description' => __( 'Type of Affiliate Link (Netwroking, VPN, Security, Hosting etc)', 'idzan-affiliate-Type' ),
		'hierarchical' => false,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'affiliatetype', array('affiliate'), $args );

}
add_action( 'init', 'idzan_affiliate_Type' );