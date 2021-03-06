<?php
/**
 * The template for displaying all single posts
 *
 * @package    WordPress
 * @subpackage Dntheme
 * @version 1.0
 */
get_header(); ?>

<?php
    while ( have_posts() ) : the_post();
        get_template_part( 'template-parts/content','single');
    endwhile;
?>

<?php get_footer();
