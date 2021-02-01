<?
add_action( 'after_setup_theme', 'davygame_setup' );
add_action( 'wp_enqueue_scripts', 'davygame_scripts' );
add_action( 'init', 'davygame_register_types' );


function davygame_setup() {
    register_nav_menu( 'menu-header', 'menu in header' );
    add_theme_support( 'post-thumbnails' );
}

function davygame_scripts() {
	wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/assets/css/style.css');
	wp_enqueue_style( 'mobile.css', get_stylesheet_directory_uri() . '/assets/css/mobile.css');
}

function davygame_register_types() {
    register_post_type('events', [
        'labels'             => array(
			'name'               => 'Events', 
			'singular_name'      => 'Event',
			'add_new'            => 'add new event',
			'add_new_item'       => 'add new event',
			'edit_item'          => 'edit event',
			'new_item'           => 'new event',
			'view_item'          => 'view event',
			'search_items'       => 'search event',
			'not_found'          => 'events not found',
			'not_found_in_trash' => 'events not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Events'

		),
        'public'             => true,
        'menu_position'      => 20,
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array('title', 'editor', 'thumbnail')
    ]);

    register_taxonomy( 'time_start', [ 'events' ], [ 
		'label'                 => '', 
		'labels'                => [
			'name'              => 'start time',
			'singular_name'     => 'start time',
			'search_items'      => 'Search start time',
			'all_items'         => 'All start times',
			'view_item '        => 'View start time',
			'edit_item'         => 'Edit start time',
			'update_item'       => 'Update start time',
			'add_new_item'      => 'Add New start time',
			'new_item_name'     => 'New start time Name',
			'menu_name'         => 'all start time',
		],
		'description'           => '', 
		'public'                => true,		
		'hierarchical'          => true,
	] );
}