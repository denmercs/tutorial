<?php 


function justus_load_script() {
    // styles
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css', [], false, 'all');
    wp_register_style('main', get_template_directory_uri() . '/assets/css/main.css', [], false, 'all');
    
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('main');

    // scripts
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', [], false, true);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js', ['jquery', 'popper'], false, true);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper');
    wp_enqueue_script('bootstrap');

    
}


add_action('wp_enqueue_scripts', 'justus_load_script');

// menus
register_nav_menus([
    'top-menu' => 'Top Menu Location',
    'mobile-menu' => 'Mobile Menu Location',

]);

// activate menu
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// custom images sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);

// register sidebars
function my_sidebars() {
    register_sidebar([
        'name' => 'Page Sidebar',
        'id' => 'page-sidebar',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ]);

    register_sidebar([
        'name' => 'Blog Sidebar',
        'id' => 'blog-sidebar',
        'before_title' => '<h4 class="widget_title">',
        'after_title' => '</h4>'
    ]);
}

add_action('widgets_init', 'my_sidebars')
?>