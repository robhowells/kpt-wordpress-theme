<?php
/**
 * Template Name: Holding page
 * Description: Page template maintenance messgae and without nav.
 *
 * @package KPT Support
 */

get_header(); ?>

	<section>
		<div class="container row" style="padding-top: 20%;">
			<div class="ten columns offset-by-one text-center">
				<h1><?php the_field('maintenance_title'); ?></h1>
				<p><?php the_field('maintenance_strapline'); ?></p>
			</div>
		</div>
	</section>

<?php get_footer(); ?>