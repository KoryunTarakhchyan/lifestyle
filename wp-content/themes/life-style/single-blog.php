<?php
/**
 * Created by PhpStorm.
 * User: narek
 * Date: 19.05.2017
 * Time: 18:00
 */
$blogItemImage = get_field('top_image');
get_header();
?>

    <section class="main-container">
        <div class="left">
            <div class="image-section">
                <img src="<?= $blogItemImage['url']?>" alt="">
            </div>
            <div class="title">
                <?php the_title();?>
            </div>
            <div class="line"></div>
            <div class="date"><img src="<?= get_template_directory_uri()?>/images/date-icon.png" alt=""><span><?php the_time('d/m/Y'); ?></span></div>
            <div class="content">
                <?php
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
                ?>
            </div>
        </div>
        <div class="right">
            <div class="recent-blog-posts">
                <div class="title">
                    Recent Articles
                </div>
                <?php
                $type = 'blog';
                $args=array(
                    'post_type' => $type,
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                );
                $my_query = null;
                $my_query = new WP_Query($args);
                if( $my_query->have_posts() ) {

                    while ($my_query->have_posts()) : $my_query->the_post();
                        ?>
                        <div class="blog-item ">
                            <a href="<?= esc_url(get_permalink()) ?>" class="permalink">
                                <?php the_title()?>
                            </a>
                        </div>
                        <?php  endwhile;
                }
                wp_reset_query();  // Restore global post data stomped by the_post().

                ?>
            </div>
        </div>
        <div class="clear"></div>
    </section>

<?php get_footer();
