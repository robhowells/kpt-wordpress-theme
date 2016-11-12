<?php
/**
 * Template part for displaying the CTA block.
 *
 * @package KPT Support
 */

?>

<?php $cta_block_text = get_field('cta_block_text');

if( $cta_block_text ): ?>

	<section class="bg-primary section-padded">
		<div class="container row text-center">
			<div class="twelve columns mbn">
				<h3 class="color-white-default"><?php echo $cta_block_text; ?></h3>
				<a href="<?php the_field('cta_block_url'); ?>" class="btn btn-key-accent"><?php the_field('cta_block_url_text'); ?></a>
			</div>		
		</div>
	</section>

<?php endif; ?>