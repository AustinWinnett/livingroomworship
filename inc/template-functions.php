<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Desk_Dog_Development
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function desk_dog_development_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'desk_dog_development_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function desk_dog_development_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'desk_dog_development_pingback_header' );

// Include CPTs
require_once( __DIR__ . '/cpt/main.php');

function ddd_component( $component, $data = array(), $selectors = array() ) {
	if ( $selectors['classes'] && $selectors['id'] ) {
		$component_info = 'class="ddd-'. $component . ' ' . $selectors['classes'] . '" id="' . $selectors['id'] . '"';
	} elseif ( $selectors['classes'] && !$selectors['id'] ) {
		$component_info = 'class="ddd-'. $component . ' ' . $selectors['classes'] . '"';
	} elseif ( !$selectors['classes'] && $selectors['id'] ) {
		$component_info = 'class="ddd-'. $component . '" id="' . $selectors['id'] . '"';
	} else {
		$component_info = 'class="ddd-'. $component . '"';
	}
	include(locate_template('template-parts/components/' . $component . '.php'));
}

function new_excerpt_more($more) {
	global $post;
	return '&hellip;<br /><br /><a href="' . get_permalink() . '" class="btn">Read more</a>';
}
add_action('excerpt_more', 'new_excerpt_more');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

add_filter( 'wp_get_nav_menu_items', 'cpt_archive_menu_filter', 10, 3 );
function cpt_archive_menu_filter( $items, $menu, $args ) {

  /* alter the URL for cpt-archive objects */
  foreach ( $items as &$item ) {
    if ( $item->object != 'cpt-archive' ) continue;

    /* we stored the post type in the type property of the menu item */
    $item->url = get_post_type_archive_link( $item->type );

    if ( get_query_var( 'post_type' ) == $item->type ) {
      $item->classes []= 'current-menu-item';
      $item->current = true;
    }
  }

  return $items;
}
