<?php
// init custom posts
//require_once('inc/custom-posts.php');

// add ACF Theme Options and Fields
//require_once ('acf/acf-include.php');
add_action('after_setup_theme', 'dsh_theme_setup');

function dsh_theme_setup() {
    // Add Translation Option
    load_child_theme_textdomain('sak-dsh-theme', get_stylesheet_directory() . '/languages');

    function child_styles() {
        if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
            wp_register_style('parent-style', get_template_directory_uri() . '/style.css');
            wp_enqueue_style('parent-style');
            wp_register_style('dsh-style', get_template_directory_uri() . '/library/css/screen.css', 'style', '1.0', 'all', array());
            wp_enqueue_style('dsh-style');
//            wp_register_style('print', get_template_directory_uri() . '/library/css/print.min.css', 'style', '1.0', 'print', array('myStyle'));
//            wp_enqueue_style('print');
        }
    }

    add_action('wp_enqueue_scripts', 'child_styles');
}
