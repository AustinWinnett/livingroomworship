<?php

// Register Custom Post Type
function create_cpt_song() {

	$labels = array(
		'name'                  => 'Songs',
		'singular_name'         => 'Song',
		'menu_name'             => 'Songs',
		'name_admin_bar'        => 'Songs',
		'archives'              => 'Song Archives',
		'attributes'            => 'Song Attributes',
		'parent_item_colon'     => 'Parent Song:',
		'all_items'             => 'All Songs',
		'add_new_item'          => 'Add New Song',
		'add_new'               => 'Add New',
		'new_item'              => 'New Song',
		'edit_item'             => 'Edit Song',
		'update_item'           => 'Update Song',
		'view_item'             => 'View Song',
		'view_items'            => 'View Songs',
		'search_items'          => 'Search Song',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Songs list',
		'items_list_navigation' => 'Songs list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Song',
		'description'           => 'Post Type Description',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'songs',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'song', $args );

}
add_action( 'init', 'create_cpt_song', 0 );

?>
