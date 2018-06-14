<?php

// Register Custom Post Type
function create_cpt_set() {

	$labels = array(
		'name'                  => 'Sets',
		'singular_name'         => 'Set',
		'menu_name'             => 'Sets',
		'name_admin_bar'        => 'Sets',
		'archives'              => 'Set Archives',
		'attributes'            => 'Set Attributes',
		'parent_item_colon'     => 'Parent Set:',
		'all_items'             => 'All Sets',
		'add_new_item'          => 'Add New Set',
		'add_new'               => 'Add New',
		'new_item'              => 'New Set',
		'edit_item'             => 'Edit Set',
		'update_item'           => 'Update Set',
		'view_item'             => 'View Set',
		'view_items'            => 'View Sets',
		'search_items'          => 'Search Set',
		'not_found'             => 'Not found',
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => 'Featured Image',
		'set_featured_image'    => 'Set featured image',
		'remove_featured_image' => 'Remove featured image',
		'use_featured_image'    => 'Use as featured image',
		'insert_into_item'      => 'Insert into item',
		'uploaded_to_this_item' => 'Uploaded to this item',
		'items_list'            => 'Sets list',
		'items_list_navigation' => 'Sets list navigation',
		'filter_items_list'     => 'Filter items list',
	);
	$args = array(
		'label'                 => 'Set',
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
		'has_archive'           => 'sets',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'set', $args );

}
add_action( 'init', 'create_cpt_set', 0 );

?>
