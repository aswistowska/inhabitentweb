<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function products_post_type() {

	$labels = array(
		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Products', 'text_domain' ),
		'name_admin_bar'        => __( 'Product', 'text_domain' ),
		'archives'              => __( 'Item Archives', 'text_domain' ),
		'attributes'            => __( 'Item Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Product:', 'text_domain' ),
		'all_items'             => __( 'All Products', 'text_domain' ),
		'add_new_item'          => __( 'Add New Product', 'text_domain' ),
		'add_new'               => __( 'New Product', 'text_domain' ),
		'new_item'              => __( 'New Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Product', 'text_domain' ),
		'update_item'           => __( 'Update Product', 'text_domain' ),
		'view_item'             => __( 'View Product', 'text_domain' ),
		'view_items'            => __( 'View Items', 'text_domain' ),
		'search_items'          => __( 'Search products', 'text_domain' ),
		'not_found'             => __( 'No products found', 'text_domain' ),
		'not_found_in_trash'    => __( 'No products found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Product', 'text_domain' ),
		'description'           => __( 'Product information pages.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'          => true,
//		'template_lock'         => 'all',
//		'template'              => array(
//			array( 'core/paragraph', array(
//				'placeholder' => 'Add the product description here.',
//			) ),
//		),
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'products_post_type', 0 );

/**
 * Create "Testimonial" post type
 */
function tent_register_adventure_post_type() {
	$slug = 'adventures';
	$name = 'Adventures';
	$singular_name = 'Adventure';
	$labels = array(
		'name'                => $name, 'Post Type General Name',
		'singular_name'       => $singular_name, 'Post Type Singular Name',
		'menu_name'           => $name,
		'parent_item_colon'   => sprintf( 'Parent %s:', $singular_name ),
		'all_items'           => 'All ' . $name,
		'view_item'           => 'View ' . $singular_name,
		'add_new_item'        => 'Add New ' . $singular_name,
		'add_new'             => 'New ' . $singular_name,
		'edit_item'           => 'Edit ' . $singular_name,
		'update_item'         => 'Update ' . $singular_name,
		'search_items'        => 'Search ' . strtolower( $name ),
		'not_found'           => sprintf( 'No %s found', strtolower( $name ) ),
		'not_found_in_trash'  => sprintf( 'No %s found in Trash', strtolower( $name ) ),
	);
	$args = array(
		'description'         => 'Testimonials are glowing reviews from happy customers.',
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'author', 'thumbnail', 'revisions', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-location-alt',
		'can_export'          => true,
		'has_archive'         => 'adventures',
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,             // needed for Gutenberg to work!
	);
	register_post_type( $slug, $args );
}
add_action( 'init', 'tent_register_adventure_post_type' );
