<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package KTP Support
 */

get_header(); ?>

	<section class="hero plain-primary">
		<div class="container row">
			<div class="twelve columns hero-content mbn">
				<h1 class="hero-title mbn">Page not found</h1>
			</div>
		</div>
	</section> 
	<section class="section-padded">
		<div class="container row mb25"> 
			<div class="eight columns mbn offset-by-two text-center">
				<div><p>Sorry, the page your're looking for couldn't be found.</p></div>
			</div>	
		</div>
		<div class="container row">
			<div class="twelve columns text-center">
				<a href="/" class="btn btn-key-accent">Go to homepage</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?> 