<?php
/**
 * Template part for displaying the quote block.
 *
 * @package KPT Support
 */

?>

<section class="section-padded-xl bg-secondary">
	<div class="container row">
		<div class="twelve columns mbn">
			<blockquote class="styled-quote max-width"><?php the_field('quote_text'); ?></blockquote>
		</div>
	</div>
</section>