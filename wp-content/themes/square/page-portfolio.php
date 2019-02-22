<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto+Condensed:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/portfolio.css" type="text/css">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <title><?php echo the_title(); ?></title>
    <?php
    wp_head();

    ?>
</head>
<body>

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
            <?php foreach (get_portfolio() as $portfolio): ?>
            <div class="portfolio-item">
                <img src="<?php echo get_the_post_thumbnail_url($portfolio->ID, 'large') ?>" alt="">
                <div class="portfolio-img-zoom">
                    <i class="fas fa-search"></i>
                </div>
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