<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:400,700" rel="stylesheet">
    <title><?php the_title(); ?></title>
    <?php
    wp_head();
    ?>
</head>
<body>
<header class="header">
    <div class="wrapper">
        <div class="header-content">
            <div class="header__menu menu">
                <div class="hamburger" id="openMenu">
                    <div class="span_container">
                        <span class="hamburger__item hamburger__item--top"></span>
                        <span class="hamburger__item hamburger__item--middle"></span>
                        <span class="hamburger__item hamburger__item--bottom"></span>
                    </div>
                </div>
                <nav class="menu-list menu__menu-list">
                    <ul class="menu-list__links">
                        <li class="menu-list__item">
                            <a href="<?php echo get_permalink(74); ?>">Portfolio</a>
                            <ul class="sub-menu">
                                <li class="sub-item">
                                    <a href="#">
                                        Fashion
                                    </a>
                                </li>
                                <li class="sub-item">
                                    <a href="#">
                                        Editorial
                                    </a>
                                </li>
                                <li class="sub-item">
                                    <a href="#">
                                        street
                                    </a>
                                </li>
                                <li class="sub-item">
                                    <a href="#">
                                        black white
                                    </a>
                                    <ul class="second-sub-menu">
                                        <li class="second-sub-item">
                                            <a href="#">
                                                Gallery/1
                                            </a>
                                        </li>
                                        <li class="second-sub-item">
                                            <a href="#">
                                                Gallery/2
                                            </a>
                                        </li>
                                        <li class="second-sub-item">
                                            <a href="#">
                                                Gallery/3
                                            </a>
                                        </li>
                                        <li class="second-sub-item">
                                            <a href="#">
                                                Gallery/4
                                            </a>
                                        </li>
                                        <li class="second-sub-item">
                                            <a href="#">
                                                Gallery/5
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="sub-item">
                                    <a href="#">
                                        personal
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-list__item">
                            <a href="#">clients</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="<?php echo get_permalink(16); ?>">news</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="<?php echo get_permalink(2); ?>">about me</a>
                        </li>
                        <li class="menu-list__item">
                            <a href="#">contact</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="logo">
                <img src="<?php echo get_theme_file_uri('/img/square_logo.png') ?>" alt="">
            </div>

            <div class="social-network">
                <div class="social-item">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="social-item">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="social-item">
                    <i class="fab fa-instagram"></i>
                </div>
                <div class="social-item">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="social-item">
                    <i class="fab fa-google-plus-g"></i>
                </div>
                <div class="social-item">
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
        </div>
    </div>
</header>