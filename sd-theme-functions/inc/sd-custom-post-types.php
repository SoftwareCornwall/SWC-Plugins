<?php
/* ----------------------------------------------------- */
/* Courses Custom Post Type 							 */
/* ----------------------------------------------------- */

if ( !function_exists( 'sd_register_courses' ) ) {
	function sd_register_courses() {

		global $sd_data;

		$labels = array(
			'name'					=> __( 'Courses', 'sd-framework' ),
			'singular_name'			=> __( 'Course', 'sd-framework' ),
			'add_new'				=> __( 'Add New Course', 'sd-framework' ),
			'add_new_item'			=> __( 'Add New Course', 'sd-framework' ),
			'edit_item'				=> __( 'Edit Course', 'sd-framework' ),
			'new_item'				=> __( 'Add New Course', 'sd-framework' ),
			'view_item'				=> __( 'View Course', 'sd-framework' ),
			'search_items'			=> __( 'Search Courses', 'sd-framework' ),
			'not_found' 			=> __( 'No courses found', 'sd-framework' ),
			'not_found_in_trash'	=> __( 'No courses found in trash', 'sd-framework' )
		);

		$custom_slug = ( !empty($sd_data[ 'sd_courses_page_slug'] ) ? $sd_data['sd_courses_page_slug'] : 'courses-page' );

		$courses_args = array(
			'public'				=> true,
			'publicly_queryable'	=> true,
			'show_in_nav_menus'		=> false,
			'show_in_admin_bar'		=> true,
			'exclude_from_search'	=> false,
			'show_in_menu'			=> true,
			'menu_icon'				=> 'dashicons-book-alt',
			'can_export'			=> true,
			'delete_with_user'		=> false,
			'labels'				=> $labels,
			'public'				=> true,
			'show_ui'				=> true,
			'capability_type'		=> 'post',
			'hierarchical'			=> false,
			'rewrite'				=> array( 'slug' => $custom_slug, 'with_front' => false ), // Permalinks format
			'supports'				=> array( 'title', 'editor', 'thumbnail', 'comments' )
		);

		register_post_type( 'courses' , $courses_args );
	}

	// Adds Custom Post Type
	add_action('init', 'sd_register_courses');
}
/* ----------------------------------------------------- */
/* Events Custom Post Type 								 */
/* ----------------------------------------------------- */

