<?php
/**
 * Plugin Name: Harness2 Custom Post Types
 * Plugin URI: #
 * Version: 1.0
 * Author: Tom Whitaker
 * Author URI: http://harnessup.com
 * Description: A custom plugin that registers custom post types and taxonomies for Harness 2.0
 * License: GPL2
 */

 class HarnessCPT {

    /**
     * Constructor. Called when plugin is initialised
     */
     function __construct() {
     add_action( 'init', array( $this, 'register_custom_post_type' ) );
     }
    /**
     * Registers a Custom Post Type called organization
     */
    function register_custom_post_type() {
        register_post_type( 'organization', array(
            'labels' => array(
                'name'               => _x( 'Organizations', 'post type general name', 'harness-cpt' ),
                'singular_name'      => _x( 'Organization', 'post type singular name', 'harness-cpt' ),
                'menu_name'          => _x( 'Organizations', 'admin menu', 'harness-cpt' ),
                'name_admin_bar'     => _x( 'Organization', 'add new on admin bar', 'harness-cpt' ),
                'add_new'            => _x( 'Add New', 'Organization', 'harness-cpt' ),
                'add_new_item'       => __( 'Add New Organization', 'harness-cpt' ),
                'new_item'           => __( 'New Organization', 'harness-cpt' ),
                'edit_item'          => __( 'Edit Organization', 'harness-cpt' ),
                'view_item'          => __( 'View Organization', 'harness-cpt' ),
                'all_items'          => __( 'All Organizations', 'harness-cpt' ),
                'search_items'       => __( 'Search Organizations', 'harness-cpt' ),
                'parent_item_colon'  => __( 'Parent Organizations:', 'harness-cpt' ),
                'not_found'          => __( 'No Organizations found.', 'harness-cpt' ),
                'not_found_in_trash' => __( 'No Organizations found in Trash.', 'harness-cpt' ),
            ),

            // Frontend
            'has_archive'        => false,
            'public'             => false,
            'publicly_queryable' => false,

            // Admin
            'capability_type' => 'post',
            'menu_icon'     => 'dashicons-groups',
            'menu_position' => 4,
            'query_var'     => true,
            'show_in_menu'  => true,
            'show_ui'       => true,
            'supports'      => array(
                'title',
                'author',
                'comments',
            ),
        ) );
    }

}

$harnessCPT = new HarnessCPT;
?>
