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
			<div class="wrapper-medium">
				<div class="left">
					<div class="item">
						<div class="title">Learn It</div>
						<a href="">About Us</a>
						<a href="">About Our T-Shirts</a>
						<a href="">About Return</a>
					</div>
					<div class="item">
						<div class="title">Do It</div>
						<a href="">Submit Your Ideas</a>
						<a href="">Buy It As a Gift</a>
					</div>
				</div>
				<div class="right">
					<img src="<?= get_template_directory_uri()?>/images/paypal_footer.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
		</section>
		<section class="footer-middle">
			<div class="left"></div>
			<div class="right"></div>
			<div class="box-left">
				<img src="<?= get_template_directory_uri()?>/images/footer-logo.png" alt="">
			</div>
			<div class="box-right">
				<div class="item">
					<div class="icon"><img src="<?= get_template_directory_uri()?>/images/ic-address.png" alt=""></div>
					<span>
						<div class="text">2639 Victoria Park Ave,<br>Toronto, Ontario</div>
					</span>
				</div>
				<div class="item">
					<div class="icon"><img src="<?= get_template_directory_uri()?>/images/ic-phone.png" alt=""></div>
					<span>
						<div class="text">
							+1-416-615-4527
						</div>
						<div class="text">
							+1-613-555-0136
						</div>
					</span>
				</div>
				<div class="item">
					<div class="icon"><img src="<?= get_template_directory_uri()?>/images/ic-comp.png" alt=""></div>
					<span>
						<div class="text">
							<a href="http://www.HustleLife.Style" target="_blank">www.HustleLife.Style</a>
						</div>
						<div class="text">
							<a href="mailto:John@hustlelife.style" target="_blank">John@hustlelife.style</a>
						</div>
					</span>
				</div>
			</div>
			<div class="clear"></div>
		</section>
		<section class="copy-right">
			<div class="wrapper">
				<div class="left">© Copyright  Hustle Lifestyle Ltd. 2011 - 2017</div>
				<div class="right">
					<span class="title">Follow Us</span>
					<a target="_blank" href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a target="_blank" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
				<div class="clear"></div>
			</div>
		</section>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
