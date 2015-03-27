<?php
/*
Plugin Name: Auctions - Tracey Jones
Version: 1.0
Author: WebTek
Author URI: http://webtekcc.com
*/

add_action('init', 'auction_register');

function auction_register() {

	$labels = array(
		'name' => _x('Auction', 'post type auction name'),
		'singular_name' => _x('auction', 'post type singular name'),
		'add_new' => __('Add Auction'),
		'add_new_item' => __('Add New Auction'),
		'edit_item' => __('Edit Auction'),
		'new_item' => __('New Auction'),
		'view_item' => __('View Auction'),
		'search_items' => __('Search Auction'),
		'not_found' =>  __('You have not yet added any auction.'),
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
		'rewrite' => array('slug' => 'auction'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => 4,
		'menu_icon' => 'dashicons-clipboard',
		'supports' => array('title')
	  );

	register_post_type( 'auction' , $args );
}

add_filter("manage_edit-auction_columns", "auction_edit_columns");

function auction_edit_columns($columns){
  $columns = array(
  	"cb" => "<input type=\"checkbox\" />",
	"title" => "Title",
  );

  return $columns;
}

add_action('save_post', 'auction_save_details');

function auction_save_details($post_id){
  global $post;

	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
	return;
	if($post->post_type == "auction") {

   if( isset($_POST) ) {
	}
	}
}

?>