<?php
/**
 * Created by PhpStorm.
 * User: narek
 * Date: 11.04.2017
 * Time: 22:38
 */
$topImage = get_field('bg_img');

get_header();
?>

    <section class="top" style="background-image: url(<?= $topImage['url'];?>)">
        <div class="table">
            <div class="cell">
                <div class="box">
                    <div class="text">
                        Imagine an outfit that challenges your current beliefs, and pushes you to a new level. Our motivational tshirts are the next step to your personal growth. <span>Be the best you can be.</span>
                    </div>
                    <a href="" >SHOP NOW</a>
                </div>
            </div>
        </div>
    </section>
    <section class="product">
        <div class="wrapper">
            <div class="title">Recommended Products</div>
            <div class="text"></div>
            <?php
            $args = array( 'post_type' => 'product', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args ); ?>
            <div class="slider">
                <?php
                while ( $loop->have_posts() ) : $loop->the_post();
                    global $product;
                    ?>
                    <a href="<?= the_permalink()?>">
                        <div class="item">
                            <div class="prod_img">
                                <?= the_post_thumbnail();?>
                            </div>
                            <div class="product-title"><?= the_title();?></div>
                            <div class="price"><?= $product->get_price_html();?></div>
                        </div>
                    </a>
                    <?php

                endwhile;
                wp_reset_query();
                ?>
            </div>


        </div>
    </section>
    <section class="idea-earn">
        <div class="item">
            <img src="<?= get_template_directory_uri()?>/images/icon-flower.png" alt="">
            <div class="title">ABOUT US</div>
            <div class="text">Think of an outfit which is more than just an apparel.
                A casual T-shirt can become the motivating anchor to push
                you to reframe and upgrade your game.</div>
            <a href="/about/">Click here</a>
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
    <section class="blog-info">
        <div class="wrapper">
            <div class="left" style="float: left;">
                <div class="title"></div>
                <?php
                $all_blog = wp_count_posts('blog');
                $all_blog = $all_blog->publish;
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
                                    <?php $summary = get_field('post_short_description');?>
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
            </div>
            <div class="clear"></div>

            <div class="right" style="float: right;">
                <div class="title"></div>
                <img >
            </div>
        </div>
    </section>

    <section class="instagram">
        <div class="wrapper">
            <div class="title">#realhustlelifestyle</div>
            <?php echo do_shortcode('[instagram-feed]'); ?>

        </div>
    </section>
<?php get_footer();







