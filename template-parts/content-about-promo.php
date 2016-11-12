<?php
/**
 * Template part for displaying the about promo.
 *
 * @package KPT Support
 */

?>

<section class="section-with-bg section-padded about-promo">
	<div class="container row">
		<div class="twelve columns text-center mbn">
			<div class="section-with-bg-content">
				<h2 class="section-with-bg-title max-width-mini"><?php the_field('about_promo_title'); ?></h2>
				<a href="<?php the_field('about_promo_cta_url'); ?>" class="btn btn-key-light"><?php the_field('about_promo_cta_text'); ?></a>
			</div>
		</div>
	</div>
</section>