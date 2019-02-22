<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:400,700" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <title><?php the_title(); ?></title>
    <?php
    wp_head();

    ?>
</head>
<body>
<?php get_header('header.php') ?>
<section class="portfolio">
    <div class="wrapper">
        <img src="<?php echo SQUARE_IMG_DIR; ?>/Morgan_Freeman.png" alt="" class="portfolio-portrait">
        <div class="portfolio-info">
            <div class="portfolio-zoom">
                <div>
                    <i class="fas fa-arrows-alt-v"></i>
                </div>
            </div>
            <p class="portfolio-name">
                morgan freeman
            </p>
            <p class="portfolio-job">
                actor
            </p>
            <div class="portfolio-coordination">
                <p class="portfolio-description">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac venenatis
                    ante
                    venenatis eget.
                </p>
                <div class="portfolio-navigation">
                    <div class="portfolio-slides">
                        <div class="portfolio-slides-left">
                            <i class="fas fa-angle-left" id="previous"></i>
                        </div>
                        <div class="portfolio-slides-right">
                            <i class="fas fa-angle-right" id="next"></i>
                        </div>
                    </div>
                    <p class="portfolio-counter">
                        1 / 10
                    </p>
                </div>
            </div>
            <div class="portfolio-activity">
                <i class="fas fa-heart"></i>
                <i class="fas fa-reply"></i>
                <i class="fas fa-envelope"></i>
            </div>
        </div>
    </div>
</section>
<section class="news">
    <div class="wrapper">
        <div class="news-main-container">
            <div class="news-container">
                <img src="<?php echo SQUARE_IMG_DIR; ?>/group_photo.png" alt="">
                <div class="workshop">
                    <h2 class="workshop-title">
                        fashion workshop
                    </h2>
                    <p class="workshop-date">
                        NOV 21-23
                    </p>
                    <p class="workshop-time">
                        9:00am - 4:00pm
                    </p>
                    <div class="workshop-rsvp">
                        rsvp
                    </div>
                </div>
            </div>
            <div class="news-container">
                <h2 class="news-title">
                    news
                </h2>
                <?php foreach (get_news() as $news): ?>
                <div class="news-item">
                    <div class="news-post-img">
                        <img src="<?php echo get_the_post_thumbnail_url($news->ID, 'thumbnail'); ?>" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="news-post-title">
                            <?php echo $news->post_title ?>
                        </h3>
                        <p class="news-post-date">
                            <?php $full_date = $news->post_date;
                            echo $date = substr($full_date, 0, 10);
                            ?>
                        </p>
                        <p class="news-post-text">
                            <?php echo $news->post_content ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="news-container">
                <div class="news-contacts">
                    <div class="news-logo">
                        <img src="<?php echo SQUARE_IMG_DIR; ?>/logo-2.png" alt="">
                    </div>
                    <div class="contacts-container">
                        <div class="contacts-item">
                            <i class="fas fa-phone-square"></i>
                            <p class="contacts-contact">+ 00 123 456 7890</p>
                        </div>
                        <div class="contacts-item">
                            <i class="fas fa-envelope"></i>
                            <p class="contacts-contact">info@square.com</p>
                        </div>
                        <div class="contacts-social">
                            <div class="contacts-social-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="contacts-social-item">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="contacts-social-item">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="contacts-social-item">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="contacts-social-item">
                                <i class="fab fa-google-plus-g"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-twitter">
                    <i class="fab fa-twitter"></i>
                    <p class="twit">
                        Unerdwear cookie liquorice. Cake donut cupcake lollipop soufflé candy. Chocolate oat cake
                        <span>@cheesecake</span> tootsie roll.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="wrapper">
        <div class="partners-container">
            <?php foreach (get_partners() as $partner): ?>
            <div class="partners-item">
                <img src="<?php echo get_the_post_thumbnail_url($partner->ID, 'medium') ?>" alt="">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer('footer.php')?>

<?php
wp_footer();
?>
</body>
</html>