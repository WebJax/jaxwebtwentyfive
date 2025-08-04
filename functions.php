<?php
/**
 * Jaxweb Twenty Five Functions and Definitions
 */

if (!defined('ABSPATH')) {
    exit;
}

// Theme setup
function jaxwebtwentyfive_setup() {
    // Add theme support for various features
    add_theme_support('wp-block-styles');
    add_theme_support('responsive-embeds');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Add support for editor styles
    add_theme_support('editor-styles');
    add_editor_style('style.css');
    
    // Add support for full and wide align images
    add_theme_support('align-wide');
    
    // Add support for custom logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'jaxwebtwentyfive_setup');

// Enqueue styles and scripts
function jaxwebtwentyfive_scripts() {
    // Enqueue Inter font from Google Fonts
    wp_enqueue_style(
        'jaxwebtwentyfive-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap',
        array(),
        wp_get_theme()->get('Version')
    );
    
    // Get theme version
    $theme_version = wp_get_theme()->get( 'Version' );
    
    // Enqueue theme styles and scripts
    wp_enqueue_style( 'jaxwebtwentyfive-style', get_stylesheet_uri(), array(), $theme_version );
    wp_style_add_data( 'jaxwebtwentyfive-style', 'rtl', 'replace' );
    
    // Enqueue additional CSS for animations
    wp_enqueue_style( 
        'jaxwebtwentyfive-animations', 
        get_template_directory_uri() . '/assets/css/animations.css', 
        array('jaxwebtwentyfive-style'), 
        $theme_version 
    );
    
    // Enqueue theme JavaScript
    wp_enqueue_script( 
        'jaxwebtwentyfive-theme', 
        get_template_directory_uri() . '/assets/js/theme.js', 
        array(), 
        $theme_version, 
        true 
    );
    
    // Localize script for AJAX
    wp_localize_script( 'jaxwebtwentyfive-theme', 'jaxwebAjax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'nonce' => wp_create_nonce( 'jaxweb_nonce' ),
        'loading' => __( 'Loading...', 'jaxwebtwentyfive' ),
        'error' => __( 'Der opstod en fejl. Prøv igen.', 'jaxwebtwentyfive' )
    ));
    
    // Add Dashicons for frontend if needed
    wp_enqueue_style( 'dashicons' );
    
    // Enqueue custom JavaScript
    wp_enqueue_script(
        'jaxwebtwentyfive-script',
        get_template_directory_uri() . '/assets/js/theme.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'jaxwebtwentyfive_scripts');

// Register block patterns
function jaxwebtwentyfive_register_patterns() {
    // Register pattern categories
    register_block_pattern_category(
        'jaxwebtwentyfive-hero',
        array('label' => __('Hero Sections', 'jaxwebtwentyfive'))
    );
    
    register_block_pattern_category(
        'jaxwebtwentyfive-features',
        array('label' => __('Features', 'jaxwebtwentyfive'))
    );
    
    register_block_pattern_category(
        'jaxwebtwentyfive-testimonials',
        array('label' => __('Testimonials', 'jaxwebtwentyfive'))
    );
    
    register_block_pattern_category(
        'jaxwebtwentyfive-cta',
        array('label' => __('Call to Action', 'jaxwebtwentyfive'))
    );
    
    register_block_pattern_category(
        'jaxwebtwentyfive-portfolio',
        array('label' => __('Portfolio', 'jaxwebtwentyfive'))
    );
    
    register_block_pattern_category(
        'jaxwebtwentyfive-about',
        array('label' => __('About', 'jaxwebtwentyfive'))
    );
    
    register_block_pattern_category(
        'jaxwebtwentyfive-contact',
        array('label' => __('Contact', 'jaxwebtwentyfive'))
    );
    
    register_block_pattern_category(
        'jaxwebtwentyfive-services',
        array('label' => __('Services', 'jaxwebtwentyfive'))
    );
}
add_action('init', 'jaxwebtwentyfive_register_patterns');

// Customize block editor
function jaxwebtwentyfive_editor_customization() {
    // Add custom CSS classes to blocks
    add_theme_support('custom-spacing');
    add_theme_support('custom-units', 'px', 'em', 'rem', 'vh', 'vw');
}
add_action('after_setup_theme', 'jaxwebtwentyfive_editor_customization');

// Add custom CSS for better block styling
function jaxwebtwentyfive_custom_block_styles() {
    wp_register_style(
        'jaxwebtwentyfive-block-styles',
        get_template_directory_uri() . '/assets/css/blocks.css',
        array(),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_style('jaxwebtwentyfive-block-styles');
}
add_action('wp_enqueue_scripts', 'jaxwebtwentyfive_custom_block_styles');
add_action('enqueue_block_editor_assets', 'jaxwebtwentyfive_custom_block_styles');

// Remove core block patterns that we don't need
function jaxwebtwentyfive_remove_core_patterns() {
    remove_theme_support('core-block-patterns');
}
add_action('after_setup_theme', 'jaxwebtwentyfive_remove_core_patterns');

// Customize image sizes
function jaxwebtwentyfive_image_sizes() {
    add_image_size('hero-image', 1400, 700, true);
    add_image_size('portfolio-thumb', 600, 400, true);
    add_image_size('team-member', 300, 300, true);
}
add_action('after_setup_theme', 'jaxwebtwentyfive_image_sizes');

// Add navigation menu support
function jaxwebtwentyfive_menus() {
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'jaxwebtwentyfive'),
        'footer'  => esc_html__('Footer Menu', 'jaxwebtwentyfive'),
    ));
}
add_action('init', 'jaxwebtwentyfive_menus');

