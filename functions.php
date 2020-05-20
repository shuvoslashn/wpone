<?php

// After Theme SetUp
function one_bootstrap()
{
    // Load Theme Textdomain
    load_theme_textdomain('one');

    // Post Thumbnails
    add_theme_support('post-thumbnails');

    // Title Tag
    add_theme_support('title-tag');

    // Register Navigation
    register_nav_menus(array(
        'uporerMenu' => __('Uporer Menu'),
        'tolarMenu' => __('Tolar Menu')
    ));
}
add_action('after_setup_theme', 'one_bootstrap');

// Calling Assets
function one_assets()
{
    wp_enqueue_style('one_style', get_stylesheet_uri(), '', '1.0.0');
    wp_enqueue_style('one_comments', get_template_directory_uri()."/css/comments.css", '', '1.0.0');
}
add_action('wp_enqueue_scripts', 'one_assets');

function one_widgets_init()
{
    // Theme Sidebar
    register_sidebar(array(
        'name'               => 'First Sidebar',
        'id'                 => 'sideone1',
        'before_widget'      => '<div class="single-sidebar">',
        'after_widget'       => '</div>',
    ));

    // Footer Widget One
    register_sidebar(array(
        'name'               => 'Footer Widget One',
        'id'                 => 'onefooterwidget1',
        'before_widget'      => '<div class="f-widget">',
        'after_widget'       => '</div>',
        'before_title'       => '<h3>',
        'after_title'        => '</h3>'
    ));

    // Footer Widget Two
    register_sidebar(array(
        'name'               => 'Footer Widget Two',
        'id'                 => 'onefooterwidget2',
        'before_widget'      => '<div class="f-widget">',
        'after_widget'       => '</div>',
        'before_title'       => '<h3>',
        'after_title'        => '</h3>'
    ));

    // Footer Widget Three
    register_sidebar(array(
        'name'               => 'Footer Widget Three',
        'id'                 => 'onefooterwidget3',
        'before_widget'      => '<div class="f-widget">',
        'after_widget'       => '</div>',
        'before_title'       => '<h3>',
        'after_title'        => '</h3>'
    ));

    // Footer Widget Four
    register_sidebar(array(
        'name'               => 'Footer Widget Four',
        'id'                 => 'onefooterwidget4',
        'before_widget'      => '<div class="f-widget">',
        'after_widget'       => '</div>',
        'before_title'       => '<h3>',
        'after_title'        => '</h3>'
    ));
}
add_action('widgets_init', 'one_widgets_init');

// Excerpt Function
function excerpt($num)
{
    $limit = $num+1;
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    array_pop($excerpt);
    $excerpt = implode(" ", $excerpt)." <a href='" .get_permalink($post->ID) ." ' class='readmore'> [ Read More ] </a>";
    echo $excerpt;
}