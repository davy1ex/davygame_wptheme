<?
add_action( 'wp_enqueue_scripts', 'davygame_scripts' );
add_action( 'customize_register', 'davygame_customize_register' );


function davygame_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_directory_uri() . '/assets/css/style.css');
}

function davygame_customize_register($wp_customize) {
    // new tab in customize
    $wp_customize->add_section('footer', array(
        'title' => 'footer',
        'priority' => 1,
    ));

    // settings field
    $wp_customize->add_setting('footer_text', array(
        'default' => 'example text',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($setting_name, array(
        'section' => 'footer',
        'type' => 'textarea',
        'label' => 'Текст в подвале',
    ));

    $wp_customize->selective_refresh->add_partial($setting_name, array(
        'selector' => '.site-info', //должен содержать class или id элемента с текстом в подвале
        'render_callback' => function() use ($setting_name) {
            return nl2br(esc_html(get_theme_mod($setting_name)));
        }
    ));
}