<?php
/**
 * Created by PhpStorm.
 * User: narek
 * Date: 02.05.2017
 * Time: 20:43
 */

$all_blog = wp_count_posts('blog');
$all_blog = $all_blog->publish;

get_header(); ?>

<div class="blog-category-menu">
   <div class="wrapper">
       <?php
       wp_nav_menu( array(
           'menu' => 'Blog Category Menu'
       ) );
       ?>
   </div>
</div>
    <?php $Info = get_the_terms($post->ID, 'blog_category'); ?>
    <section class="blog-posts" data-category="<?= $Info[0]->slug?>">
        <div class="wrapper">
            <?php



            $type = 'blog';
            $args=array(
                'post_type' => $type,
                'post_status' => 'publish',
                'posts_per_page' => 3,
                'tax_query' 			=> array(
                    array(
                        'taxonomy' 		=> 'blog_category',
                        'terms' 		=> $Info[0]->slug,
                        'field' 		=> 'slug',
                        'operator' 		=> 'IN'
                    )
                )
            );
            $my_query = null;
            $my_query = new WP_Query($args);
            if( $my_query->have_posts() ) {
                $i = 1;
                $class = '';

                while ($my_query->have_posts()) : $my_query->the_post();
                    if($i == 2) {
                        $class = 'center';
                    }else {
                        $class = '';
                    }
                    ?>
                    <div class="blog-item <?= $class?> count-box">
                        <a href="<?= esc_url(get_permalink()) ?>" class="permalink">
                            <?php the_post_thumbnail()?>
                            <div class="box">
                                <div class="title"><?php the_title()?></div>
                                <div class="date"><?php the_time('d.m.y G:i:s'); ?></div>
                                <?php $summary = get_field('post_short_description');?>
                                <div class="short-description"><?= substr($summary,0 , 120) . '...' ;?></div>
                                <div class="read-more">read more</div>
                                <div class="clear"></div>
                            </div>
                        </a>
                    </div>
                    <?php if($i==3){
                        $i = 0;
                        $class = '';
                    }
                    $i++;
                endwhile;
            }
            wp_reset_query();  // Restore global post data stomped by the_post().

            ?>
            <div class="clear"></div>
            <div class="more_post">

            </div>
            <div class="clear"></div>
            <button id="load_more_blog" data-count="<?= $all_blog; ?>">More Posts</button>
        </div>
    </section>
    <section class="idea-earn">
        <div class="item">
            <img src="<?= get_template_directory_uri()?>/images/icon-flower.png" alt="">
            <div class="title">SUBMIT YOUR IDEA</div>
            <div class="text">Got a brilliant idea of a quote to motivate and inspire?
                If you believe in your idea to be the great one,
                share it with us and earn royalties from the sales.</div>
            <a href="">Submit Now</a>
        </div>
        <div class="item">
            <img src="<?= get_template_directory_uri()?>/images/icon-wallet.png" alt="">
            <div class="title">EMAIL US YOUR GREAT IDEAS  & EARN</div>
            <div class="text">Got a brilliant idea of a quote to motivate and inspire?
                 If you believe in your idea to be the great one,
                 share it with us and earn royalties from the sales.</div>
            <a href="">Click Here</a>
        </div>
        <div class="clear"></div>
    </section>
    <section class="gift">
        <div class="wrapper">
            <div class="box">
                <div class="line">
                    <div class="dash"></div>
                </div>
                <div class="content">
                    <div class="box-wrap">
                        <img src="<?= get_template_directory_uri()?>/images/icon_present.png">
                        <div class="title">BUY IT AS A GIFT</div>
                        <div class="text">When you choose <span>HUSTLE LIFESTYLE</span> products as a gift
                            you present not just a t-shirt, along you give <span>an Inspiration</span>.
                            Just choose it and press GIFT button. We will deliver your gift directly to the address of your friend and along with the personalized message.
                        </div>
                        <a href="">Free Gift Packaging</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="instagram">
        <div class="wrapper">
            <div class="title">INSTAGRAM FEED</div>
            <?php echo do_shortcode('[instagram-feed id="4827531247"]'); ?>

        </div>
    </section>
<?php get_footer();