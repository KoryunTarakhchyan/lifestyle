<?php
/**
 * Created by PhpStorm.
 * User: narek
 * Date: 25.04.2017
 * Time: 22:55
 */
get_header(); ?>

    <?php


wp_nav_menu( array(
    'menu' => 'Blog Category Menu'
) );
?>

<?php get_footer();