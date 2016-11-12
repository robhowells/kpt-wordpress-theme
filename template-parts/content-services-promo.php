<?php
/**
 * Template part for displaying the full services promo.
 *
 * @package KPT Support
 */

?>

<section class="section-padded">
	<div class="container row mb25">
		<div class="eight columns offset-by-two text-center mbn">
			<h3 class="max-width-mini mb25"><?php the_field('services_title'); ?></h3>
		</div>
	</div>

	<?php
		// check if the repeater field has rows of data
		if( have_rows('service_items') ):

			// loop through the rows of data
			// add a counter
			$count = 0;

			while ( have_rows('service_items') ) : the_row(); 

				$service_item_title = get_sub_field('service_item_title');
				$service_item_icon = get_sub_field('service_item_icon');

				if ($count % 3 == 0) { ?>
					<div class="container row mb25">
						<div class="twelve columns mbn">
							<div class="panel-grid-wrapper max-width">
				<?php } ?>
								<div class="panel-grid-item one-third">
									<div class="panel-grid-img icon-<?php echo $service_item_icon; ?>"></div>
									<div class="panel-grid-content">
										<h5><?php echo $service_item_title; ?></h5>
									</div>
								</div>

				<?php if ($count % 3 == 2) { ?>
							</div><!-- .panel-grid-wrapper -->
						</div><!-- .twelve.columns -->
					</div><!-- .container -->
				<?php }

				$count++;

			endwhile;

		else :
		// no rows found
		endif; 
	?>

</section> 

