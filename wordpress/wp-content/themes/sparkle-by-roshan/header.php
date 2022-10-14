<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkle-by-Roshan
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div class="header">
		<div class="head-top-contain">
			<div class="head-top">
				<ul class="social">
					<?php if (have_rows('social_links', 'option')) : ?>
						<?php while (have_rows('social_links', 'option')) : the_row();
							$image = get_sub_field('platform_icon');
						?>
							<li><a target="_blank" href="<?php the_sub_field('profile_link') ?>">
									<img class="soc-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a></li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>

				<div class="contact">
					<?php
					$contact = get_field('contact_details', "option");
					if ($contact) : ?>
						<div class="media">
							<div class="label"><?php echo esc_html($contact["call_label"]) ?>:&nbsp;</div>
							<a href="Tel:<?php echo esc_attr($contact["contact_no"]) ?>" class="data"><?php echo esc_html($contact["contact_no"]) ?></a>
						</div>
						<div class="media">
							<div class="label"><?php echo esc_html($contact["email_label"]) ?>:&nbsp;</div>
							<a target="_blank" href="mailto:<?php echo esc_attr($contact["email_id"]) ?>" class="data"><?php echo esc_html($contact["email_id"]) ?></a>
						</div>
					<?php endif; ?>
				</div>
				<button id="appointment-pop"><?php echo the_field("appointment_button", "option") ?></button>
			</div>
		</div>
		<div class="head-bottom-contain">
			<nav class="navigation">
				<div class="hamburger">
					<div class="ham ham1"></div>
					<div class="ham ham2"></div>
					<div class="ham ham3"></div>
				</div>
				<?php $image = get_field("header_image", "option");
				?>
				<a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php echo esc_url($image["url"]) ?>" alt="<?php echo esc_attr($image["alt"]) ?>"></a>
				<?php
				wp_nav_menu(array('theme_location' => 'header-menu'));
				?>
				<div class="search-button">
					<img class="search-toggle" src="<?php echo get_template_directory_uri() . '/images/magnifier.svg' ?>" alt="" >
				</div>
			</nav>
			<div class="search-section -none-">
				<?php dynamic_sidebar("search-bar") ?>
			</div>
		</div>
		
	</div>
	<div class="banner">
		<?php $banner = get_field('banner_image', 'option'); ?>
		<img class="banner-img" src="<?php echo esc_url($banner["url"]) ?>" alt="<?php echo esc_attr($banner["alt"]); ?>" class="banner-img">
		<div class="banner-float">
			<?php if (is_front_page()) : ?>
				<div class="front-float">
					<div class="banner-text">
						<div class="line1">sparkle</div>
						<div class="line2">dental office</div>
					</div>
					<?php $image = get_field("banner_icon"); ?>
					<img src="<?php echo esc_url($image['url']) ?>" alt="<?php esc_url($image['alt']) ?>"">
				</div>
			<?php endif; ?>

		</div>
	</div>
	<!-- FOR IMAGE  -->