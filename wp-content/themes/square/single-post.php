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
<section class="post">
    <div class="small-wrapper">
        <?php foreach (get_single_post() as $post): ?>
        <div class="post-img">
            <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>" alt="">
        </div>
        <h1 class="post-title">
           <?php echo $post->post_title; ?>
        </h1>
        <div class="post-statistics">
            <p class="post-item">
                <i class="far fa-calendar-alt"></i>
                <span class="post-info">
                    <?php $full_date = $post->post_date;
                    echo $date = substr($full_date, 0, 10);
                    ?>
                </span>
            </p>
            <p class="post-item">
                <i class="fas fa-comment"></i>
                <span class="post-info">400</span>
            </p>
            <p class="post-item">
                <i class="fas fa-heart"></i>
                <span class="post-info"> 200</span>
            </p>
        </div>
        <p class="post-text">
            <?php echo $post->post_content; ?>
        </p>
        <?php endforeach; ?>
        <div class="post-share-container">
            <h2 class="post-share-title">
                SHARE
            </h2>
            <div class="post-share-icon">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="post-share-icon">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="post-share-icon">
                <i class="fab fa-facebook-f"></i>
            </div>
            <div class="post-share-icon">
                <i class="fas fa-retweet"></i>
            </div>
        </div>
    </div>
</section>
<section class="comment">
    <div class="small-wrapper">
        <h2 class="comment-title">
            10 Comments
        </h2>
        <div class="comment-container">
            <div class="comment-container-top">
                <p class="comment-author">
                    Robert Smith
                </p>
                <p class="comment-date">
                    02 June 2014, 15:20
                </p>
                <p class="comment-reply">
                    <i class="fas fa-reply"></i>
                    <span class="comment-move">
                       REPLY
                    </span>
                </p>
            </div>
            <div class="comment-container-main">
                <div class="comment-img">
                    <img src="img/user.png" alt="">
                </div>
                <div class="comment-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra,
                    lacus turpis dapibus magna, eget aliquam diam erat at velit.
                </div>
            </div>
        </div>
        <div class="comment-container reply">
            <div class="comment-container-top">
                <p class="comment-author">
                    Robert Smith
                </p>
                <p class="comment-date">
                    02 June 2014, 15:20
                </p>
                <p class="comment-reply">
                    <i class="fas fa-reply"></i>
                    <span class="comment-move">
                       REPLY
                    </span>
                </p>
            </div>
            <div class="comment-container-main">
                <div class="comment-img">
                    <img src="img/user.png" alt="">
                </div>
                <div class="comment-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra,
                    lacus turpis dapibus magna, eget aliquam diam erat at velit.
                </div>
            </div>
        </div>
        <div class="comment-container">
            <div class="comment-container-top">
                <p class="comment-author">
                    Robert Smith
                </p>
                <p class="comment-date">
                    02 June 2014, 15:20
                </p>
                <p class="comment-reply">
                    <i class="fas fa-reply"></i>
                    <span class="comment-move">
                       REPLY
                    </span>
                </p>
            </div>
            <div class="comment-container-main">
                <div class="comment-img">
                    <img src="img/user.png" alt="">
                </div>
                <div class="comment-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque molestie, purus id mollis pharetra,
                    lacus turpis dapibus magna, eget aliquam diam erat at velit.
                </div>
            </div>
        </div>
        <h2 class="form-title">
            Leave a comment
        </h2>
        <form action="" method="post" class="form">
            <input type="text" name="name" placeholder="Name" class="form-input">
            <input type="email" name="email" placeholder="E-mail" class="form-input">
            <input type="text" name="web" placeholder="Web site" class="form-input">
            <input type="text" name="job" placeholder="Job" class="form-input">
            <textarea name="comment" cols="30" rows="10"
                      placeholder="Comment" class="form-textarea"></textarea>
            <button class="form-btn">
                SEND
            </button>
        </form>
        <p class="form-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus mattis semper nisl, vitae malesuada massa
            egestas a. Vestibulum vestibulum urna sapien, eu bibendum magna ornare non.
        </p>
    </div>
</section>
<section class="news">
    <div class="wrapper">
        <div class="news-main-container">
            <div class="news-container">
                <img src="<?php echo $SQUARE_IMG_DIR?>group_photo.png" alt="">
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
                    REcent post
                </h2>
                <div class="news-item">
                    <div class="news-post-img">
                        <img src="<?php echo SQUARE_IMG_DIR; ?>/thumb-1.png" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="news-post-title">
                            New Gallery Set
                        </h3>
                        <p class="news-post-date">
                            09.12.2014
                        </p>
                        <p class="news-post-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac
                            venenatis ante venenatis eget. <span class="news-post-more">read more</span>
                        </p>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-post-img">
                        <img src="<?php echo SQUARE_IMG_DIR; ?>/thumb-2.png" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="news-post-title">
                            New Gallery Set
                        </h3>
                        <p class="news-post-date">
                            09.12.2014
                        </p>
                        <p class="news-post-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac
                            venenatis ante venenatis eget. <span class="news-post-more">read more</span>
                        </p>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-post-img">
                        <img src="<?php echo SQUARE_IMG_DIR; ?>/thumb-3.png" alt="">
                    </div>
                    <div class="news-text">
                        <h3 class="news-post-title">
                            New Gallery Set
                        </h3>
                        <p class="news-post-date">
                            09.12.2014
                        </p>
                        <p class="news-post-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque fringilla mi orci, ac
                            venenatis ante venenatis eget. <span class="news-post-more">read more</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="news-container">
                <h2 class="news-title">
                    category
                </h2>
                <ul class="news-categories">
                    <li class="news-category">
                        Fashion
                    </li>
                    <li class="news-category">
                        Collections
                    </li>
                    <li class="news-category">
                        World
                    </li>
                    <li class="news-category">
                        Photography
                    </li>
                    <li class="news-category">
                        General
                    </li>
                    <li class="news-category">
                        Info
                    </li>
                    <li class="news-category">
                        Catalog
                    </li>
                    <li class="news-category">
                        Video
                    </li>
                    <li class="news-category">
                        Showreal
                    </li>
                    <li class="news-category">
                        Glamour
                    </li>
                    <li class="news-category">
                        Accessories
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="partners">
    <div class="wrapper">
        <div class="partners-container">
            <div class="partners-item">
                <img src="<?php echo SQUARE_IMG_DIR; ?>/phaseone_logo.png" alt="">
            </div>
            <div class="partners-item">
                <img src="<?php echo SQUARE_IMG_DIR; ?>/manfrotto_logo.png" alt="">
            </div>
            <div class="partners-item">
                <img src="<?php echo SQUARE_IMG_DIR; ?>/hasselblad.png" alt="">
            </div>
            <div class="partners-item">
                <img src="<?php echo SQUARE_IMG_DIR; ?>/broncolor_logo.png" alt="">
            </div>
        </div>
    </div>
</section>
<?php
get_footer('footer.php');
?>
<?php
 wp_footer();
 ?>
</body>
</html>