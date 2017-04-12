<?php

$topImg = get_field('bg_img');
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="top">

            </section>
            <section class="middle">
                <?php

                // check if the repeater field has rows of data
                if( have_rows('about_info') ):

                    // loop through the rows of data
                    while ( have_rows('about_info') ) : the_row();
                        $img = get_sub_field('image'); ?>

                        <div class="item ">
                            <div class="title"><?php the_sub_field('title'); ?></div>
                            <?php if (get_sub_field('position')=="left"){ ?>
                                <div class="img"><img src="<?= $img['url']; ?>"></div>
                                <div class="text"><?php the_sub_field('text'); ?></div>
                            <?php
                            } else {
                                ?>
                                <div class="text"><?php the_sub_field('text'); ?></div>
                                <div class="img"><img src="<?= $img['url']; ?>"></div>
                            <?php
                            } ?>
                        </div>

                        <?php
                    endwhile;
                endif;
                ?>
            </section>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();



