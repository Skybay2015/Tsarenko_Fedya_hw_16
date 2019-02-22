<?php

add_filter('show_admin_bar', '__return_false');

define('SQUARE_THEME_ROOT', get_template_directory_uri());
define('SQUARE_CSS_DIR', SQUARE_THEME_ROOT . '/css');
define('SQUARE_JS_DIR', SQUARE_THEME_ROOT . '/js');
define('SQUARE_IMG_DIR', SQUARE_THEME_ROOT . '/img');


add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function theme_name_scripts() {
    wp_enqueue_style( 'main', SQUARE_CSS_DIR . '/index-main.css' );
    wp_enqueue_style( 'reset', SQUARE_CSS_DIR . '/reset.css' );
    wp_enqueue_style( 'blogs', SQUARE_CSS_DIR . '/blogs.css' );
    wp_enqueue_style( 'portfolio', SQUARE_CSS_DIR . '/portfolio.css' );
    wp_enqueue_style( 'post', SQUARE_CSS_DIR . '/post.css' );
    wp_enqueue_script( 'hamburger', SQUARE_JS_DIR . '/hamburger.js');
}

add_action('init', 'create_blog');
add_theme_support('post-thumbnails');
function create_blog(){
    register_post_type('blog', [
        'labels'             => [
            'name'               => 'Блог',
            'singular_name'      => 'блог',
            'add_new'            => 'Добавить блог',
            'add_new_item'       => 'Добавить блог',
            'edit_item'          => 'Редактировать блог',
            'new_item'           => 'Новый блог',
            'view_item'          => 'Посмотреть блог',
            'search_items'       => 'Найти блог',
            'not_found'          =>  'Блог не найдено',
            'not_found_in_trash' => 'В корзине блог не найдено',
            'menu_name'          => 'БЛОГ'

        ],
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'supports'           => array('title','editor','thumbnail')
    ] );
}

add_action('init', 'create_portfolio');
add_theme_support('post-thumbnails');
function create_portfolio(){
    register_post_type('portfolio', [
        'labels'             => [
            'name'               => 'Портфолио',
            'singular_name'      => 'портфолио',
            'add_new'            => 'Добавить портфолио',
            'add_new_item'       => 'Добавить портфолио',
            'edit_item'          => 'Редактировать портфолио',
            'new_item'           => 'Новое портфолио',
            'view_item'          => 'Посмотреть портфолио',
            'search_items'       => 'Найти портфолио',
            'not_found'          => 'портфолио не найдено',
            'not_found_in_trash' => 'В корзине портфолио не найдено',
            'menu_name'          => 'ПОРТФОЛИО'

        ],
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'supports'            =>array('thumbnail')
    ] );
}

add_action('init', 'create_post');
add_theme_support('post-thumbnails');
function create_post(){
    register_post_type('single-post', [
        'labels'             => [
            'name'               => 'Пост',
            'singular_name'      => 'пост',
            'edit_item'          => 'Редактировать пост',
            'view_item'          => 'Посмотреть пост',
            'search_items'       => 'Найти пост',
            'not_found'          =>  'пост не найдено',
            'not_found_in_trash' => 'В корзине пост не найдено',
            'menu_name'          => 'ПОСТ'

        ],
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'supports'           => array('title','editor','thumbnail')
    ] );
}

add_action('init', 'create_news');
add_theme_support('post-thumbnails');
function create_news(){
    register_post_type('news', [
        'labels'             => [
            'name'               => 'Новость',
            'singular_name'      => 'Новость',
            'edit_item'          => 'Редактировать Новость',
            'view_item'          => 'Посмотреть Новость',
            'search_items'       => 'Найти Новость',
            'not_found'          =>  'Новость не найдено',
            'not_found_in_trash' => 'В корзине Новость не найдено',
            'menu_name'          => 'НОВОСТЬ'

        ],
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'supports'           => array('title','editor','thumbnail')
    ] );
}

add_action('init', 'add_partners');
add_theme_support('post-thumbnails');
function add_partners(){
    register_post_type('partners', [
        'labels'             => [
            'name'               => 'Партнеры',
            'singular_name'      => 'Партнеры',
            'edit_item'          => 'Редактировать Партнеры',
            'view_item'          => 'Посмотреть Партнеры',
            'search_items'       => 'Найти Партнеры',
            'not_found'          =>  'Партнеры не найдено',
            'not_found_in_trash' => 'В корзине Партнеры не найдено',
            'menu_name'          => 'ПАРТНЕРЫ'

        ],
        'public'             => false,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'supports'           => array('thumbnail')
    ] );
}

function get_partners ()
{
    $args = [
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'partners'
    ];

    return get_posts($args);
}

function get_news ()
{
    $args = [
        'numberposts' => 3,
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'news'
    ];

    return get_posts($args);
}

function get_blog ()
{
    $args = [
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'blog'
    ];

    return get_posts($args);
}

function get_portfolio ()
{
    $argc = [
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'portfolio'
    ];
    return get_posts($argc);
}

function get_single_post ()
{
    $argc = [
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'single-post'
    ];
    return get_posts($argc);
}