if ( !function_exists( 'sd_register_events' ) ) {
	function sd_register_events() {

		global $sd_data;

		$labels = array(
			'name'					=> __( 'Events', 'sd-framework' ),
			'singular_name'			=> __( 'Event', 'sd-framework' ),
			'add_new'				=> __( 'Add New Event', 'sd-framework' ),
			'add_new_item'			=> __( 'Add New Event', 'sd-framework' ),
			'edit_item'				=> __( 'Edit Event', 'sd-framework' ),
			'new_item'				=> __( 'Add New Event', 'sd-framework' ),
			'view_item'				=> __( 'View Event', 'sd-framework' ),
			'search_items'			=> __( 'Search Events', 'sd-framework' ),
			'not_found' 			=> __( 'No event found', 'sd-framework' ),
			'not_found_in_trash'	=> __( 'No events found in trash', 'sd-framework' )
		);

		$custom_slug = ( !empty( $sd_data['sd_events_page_slug'] ) ? $sd_data['sd_events_page_slug'] : 'events-page' );

		$events_args = array(
			'public'				=> true,
			'publicly_queryable'	=> true,
			'show_in_nav_menus'		=> false,
			'show_in_admin_bar'		=> false,
			'exclude_from_search'	=> false,
			'show_in_menu'			=> false,
			'menu_icon'				=> 'dashicons-calendar',
			'can_export'			=> true,
			'delete_with_user'		=> false,
			'labels'				=> $labels,
			'public'				=> true,
			'show_ui'				=> true,
			'capability_type'		=> 'post',
			'hierarchical'			=> false,
			'rewrite'				=> array( 'slug' => $custom_slug, 'with_front' => false ), // Permalinks format
			'supports'				=> array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt' )
		);

		register_post_type( 'events' , $events_args );
	}

	// Adds Custom Post Type
	add_action('init', 'sd_register_events');
}
/* ----------------------------------------------------- */
/* Professors Custom Post Type 							 */
/* ----------------------------------------------------- */
// if ( !function_exists( 'sd_register_professors' ) ) {
// 	function sd_register_professors() {
//
// 		global $sd_data;
//
// 		$labels = array(
// 			'name'					=> __( 'Professors', 'sd-framework' ),
// 			'singular_name'			=> __( 'Professor', 'sd-framework' ),
// 			'add_new'				=> __( 'Add New Professor', 'sd-framework' ),
// 			'add_new_item'			=> __( 'Add New Professor', 'sd-framework' ),
// 			'edit_item'				=> __( 'Edit Professor', 'sd-framework' ),
// 			'new_item'				=> __( 'Add New Professor', 'sd-framework' ),
// 			'view_item'				=> __( 'View Professor', 'sd-framework' ),
// 			'search_items'			=> __( 'Search Professors', 'sd-framework' ),
// 			'not_found' 			=> __( 'No professors found', 'sd-framework' ),
// 			'not_found_in_trash'	=> __( 'No professors found in trash', 'sd-framework' )
// 		);
//
// 		$custom_slug = ( !empty( $sd_data['sd_professors_page_slug'] ) ? $sd_data['sd_professors_page_slug'] : 'professors-page' );
//
// 		$professors_args = array(
// 			'public'				=> true,
// 			'publicly_queryable'	=> true,
// 			'show_in_nav_menus'		=> false,
// 			'show_in_admin_bar'		=> true,
// 			'exclude_from_search'	=> false,
// 			'show_in_menu'			=> true,
// 			'menu_icon'				=> 'dashicons-businessman',
// 			'can_export'			=> true,
// 			'delete_with_user'		=> false,
// 			'labels'				=> $labels,
// 			'public'				=> true,
// 			'show_ui'				=> true,
// 			'capability_type'		=> 'post',
// 			'hierarchical'			=> false,
// 			'rewrite'				=> array( 'slug' => $custom_slug, 'with_front' => false ), // Permalinks format
// 			'supports'				=> array( 'title', 'editor', 'thumbnail', 'comments', 'excerpt' )
// 		);
//
// 		register_post_type( 'professors' , $professors_args );
// 	}
//
// 	// Adds Custom Post Type
// 	add_action('init', 'sd_register_professors');
// }
/* ----------------------------------------------------- */
/* Testimonials Custom Post Type						 */
/* ----------------------------------------------------- */

// if ( !function_exists( 'sd_register_testimonials' ) ) {
// 	function sd_register_testimonials() {
//
// 		global $sd_data;
//
// 		$labels = array(
// 			'name'					=> __( 'Testimonials', 'sd-framework' ),
// 			'singular_name'			=> __( 'Testimonial', 'sd-framework' ),
// 			'add_new'				=> __( 'Add New Testimonial', 'sd-framework' ),
// 			'add_new_item'			=> __( 'Add New Testimonial', 'sd-framework' ),
// 			'edit_item'				=> __( 'Edit Testimonial', 'sd-framework' ),
// 			'new_item'				=> __( 'Add New Testimonial', 'sd-framework' ),
// 			'view_item'				=> __( 'View Testimonial', 'sd-framework' ),
// 			'search_items'			=> __( 'Search Testimonials', 'sd-framework' ),
// 			'not_found' 			=> __( 'No testimonials found', 'sd-framework' ),
// 			'not_found_in_trash'	=> __( 'No testimonials found in trash', 'sd-framework' )
// 		);
//
// 		$testimonials_args = array(
// 			'public'				=> true,
// 			'publicly_queryable'	=> true,
// 			'show_in_nav_menus'		=> false,
// 			'show_in_admin_bar'		=> true,
// 			'exclude_from_search'	=> false,
// 			'show_in_menu'			=> true,
// 			'menu_icon'				=> 'dashicons-star-half',
// 			'can_export'			=> true,
// 			'delete_with_user'		=> false,
// 			'labels'				=> $labels,
// 			'public'				=> true,
// 			'show_ui'				=> true,
// 			'capability_type'		=> 'post',
// 			'hierarchical'			=> false,
// 			'rewrite'				=> array( 'slug' => 'testimonials-page', 'with_front' => false ), // Permalinks format
// 			'supports'				=> array( 'title', 'editor', 'thumbnail', 'comments' )
// 		);
//
// 		register_post_type( 'testimonials' , $testimonials_args );
// 	}
//
// 	// Adds Custom Post Type
// 	add_action('init', 'sd_register_testimonials');
// }
?>
