<?php
/**
 * Template part for displaying the main contact form fields.
 *
 * @package KPT Support
 */

?>

<section class="section-padded">
	<div class="container row">
		<div class="eight columns offset-by-two">
			<div class="form-row mb25">
				<p class="color-primary-variation-1 sm-text"><span class="color-error required-indicator">*</span> Required field</p>
			</div>
			<?php $contact_form = get_field('contact_form_shortcode');
			echo do_shortcode( "$contact_form" ); ?>
		</div>		
	</div>
</section>