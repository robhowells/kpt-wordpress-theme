<?php
/**
 * Template Name: Home page
 * Description: Page template with meag hero, mini services block, about block, quote block and cta block.
 *
 * @package KPT Support
 */

get_header();

	get_template_part( 'template-parts/content', 'mega-hero' );
	get_template_part( 'template-parts/content', 'services-promo' );
	get_template_part( 'template-parts/content', 'about-promo' );
	get_template_part( 'template-parts/content', 'quote' );
	get_template_part( 'template-parts/content', 'cta' );

get_footer(); ?>