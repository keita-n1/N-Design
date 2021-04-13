<?php

function enqueue_scripts() {
    //css読み込み,reset.css読み込み
    wp_enqueue_style('reset-css', get_template_directory_uri().'/css/reset.css');
    wp_enqueue_style('main-css', get_stylesheet_uri());
    //JavaScript,jQuery読み込み
    wp_enqueue_script('jquery-min-js', get_stylesheet_directory_uri() . '/script/jquery-3.6.0.min.js', array(), '3.6.0', true );
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script/script.js', array('jquery-min-js'), '', true );
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function theme_setup() {
    //titleタグ
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'theme_setup');
