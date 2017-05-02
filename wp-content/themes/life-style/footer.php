<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Life_Style
 */

?>

	</div><!-- #content -->

	<footer  id="contact" class="site-footer" role="contentinfo">
		<section class="footer-form">
			<div class="wrapper">
				<div class="top">
					<div class="item">Email us your great ideas and earn</div>
					<div class="item">Products</div>
					<div class="item">I Have a Great Idea</div>
					<div class="item">Return & Shipping Issue</div>
				</div>
				<div class="bottom">
					<?= do_shortcode('[contact-form-7 id="14" title="Contact us"]');?>
				</div>
			</div>
		</section>
		<section class="footer-top">
			<img src="<?= get_template_directory_uri()?>/images/footer-top-menu-image.jpg" alt="">
		</section>
		<section class="footer-middle">
<!--			<img src="--><?//= get_template_directory_uri()?><!--/images/fotter-middle-image.jpg" alt="">-->
                <div class="box">
                    <div class="line">
                        <div class="logo"><img src="<?= get_template_directory_uri()?>/images/footer-logo.png" alt=""></div>
                        <div class="dash"></div>
                        <div class="other">
                            <div class="adress">
                                <img src="<?= get_template_directory_uri()?>/images/ic-address.png" alt="">
                            </div>
                            <div class="phone">
                                <img src="<?= get_template_directory_uri()?>/images/ic-phone.png" alt="">
                            </div>
                            <div class="emails">
                                <img src="<?= get_template_directory_uri()?>/images/ic-comp.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
		</section>
		<section class="copy-right">
			<div class="wrapper">
				<div class="left">© Copyright  Hustle Lifestyle Ltd. 2011 - 2017</div>
				<div class="right">
					<span class="title">Follow Us</span>
					<a target="_blank" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
<!--					<a target="_blank" href=""><i class="fa fa-snapchat-ghost" aria-hidden="true"></i></a>-->
				</div>
				<div class="clear"></div>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
