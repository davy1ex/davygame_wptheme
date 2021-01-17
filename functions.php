<?
add_action( 'after_setup_theme', 'davygame_setup' );
add_action( 'wp_enqueue_scripts', 'davygame_scripts' );
add_action( 'customize_register', 'davygame_customize_register' );
add_action( 'init', 'davygame_register_types' );


function davygame_setup() {
    register_nav_menu( 'menu-header', 'menu in header' );
    add_theme_support( 'post-thumbnails' );
}

function davygame_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/assets/css/style.css');
}

// function davygame_customize_register($wp_customize) {
//     // new tab in customize
//     $wp_customize->add_section('footer', array(
//         'title' => 'footer',
//         'priority' => 1,
//     ));

//     // settings field
//     $wp_customize->add_setting('footer_text', array(
//         'default' => 'example text',
//         'sanitize_callback' => 'sanitize_textarea_field',
//         'transport' => 'postMessage'
//     ));

//     $wp_customize->add_control($setting_name, array(
//         'section' => 'footer',
//         'type' => 'textarea',
//         'label' => 'Текст в подвале',
//     ));

//     $wp_customize->selective_refresh->add_partial($setting_name, array(
//         'selector' => '.site-info', //должен содержать class или id элемента с текстом в подвале
//         'render_callback' => function() use ($setting_name) {
//             return nl2br(esc_html(get_theme_mod($setting_name)));
//         }
//     ));
// }

function davygame_register_types() {
    register_post_type('events', [
        'labels'             => array(
			'name'               => 'Events', // Основное название типа записи
			'singular_name'      => 'Event', // отдельное название записи типа Book
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
		'supports'           => array('title', 'editor', 'thumbnail')//,'editor','author','thumbnail','excerpt','comments')
    ]);

    register_post_type('schedules', [
        'labels'             => array(
			'name'               => 'Schedule', // Основное название типа записи
			'singular_name'      => 'Schedule', // отдельное название записи типа Book
			'add_new'            => 'add new Schedule',
			'add_new_item'       => 'add new Schedule',
			'edit_item'          => 'edit Schedule',
			'new_item'           => 'new Schedule',
			'view_item'          => 'view Schedule',
			'search_items'       => 'search Schedules',
			'not_found'          => 'events not found',
			'not_found_in_trash' => 'events not found in trash',
			'parent_item_colon'  => '',
			'menu_name'          => 'Schedules'

		),
        'public'             => true,
        'menu_position'      => 20,
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array('title', 'editor', 'thumbnail')
    ]);

    register_taxonomy( 'time_start', [ 'events' ], [ 
		'label'                 => '', // определяется параметром $labels->name
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
		'description'           => '', // описание таксономии
		'public'                => true,		
		'hierarchical'          => true,
	] );
}