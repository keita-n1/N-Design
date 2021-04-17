<?php

function enqueue_scripts() {
    //css読み込み,reset.css読み込み
    wp_enqueue_style('reset-css', get_template_directory_uri().'/css/reset.css');
    wp_enqueue_style('main-css', get_stylesheet_uri());
    //JavaScript,jQuery読み込み
    wp_enqueue_script('jquery-min-js', get_stylesheet_directory_uri() . '/script/jquery-3.6.0.min.js', array(), '3.6.0', true );
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script/script.js', array('jquery-min-js'), '', true );
    //fontawesome
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function theme_setup() {
    //titleタグ
    add_theme_support('title-tag');
    //アイキャッチ画像の登録
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

//ナビゲーション
function add_menus() {
    register_nav_menus(array(
        'header_nav' => 'ヘッダーに表示されるナビゲーション',
        'footer_nav' => 'フッターに表示されるナビゲーション',
    ));
}
add_action('after_setup_theme', 'add_menus');

/* the_archive_title 余計な文字を削除 */
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category() || is_tax() || is_archive() ) {
        $title = single_cat_title('', false);
    }
    return $title;
});

//pタグを削除
add_action('init', function() {
    remove_filter('the_excerpt', 'wpautop');
    remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function($init) {
    $init['wpautop'] = false;
    $init['apply_source_formatting'] = true;
    return $init;
});

//サブクエリ
function new_query() {
    $args = [
        'post_type' => 'the_work',
        'post_per_page' => 6,
    ];
    $query = new WP_Query($args);
    return $query;
}
