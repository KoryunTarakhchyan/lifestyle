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
<?php get_footer();