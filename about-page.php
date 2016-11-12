<?php
/**
 * Template Name: About page
 * Description: Page template with hero and content block.
 *
 * @package KPT Support
 */

get_header();

	get_template_part( 'template-parts/content', 'default-hero' );
	get_template_part( 'template-parts/content', 'with-image' );
	get_template_part( 'template-parts/content', 'quote' );
	get_template_part( 'template-parts/content', 'cta' );

get_footer(); ?>