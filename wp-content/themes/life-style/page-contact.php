<?php
/**
 * Created by PhpStorm.
 * User: narek
 * Date: 13.05.2017
 * Time: 10:21
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
    <section class="footer-form">
        <div class="wrapper">
            <div class="bottom">
                <?= do_shortcode('[contact-form-7 id="14" title="Contact us"]');?>
            </div>
        </div>
    </section>
<?php get_footer();