<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @package KTP Support
 */

get_header();

	get_template_part( 'template-parts/content', 'default-hero' );
	get_template_part( 'template-parts/content', 'full-width' );

get_footer(); ?> 