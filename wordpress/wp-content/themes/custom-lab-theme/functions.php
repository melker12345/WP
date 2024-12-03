<?php
/**
 * Custom Lab Theme functions and definitions
 */

// Include custom widget
require get_template_directory() . '/includes/custom-widget.php';

// Theme Setup
function custom_lab_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Enable support for HTML5 markup
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add support for core custom logo
    add_theme_support('custom-logo', array(
        'height'      => 250,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
    ));

    // Register nav menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'custom-lab-theme'),
        'footer'  => __('Footer Menu', 'custom-lab-theme'),
    ));
}
add_action('after_setup_theme', 'custom_lab_theme_setup');

// Register widget areas
function custom_lab_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'custom-lab-theme'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'custom-lab-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'custom-lab-theme'),
        'id'            => 'footer-1',
        'description'   => __('Add footer widgets here.', 'custom-lab-theme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'custom_lab_theme_widgets_init');

// Register custom widget
function custom_lab_theme_register_widgets() {
    register_widget('Custom_Lab_Featured_Posts_Widget');
}
add_action('widgets_init', 'custom_lab_theme_register_widgets');

// Enqueue scripts and styles
function custom_lab_theme_scripts() {
    // Theme main stylesheet (style.css in theme root)
    wp_enqueue_style('custom-lab-theme-style', get_stylesheet_uri());

    // Bootstrap CSS (from CDN)
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    
    // Font Awesome (from CDN)
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

    // Custom styles
    wp_enqueue_style('custom-lab-theme-custom', get_template_directory_uri() . '/css/custom.css', array(), wp_get_theme()->get('Version'));

    // jQuery (included with WordPress)
    wp_enqueue_script('jquery');

    // Bootstrap JavaScript (from CDN)
    wp_enqueue_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.1.3', true);

    // Navigation JavaScript
    wp_enqueue_script('custom-lab-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array('jquery'), '1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'custom_lab_theme_scripts');

// Display admin notice for recommended plugins
function custom_lab_theme_admin_notice() {
    $plugins = array(
        array(
            'name' => 'Contact Form 7',
            'slug' => 'contact-form-7',
            'url'  => 'https://wordpress.org/plugins/contact-form-7/'
        ),
        array(
            'name' => 'Yoast SEO',
            'slug' => 'wordpress-seo',
            'url'  => 'https://wordpress.org/plugins/wordpress-seo/'
        ),
        array(
            'name' => 'Classic Editor',
            'slug' => 'classic-editor',
            'url'  => 'https://wordpress.org/plugins/classic-editor/'
        )
    );

    $installed_plugins = get_plugins();
    $missing_plugins = array();

    foreach ($plugins as $plugin) {
        if (!array_key_exists($plugin['slug'] . '/' . $plugin['slug'] . '.php', $installed_plugins)) {
            $missing_plugins[] = '<a href="' . $plugin['url'] . '" target="_blank">' . $plugin['name'] . '</a>';
        }
    }

    if (!empty($missing_plugins)) {
        echo '<div class="notice notice-warning is-dismissible">';
        echo '<p><strong>Custom Lab Theme:</strong> For the best experience, please install and activate these recommended plugins:</p>';
        echo '<ul><li>' . implode('</li><li>', $missing_plugins) . '</li></ul>';
        echo '</div>';
    }
}
add_action('admin_notices', 'custom_lab_theme_admin_notice');

// Custom excerpt length
function custom_lab_theme_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'custom_lab_theme_excerpt_length', 999);

// Custom excerpt more
function custom_lab_theme_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'custom_lab_theme_excerpt_more');

// Add custom image sizes
add_image_size('custom-lab-theme-featured', 1200, 400, true);
add_image_size('custom-lab-theme-thumbnail', 350, 250, true);
