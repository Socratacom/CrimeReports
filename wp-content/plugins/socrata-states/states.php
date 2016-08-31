<?php
/*
Plugin Name: Socrata States
Plugin URI: http://socrata.com/
Description: This plugin adds links to dedicated state landing pages.
Version: 1.0
Author: Michael Church
Author URI: http://socrata.com/
License: GPLv2
*/

add_action( 'init', 'create_socrata_states' );
function create_socrata_states() {
  register_post_type( 'socrata_states',
    array(
      'labels' => array(
        'name' => 'States',
        'singular_name' => 'State',
        'add_new' => 'Add New State',
        'add_new_item' => 'Add New State',
        'edit' => 'Edit State',
        'edit_item' => 'Edit State',
        'new_item' => 'New State',
        'view' => 'View',
        'view_item' => 'View State',
        'search_items' => 'Search States',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash'
      ),
      'public' => true,
      'menu_position' => 5,
      'supports' => array( 'title' ),
      'taxonomies' => array( '' ),
      'menu_icon' => '',
      'has_archive' => false,
      'rewrite' => array('with_front' => false, 'slug' => 'states')
    )
  );
}

// MENU ICON
//Using Dashicon Font https://developer.wordpress.org/resource/dashicons
add_action( 'admin_head', 'add_socrata_states_icon' );
function add_socrata_states_icon() { ?>
  <style>
    #adminmenu .menu-icon-socrata_states div.wp-menu-image:before {
      content: '\f231';
    }
  </style>
  <?php
}

// TEMPLATE PATHS
add_filter( 'template_include', 'socrata_states_single_template', 1 );
function socrata_states_single_template( $template_path ) {
  if ( get_post_type() == 'socrata_states' ) {
    if ( is_single() ) {
      // checks if the file exists in the theme first,
      // otherwise serve the file from the plugin
      if ( $theme_file = locate_template( array ( 'single-states.php' ) ) ) {
        $template_path = $theme_file;
      } else {
        $template_path = plugin_dir_path( __FILE__ ) . 'single-states.php';
      }
    }
  }
  return $template_path;
}

// METABOXES
add_filter( 'rwmb_meta_boxes', 'socrata_states_register_meta_boxes' );
function socrata_states_register_meta_boxes( $meta_boxes )
{
  $prefix = 'state_';

  $meta_boxes[] = array(
    'title'         => 'Agencies',   
    'post_types'    => 'socrata_states',
    'context'       => 'normal',
    'priority'      => 'high',
      'fields' => array(
        array(
        'id'     => "{$prefix}agencies",
        'type'   => 'group',
        'clone'  => true,
        'sort_clone' => true,
        // Sub-fields
        'fields' => array(
          array(
            'name' => __( 'Name', 'state_' ),
            'id'   => "{$prefix}agency_name",
            'type' => 'text',
          ),
          array(
            'name' => __( 'URL', 'state_' ),
            'id'   => "{$prefix}agency_url",
            'desc' => __( 'Must include the http:// or https://', 'state_' ),
            'type' => 'url',
          ),
        ),
      ), 
    ),
  );

  return $meta_boxes;
}