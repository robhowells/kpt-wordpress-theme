<?php
/**
 * Template part for displaying the packages info.
 *
 * @package KPT Support
 */

?>

<section class="section-padded bg-secondary">
	<div class="container row mb25 mbn-mobile">
		<div class="eight columns offset-by-two text-center">
			<h3 class="max-width-mini mb25"><?php the_field('packages_title'); ?></h3>
		</div>
	</div>

	<?php

		if( have_rows('package_items') ): ?>

			<div class="container row mb25 mbn-mobile">
				<div class="twelve columns mbn">
					<div class="panel-grid-wrapper max-width same-height-children-mobile">

						<?php while ( have_rows('package_items') ) : the_row(); 

							$package_title = get_sub_field('package_item_title');
							$package_content = get_sub_field('package_item_description'); ?>

							<div class="panel-grid-item one-quarter bg-white-default">
								<div class="panel-grid-content">
									<h5><?php echo $package_title; ?></h5>
									<ul class="block-list">
										<p class="panel-grid-content"><?php echo $package_content; ?></p>
									</ul>
								</div>
							</div>

						<?php endwhile; ?>

					</div><!-- .panel-grid-wrapper -->
				</div><!-- .twelve.columns -->
			</div><!-- .container -->

		<?php else :

	endif; ?>

</section>