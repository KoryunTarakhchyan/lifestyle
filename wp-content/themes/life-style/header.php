<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Life_Style
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta name="google-site-verification" content="Dw5C4ZLKQVVXB8J86uTxF4k2HZ0gmWmn91KaKMN8FQk" />
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="top">
			<div class="wrapper">
				<div class="logo">
					<a href="/">
						<img src="<?= get_template_directory_uri()?>/images/logo.png" alt="">
					</a>
				</div>
				<div class="social">
					<a target="_blank" href="https://www.instagram.com/realhustlelifestyle/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a target="_blank" href="https://www.facebook.com/realhustlelifestyle/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="bottom">
			<div class="wrapper">
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
