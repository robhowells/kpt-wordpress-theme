<?php
/**
 * Template Name: Services page
 * Description: Page template with hero, full services block, packages content and cta block.
 *
 * @package KPT Support
 */
get_header();

	get_template_part( 'template-parts/content', 'default-hero' );
	get_template_part( 'template-parts/content', 'services-promo' );
	get_template_part( 'template-parts/content', 'packages' );
	get_template_part( 'template-parts/content', 'cta' );

get_footer(); ?>