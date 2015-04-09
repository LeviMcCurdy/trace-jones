<?php
/*
Plugin Name: Gallery - Tracey Jones
Version: 1.0
Author: WebTek
Author URI: http://webtekcc.com
*/

add_action('init', 'gallery_register');

function gallery_register() {

	$labels = array(
		'name' => _x('Gallery', 'post type gallery name'),
		'singular_name' => _x('gallery', 'post type singular name'),
		'add_new' => __('Add Gallery'),
		'add_new_item' => __('Add New Gallery'),
		'edit_item' => __('Edit Gallery'),
		'new_item' => __('New Gallery'),
		'view_item' => __('View Gallery'),
		'search_items' => __('Search Gallery'),
		'not_found' =>  __('You have not yet added any gallery.'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'_builtin' => false,
		'query_var' => true,
		'rewrite' => array('slug' => 'gallery'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'menu_icon' => 'dashicons-clipboard',
		'supports' => array('title')
	  );

	register_post_type( 'gallery' , $args );
}

add_filter("manage_edit-gallery_columns", "gallery_edit_columns");

function gallery_edit_columns($columns){
  $columns = array(
  	"cb" => "<input type=\"checkbox\" />",
	"title" => "Title",
  );

  return $columns;
}

add_action('save_post', 'gallery_save_details');

function gallery_save_details($post_id){
  global $post;

	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
	return;
	if($post->post_type == "gallery") {

   if( isset($_POST) ) {
	}
	}
}

?>