<?php

add_filter('show_admin_bar', '__return_false');

add_action('wp_enqueue_scripts', 'theme_name_scripts');

function theme_name_scripts()
{
    wp_enqueue_script('jQuery-2', '//code.jquery.com/jquery-1.11.0.min.js');
    wp_enqueue_script('jQuery-1', '//code.jquery.com/jquery-migrate-1.2.1.min.js');
    wp_enqueue_style('reset', get_theme_file_uri('/css/reset.css'));
    wp_enqueue_style('main', get_theme_file_uri('/css/main.css'));
    wp_enqueue_style('slick', get_theme_file_uri('/slick/slick.css'));
    wp_enqueue_style('slick-theme', get_theme_file_uri('/slick/slick-theme.css'));
    wp_enqueue_style('blog', get_theme_file_uri('/css/main-blog.css'));
    wp_enqueue_style('portfolio', get_theme_file_uri('/css/portfolio.css'));
    wp_enqueue_style('post', get_theme_file_uri('/css/post.css'));
    wp_enqueue_script('hamburger', get_theme_file_uri('/js/hamburger.js'));
    wp_enqueue_script('modal', get_theme_file_uri('/js/modal.js'));
    wp_enqueue_script('slick-slider', get_theme_file_uri('/slick/slick.min.js'));
    wp_enqueue_script('slider-initialize', get_theme_file_uri('/slick/slider.js'));
}

if (function_exists('add_theme_support')) {
    add_theme_support('menus');
}

add_action('init', 'create_portfolio');
add_theme_support('post-thumbnails');
function create_portfolio()
{
    register_post_type('portfolio', [
        'labels' => [
            'name' => 'Портфолио',
            'singular_name' => 'портфолио',
            'add_new' => 'Добавить портфолио',
            'add_new_item' => 'Добавить портфолио',
            'edit_item' => 'Редактировать портфолио',
            'new_item' => 'Новое портфолио',
            'view_item' => 'Посмотреть портфолио',
            'search_items' => 'Найти портфолио',
            'not_found' => 'портфолио не найдено',
            'not_found_in_trash' => 'В корзине портфолио не найдено',
            'menu_name' => 'ПОРТФОЛИО'

        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('thumbnail')
    ]);
}

add_action('init', 'create_news');
add_theme_support('post-thumbnails');
function create_news()
{
    register_post_type('news', [
        'labels' => [
            'name' => 'Новость',
            'singular_name' => 'Новость',
            'edit_item' => 'Редактировать Новость',
            'view_item' => 'Посмотреть Новость',
            'search_items' => 'Найти Новость',
            'not_found' => 'Новость не найдено',
            'not_found_in_trash' => 'В корзине Новость не найдено',
            'menu_name' => 'НОВОСТЬ'

        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('title', 'editor', 'thumbnail')
    ]);
}

add_action('init', 'add_partners');
add_theme_support('post-thumbnails');
function add_partners()
{
    register_post_type('partners', [
        'labels' => [
            'name' => 'Партнеры',
            'singular_name' => 'Партнеры',
            'edit_item' => 'Редактировать Партнеры',
            'view_item' => 'Посмотреть Партнеры',
            'search_items' => 'Найти Партнеры',
            'not_found' => 'Партнеры не найдено',
            'not_found_in_trash' => 'В корзине Партнеры не найдено',
            'menu_name' => 'ПАРТНЕРЫ'

        ],
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'supports' => array('thumbnail')
    ]);
}

function get_partners()
{
    $args = [
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'partners'
    ];

    return get_posts($args);
}

function get_portfolio()
{
    $argc = [
        'orderby' => 'date',
        'order' => 'ASC',
        'post_type' => 'portfolio'
    ];
    return get_posts($argc);
}

function pagination($pages = '', $range = 4)
{
    $showitems = ($range * 2) + 1;
    global $paged;
    if (empty($paged)) $paged = 1;
    if ($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if (!$pages) {
            $pages = 1;
        }
    }
    if (1 != $pages) {
        echo "<div class=\"blog-navigation\">";

        if ($paged > 1) echo "<button class=\"blog-navigation-btn\">" . "<a href='" . get_pagenum_link($paged - 1) . "'>Prev</a>" . "</button>";
        for ($i = 1; $i <= $pages; $i++) {
            if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
                echo ($paged == $i) ? "<span class=\"blog-page\">" . $i . "</span>" : "<a href='" . get_pagenum_link($i) . "' class=\"blog-page\">" . $i . "</a>";
            }
        }
        if ($paged < $pages) echo "<button class=\"blog-navigation-btn\">" . "<a href=\"" . get_pagenum_link($paged + 1) . "\">Next</a>" .
            "</button>";
        echo "</div>\n";
    }
}


function customize_register( $wp_customize ) {
    $wp_customize->add_section( 'awesome_section_name' , array(
        'title'      => __( 'my awesome theme', 'square' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'body_bg_color' , array(
        'default'     => '#000000',
        'transport'   => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'body_bg_color', array(
        'label'      => __( 'body bg color', 'square' ),
        'section'    => 'awesome_section_name',
        'settings'   => 'body_bg_color',
    ) ) );

}
add_action( 'customize_register', 'customize_register' );

