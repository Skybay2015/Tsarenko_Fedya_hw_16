<?php /* Template Name: Blog Template */

get_header('header.php');


$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

while(have_posts()) : the_post(); ?>
<section class="blog" id="blog">
    <div class="wrapper">
        <div class="blog-main-container">
            <?php $args = array(
                    'category_name' => 'blog',
                    'posts_per_page' => 6,
                    'paged' => $paged
                    );
                  $loop = new WP_Query( $args );
                  if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                      <div class="blog-container">
                          <div class="blog-img">
                              <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>" alt="">
                          </div>
                          <h2 class="blog-title">
                              <?php the_title(); ?>
                          </h2>
                          <p class="blog-text">
                              <?php echo get_the_excerpt(); ?>
                          </p>
                          <button class="blog-btn">
                              <a href="<?php echo get_attachment_link(get_the_ID());?>">read more</a>
                          </button>
                          <div class="blog-statistics">
                              <p class="blog-date">
                                <span class="blog-icon">
                                <i class="far fa-calendar-alt"></i>
                                 </span>
                                  <?php echo get_the_date(); ?>
                              </p>
                              <p class="blog-comments">
                                 <span class="blog-icon">
                                <i class="fas fa-comment"></i>
                                </span>
                                  24
                              </p>
                          </div>
                      </div>
                <?php endwhile; }
                wp_reset_postdata(); ?>
        </div>
        <?php if (function_exists("pagination")) {
            pagination($loop->max_num_pages);
        } ?>
        <button class="to-top">
            <a href="#blog">^</a>
        </button>
    </div>
</section>

<?php get_footer('footer.php');

wp_footer();

?>
</body>
</html>
<?php endwhile; ?>