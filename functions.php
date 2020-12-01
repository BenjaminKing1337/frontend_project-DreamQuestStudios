<?php 

// Header and Footer WP Menus
function setup_menus() {
    register_nav_menu("header-menu", __( 'Header Menu'));
    register_nav_menu("footer-menu", __( 'Footer Menu'));
}

add_action("init", "setup_menus");

// Linking stylesheets
function load_resources()
{
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Raleway:wght@300;400&family=Volkhov:wght@400;700&display=swap');
    wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'load_resources');


// display top ancestor when on a page
function get_top_ancestor_id() {

    global $post;

    if($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }

    return $post->ID;
}


// display page children if any
function has_children() {
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}
