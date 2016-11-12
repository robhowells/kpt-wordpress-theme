<?php
/**
 * Template part for displaying the content with image block.
 *
 * @package KPT Support
 */

?>

<section class="section-padded">
	<div class="container row"> 
		<div class="four columns">
			<div class="profile-img" style="background-image: url(<?php the_field('content_block_image'); ?>)"></div>
		</div>
		<div class="eight columns mbn">
			<div class="content-block-intro"><?php the_field('content_block_intro_content'); ?></div>
			<div><?php the_field('content_block_body_content'); ?></div>
		</div>	
	</div>
</section>