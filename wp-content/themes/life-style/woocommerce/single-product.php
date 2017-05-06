<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>
	<div class="clear"></div>
<!--	--><?php
//		/**
//		 * woocommerce_sidebar hook.
//		 *
//		 * @hooked woocommerce_get_sidebar - 10
//		 */
//		do_action( 'woocommerce_sidebar' );
//	?>



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
        <div class="title">#realhustlelifestyle</div>
        <?php echo do_shortcode('[instagram-feed]'); ?>

    </div>
</section>
<?php get_footer( 'shop' );?>
