<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the 'main' section, footer, and all content after.
 *
 * @package KPT Support
 */

?>	
	</main>
	<?php if(!is_page_template('holding-page.php')):?>
		<footer class="section-padded-sm section-padded-bottom-xs">
			<div class="container row text-center mb">
				<div class="twelve columns mbn">
					<?php
	    				if (! function_exists ( 'dynamic_sidebar' ) || ! dynamic_sidebar ( 'Social icons' )) :
					endif;?>
				</div>
			</div>
			<div class="container row text-center">
				<div class="twelve columns mbn">
					<p class="xs-text color-grey">&copy; <?php bloginfo('name'); ?> <?php the_time('Y'); ?> | Website by <a href="http://robhowells.co" target="_blank" class="xs-text color-grey underline-none">robhowells.co</a></p>
				</div>
			</div>
		</footer>
	<?php endif;
	wp_footer(); ?>
</body>
</html>