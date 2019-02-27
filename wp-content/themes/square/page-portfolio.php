<?php /* Template Name: Portfolio Template */ ?>

<?php get_header('header.php'); ?>
<section class="portfolio">
    <div class="wrapper">
        <div class="portfolio-container">
            <div class="portfolio-item">
                <h1 class="portfolio-title">
                    portfolio
                </h1>
                <p class="portfolio-number">
                    gallery three
                </p>
            </div>
            <?php $args = array(
                'post_type' => 'portfolio'
            );
            $loop = new WP_Query($args);
            if ($loop->have_posts()) {
                while ($loop->have_posts()) : $loop->the_post(); ?>
                    <div class="portfolio-item">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large') ?>" alt="">
                        <div class="portfolio-img-zoom">
                            <button class="open-modal open-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                <?php endwhile;
            } ?>
        </div>
            <div class="modal closed-modal" id="myModal">
                <div class="slider">
                    <div class="slider-item">
                        <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                             class="portfolio-portrait">
                        <button class="close-modal close-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="slider-item">
                        <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                             class="portfolio-portrait">
                        <button class="close-modal close-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="slider-item">
                        <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                             class="portfolio-portrait">
                        <button class="close-modal close-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="slider-item">
                        <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                             class="portfolio-portrait">
                        <button class="close-modal close-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="slider-item">
                        <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                             class="portfolio-portrait">
                        <button class="close-modal close-btn">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>

                    <div class="slider-item">
                        <img src="<?php echo get_theme_file_uri('/img/Morgan_Freeman.png') ?>" alt=""
                             class="portfolio-portrait">
                        <button class="close-modal close-btn">
                            <i class="fas fa-times"></i>
                        </button>
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
                <div class="close" id="close">
                    <i class="fas fa-search"></i>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer('footer.php') ?>
<?php
wp_footer();

?>
</body>
</html>