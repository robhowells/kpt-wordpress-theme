<?php
/**
 * Template Name: Contact page
 * Description: Page template with hero and content block.
 *
 * @package KPT Support
 */

get_header();

	get_template_part( 'template-parts/content', 'default-hero' );
	get_template_part( 'template-parts/content', 'contact-form' );

get_footer(); ?>