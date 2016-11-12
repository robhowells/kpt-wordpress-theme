<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package KTP Support
 */

get_header();

	get_template_part( 'template-parts/content', 'default-hero' );
	get_template_part( 'template-parts/content', 'full-width' );

get_footer(); ?> 