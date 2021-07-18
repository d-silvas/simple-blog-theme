<?php

/**
 * CSS/JS DEPENDENCIES
 */

function simpleblog_register_styles()
{
    $simpleblog_version = wp_get_theme()->get('Version');

    wp_enqueue_style(
        'simpleblog-fontawesome',
        'https://use.fontawesome.com/releases/v5.15.3/css/all.css',
        [],
        '5.15.3',
        'all'
    );
    wp_enqueue_style(
        'simpleblog-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        [],
        '5.0.2',
        'all'
    );
    wp_enqueue_style(
        'simpleblog-style',
        get_template_directory_uri() . '/style.css',
        ['simpleblog-bootstrap'],
        $simpleblog_version,
        'all'
    );
}

function simpleblog_register_scripts()
{
    $simpleblog_version = wp_get_theme()->get('Version');

    wp_enqueue_script(
        'simpleblog-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
        [],
        '5.0.2',
        true
    );
    wp_enqueue_script(
        'simpleblog-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['simpleblog-bootstrap'],
        $simpleblog_version,
        true
    );
}

// When Wordpress runs the first hook, also execute my functions
add_action('wp_enqueue_scripts', 'simpleblog_register_styles');
add_action('wp_enqueue_scripts', 'simpleblog_register_scripts');

/**
 * THEME SUPPORT
 */

// Adds dynamic title tag support. Wordpress will manage title tags itself
function simpleblog_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'simpleblog_theme_support');

/**
 * MENUS
 */

function simpleblog_menus()
{
    $locations = array(
        'primary' => 'Desktop primary left sidebar',
        'footer' => 'Footer menu items'
    );
    register_nav_menus($locations);
}

add_action('init', 'simpleblog_menus');

function simpleblog_add_listitem_classes($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_css_class', 'simpleblog_add_listitem_classes', 10, 1);

function simpleblog_add_a_classes($atts)
{
    $atts['class'] = 'nav-link';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'simpleblog_add_a_classes', 10, 1);
