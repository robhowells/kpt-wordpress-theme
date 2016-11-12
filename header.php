<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the start of the 'main' section.
 *
 * @package KTP Support
 */

?> 
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' |'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/touch.png" rel="apple-touch-icon-precomposed">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/apple-touch-icon.png">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.json">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/safari-pinned-tab.svg">
		<meta name="theme-color" content="#ffffff">
		<!--[if lt IE 9]>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.js"></script>
	        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    	<![endif]-->
		<?php 

		wp_head();

		$page_hero = get_field('hero_title');
		$page_hero_img = get_field('hero_img');
		$page_hero_img_tablet = get_field('hero_img_tablet');
		$page_hero_img_mobile = get_field('hero_img_mobile');

		$about_promo = get_field('about_promo_title');		
		$about_promo_img = get_field('about_promo_img');
		$about_promo_img_tablet = get_field('about_promo_img_tablet');
		$about_promo_img_mobile = get_field('about_promo_img_mobile');

		if($page_hero || $about_promo): ?>

			<style type="text/css">

				<?php if($page_hero): ?>

					.hero.with-bg {
						background-image:url(<?php echo $page_hero_img; ?>);
					}
					@media (max-width: 768px) {
				        .hero.with-bg {
			           		background-image:url(<?php echo $page_hero_img_tablet; ?>);
				        }
				    }
				    @media (max-width: 569px) {
				        .hero.with-bg {
			           		background-image:url(<?php echo $page_hero_img_mobile; ?>);
				        }
				    }

			    <?php endif;

			    if($about_promo): ?>

				    .about-promo {
						background-image:url(<?php echo $about_promo_img; ?>);
					}
					@media (max-width: 768px) {
				        .about-promo {
				            background-image:url(<?php echo $about_promo_img_tablet; ?>);
				        }
				    }
				    @media (max-width: 569px) {
				        .about-promo {
				            background-image:url(<?php echo $about_promo_img_mobile; ?>);
				        }
				    }
					

				<?php endif; ?>

			</style>

		<?php endif; 

		?>

	</head>
	<body>
	<?php if(!is_page_template('holding-page.php')):?>
		<header>
			<a title="Skip to content" href="#content" class="skip-link">Skip to content</a>
			<div class="container row mbn">
				<div class="five columns mbn">
					<a href="<?php echo home_url(); ?>" class="header-logo-link clearfix">
						<span class="header-logo-link-main">KPT</span>
						<span class="header-logo-link-sub">
							<span class="header-logo-link-sub-item">Business</span>
							<span class="header-logo-link-sub-item">Support</span>
						</span>
					</a>
					<a href="#" class="header-mobile-nav-toggle shown-on-mobile">
	                    <div class="header-mobile-nav-toggle-lines"></div>
	                    <span class="text-indent">Toggle menu</span>
	                </a>
				</div>
				<div class="seven columns mbn">
					<?php wp_nav_menu( array( 
						'theme_location' => 'primary',
						'container' => 'nav',
						'container_class' => 'header-nav',
						'menu_class' => 'inline-list'
					) ); ?>
				</div>
			</div>		
		</header>
	<?php endif; ?>
	<main id="content">