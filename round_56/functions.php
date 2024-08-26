<?php
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
function add_my_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('my-css', get_theme_file_uri('my.css'));
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_script('js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js');
}
add_action('wp_enqueue_scripts', 'add_my_styles');

function mytheme_register_nav_menu()
{
    register_nav_menus(
        array(
            'primary_menu' => __('Primary Menu', 'text_domain'),
            'footer_nav' => __('Footer Menu', 'text_domain'),
        )
    );
}
add_action('after_setup_theme', 'mytheme_register_nav_menu', 0);

class AWP_Menu_Walker extends Walker_Nav_Menu
{
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "<ul title='dropdown-menu'";
    }
    function start_el(&$output, $item, $depth = 0, $args = [], $id = 0)
    {
        $output .= '<li class="nav-item"><a class="nav-link" href="' . $item->url . '">' . $item->title . '</a>';
    }
}
