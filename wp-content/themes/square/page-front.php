<?php /* Template Name: Front-page Template */ ?>

<?php get_header('header.php') ?>
<section class="portfolio">
    <div class="wrapper">
        <div class="slider">
            <div class="slider-item">
                <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                     class="portfolio-portrait">
            </div>

            <div class="slider-item">
                <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                     class="portfolio-portrait">
            </div>

            <div class="slider-item">
                <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                     class="portfolio-portrait">
            </div>

            <div class="slider-item">
                <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                     class="portfolio-portrait">
            </div>

            <div class="slider-item">
                <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                     class="portfolio-portrait">
            </div>

            <div class="slider-item">
                <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                     class="portfolio-portrait">
            </div>
        </div>
            <div class="portfolio-info">
                <div class="portfolio-zoom">
                    <div class="operator-close">
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
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac
                        venenatis
                        ante
                        venenatis eget.
                    </p>
                    <div class="portfolio-navigation">
                        <div class="portfolio-slides">
                        </div>
                        <p class="portfolio-counter">
                        </p>
                    </div>
                </div>
                <div class="portfolio-activity">
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-reply"></i>
                    <i class="fas fa-envelope"></i>
                </div>
            </div>
        <div class="operator-open">
            <i class="fas fa-arrows-alt-v"></i>
        </div>
    </div>
</section>
<section class="news">
    <div class="wrapper">
        <div class="news-main-container">
            <div class="news-container">
                <img src="<?php echo get_theme_file_uri('/img/group_photo.png') ?>" alt="">
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
                <?php $args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 3);
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="news-item">
                            <div class="news-post-img">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?>"
                                     alt="">
                            </div>
                            <div class="news-text">
                                <h3 class="news-post-title">
                                    <?php the_title(); ?>
                                </h3>
                                <p class="news-post-date">
                                    <?php $full_date = the_date();
                                    $date = substr($full_date, 0, 10);
                                    ?>
                                </p>
                                <p class="news-post-text">
                                    <?php the_content(); ?>
                                    <span class="news-post-more">read more</span>
                                </p>
                            </div>
                        </div>
                    <?php endwhile;
                }
                wp_reset_postdata(); ?>
            </div>
            <div class="news-container">
                <div class="news-contacts">
                    <div class="news-logo">
                        <img src="<?php echo get_theme_file_uri('/img/logo-2.png') ?>" alt="" class="news-logo-img">
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
<?php get_footer('footer.php') ?>

<?php
wp_footer();
?>
</body>
</html>
