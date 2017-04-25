<?php

$topImg = get_field('bg_img');
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <section class="top" style="background-image: url(<?= $topImg['url']; ?>)">
                <div class="table">
                    <div class="cell">
                        <div class="box">
                            <div class="text">Think of an outfit which is more than just an apparel.</div>
                            <div class="text">A casual T-shirt can become the motivating anchor to push you to reframe and upgrade your game.</div>
                            <a href="">choose it now</a>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>
            <section class="middle">
                <div class="wrapper">
                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('about_info') ):
                        $i =1;
                        // loop through the rows of data
                        while ( have_rows('about_info') ) : the_row();
                            $img = get_sub_field('image'); ?>

                            <div class="item item_<?= $i?>">
                                <div class="title"><?php the_sub_field('title'); ?></div>
                                <?php if (get_sub_field('position')=="left"){ ?>
                                    <div class="img left"><img src="<?= $img['url']; ?>"></div>
                                    <div class="text right"><?php the_sub_field('text'); ?></div>
                                    <?php
                                } else {
                                    ?>
                                    <div class="text left"><?php the_sub_field('text'); ?></div>
                                    <div class="img right"><img src="<?= $img['url']; ?>"></div>
                                    <?php
                                } ?>
                                <div class="clear"></div>
                            </div>

                            <?php
                        $i++;
                        endwhile;
                    endif;
                    ?>
                </div>
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

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();