// Customize excerpt length
function jaxwebtwentyfive_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'jaxwebtwentyfive_excerpt_length');

// Custom excerpt more text
function jaxwebtwentyfive_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'jaxwebtwentyfive_excerpt_more');

// Add theme customizer options
function jaxwebtwentyfive_customize_register($wp_customize) {
    // Add section for theme options
    $wp_customize->add_section('jaxwebtwentyfive_options', array(
        'title'    => __('Theme Options', 'jaxwebtwentyfive'),
        'priority' => 30,
    ));
    
    // Add setting for contact email
    $wp_customize->add_setting('contact_email', array(
        'default'           => 'hej@jaxweb.dk',
        'sanitize_callback' => 'sanitize_email',
    ));
    
    $wp_customize->add_control('contact_email', array(
        'label'   => __('Contact Email', 'jaxwebtwentyfive'),
        'section' => 'jaxwebtwentyfive_options',
        'type'    => 'email',
    ));
    
    // Add setting for contact phone
    $wp_customize->add_setting('contact_phone', array(
        'default'           => '+45 12 34 56 78',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    
    $wp_customize->add_control('contact_phone', array(
        'label'   => __('Contact Phone', 'jaxwebtwentyfive'),
        'section' => 'jaxwebtwentyfive_options',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'jaxwebtwentyfive_customize_register');

// Add widget areas
function jaxwebtwentyfive_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Sidebar', 'jaxwebtwentyfive'),
        'id'            => 'sidebar-1',
        'description'   => esc_html__('Add widgets here.', 'jaxwebtwentyfive'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => esc_html__('Footer 1', 'jaxwebtwentyfive'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here to appear in your footer.', 'jaxwebtwentyfive'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'jaxwebtwentyfive_widgets_init');

// Security enhancements
function jaxwebtwentyfive_security() {
    // Remove WordPress version from head
    remove_action('wp_head', 'wp_generator');
    
    // Remove Windows Live Writer manifest
    remove_action('wp_head', 'wlwmanifest_link');
    
    // Remove EditURI link
    remove_action('wp_head', 'rsd_link');
}
add_action('init', 'jaxwebtwentyfive_security');

// Performance optimizations
function jaxwebtwentyfive_performance() {
    // Remove emoji scripts and styles
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    
    // Remove jQuery migrate
    function jaxwebtwentyfive_remove_jquery_migrate($scripts) {
        if (!is_admin() && isset($scripts->registered['jquery'])) {
            $script = $scripts->registered['jquery'];
            if ($script->deps) {
                $script->deps = array_diff($script->deps, array('jquery-migrate'));
            }
        }
    }
    add_action('wp_default_scripts', 'jaxwebtwentyfive_remove_jquery_migrate');
}
add_action('init', 'jaxwebtwentyfive_performance');

// Custom post types and taxonomies can be added here
function jaxwebtwentyfive_custom_post_types() {
    // Portfolio post type
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => 'Portfolio',
            'singular_name' => 'Portfolio Item',
            'add_new' => 'Add New',
            'add_new_item' => 'Add New Portfolio Item',
            'edit_item' => 'Edit Portfolio Item',
            'new_item' => 'New Portfolio Item',
            'view_item' => 'View Portfolio Item',
            'search_items' => 'Search Portfolio',
            'not_found' => 'No portfolio items found',
            'not_found_in_trash' => 'No portfolio items found in Trash'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon' => 'dashicons-portfolio',
        'show_in_rest' => true,
    ));
}
add_action('init', 'jaxwebtwentyfive_custom_post_types');
