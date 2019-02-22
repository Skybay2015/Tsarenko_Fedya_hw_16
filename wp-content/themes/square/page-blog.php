<!doctype html>
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
<?php get_header('header.php')?>

<section class="blog">
    <div class="wrapper">
        <div class="blog-main-container">
            <?php foreach (get_blog() as $blog): ?>
            <?php $full_date = $blog->post_date;
                $date = substr($full_date, 0, 10);
                ?>
            <div class="blog-container">
                <div class="blog-img">
                    <img src="<?php echo get_the_post_thumbnail_url($blog->ID, 'large') ?>" alt="">
                </div>
                <h2 class="blog-title">
                    <?php echo $blog->post_title; ?>
                </h2>
                <p class="blog-text">
                    <?php echo $blog->post_content; ?>
                </p>
                <button class="blog-btn">
                    read more
                </button>
                <div class="blog-statistics">
                    <p class="blog-date">
                       <span class="blog-icon">
                        <i class="far fa-calendar-alt"></i>
                        </span>
                        <?php echo $date?>
                    </p>
                    <p class="blog-comments">
                        <span class="blog-icon">
                            <i class="fas fa-comment"></i>
                        </span>
                        24
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="blog-navigation">
            <button class="blog-navigation-btn">
                prev
            </button>
            <div class="blog-pages-container">
                <p class="blog-page">
                    1
                </p>
                <p class="blog-page">
                    2
                </p>
                <p class="blog-page">
                    3
                </p>
                <p class="blog-page">
                    4
                </p>
                <p class="blog-page">
                    5
                </p>
                <p class="blog-page">
                    6
                </p>
                <p class="blog-page">
                    7
                </p>
                <p class="blog-page">
                    8
                </p>
                <p class="blog-page">
                    ...
                </p>
                <p class="blog-page">
                    21
                </p>
            </div>
            <button class="blog-navigation-btn">
                next
            </button>
        </div>
        <button class="to-top">
            <a href="#header">^</a>
        </button>
    </div>
</section>

<?php get_footer('footer.php')?>
<?php
wp_footer();

?>
</body>
</html>