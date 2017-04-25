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
                    <a href="" >Choose it now</a>
                </div>
            </div>
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
            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
            <a href="">Click Here</a>
        </div>
        <div class="clear"></div>
    </section>





<?php get_footer();







