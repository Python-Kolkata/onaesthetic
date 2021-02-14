<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simple_blog
 */

get_header();
?>

<?php
		while ( have_posts() ) :
			the_post();
            remove_filter( 'the_content', 'wpautop');
            the_content();
           add_filter( 'the_content', 'wpautop');

			

		endwhile; // End of the loop.
		?>

<?php

get_footer();
