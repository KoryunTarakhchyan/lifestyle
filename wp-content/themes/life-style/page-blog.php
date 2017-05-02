<?php
/**
 * Created by PhpStorm.
 * User: narek
 * Date: 25.04.2017
 * Time: 22:55
 */
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <img src="<?= get_template_directory_uri()?>/images/UnderConstruction.png" alt="">

        </main><!-- #main -->
    </div><!-- #primary -->

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
            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
            <a href="">Click Here</a>
        </div>
        <div class="clear"></div>
    </section>
    <section class="instagram">

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
<?php get_footer();