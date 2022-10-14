<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sparkle-by-Roshan
 */

?>
<div class="qes">
	<div class="faq-1">
		<div class="question-1"><?php the_field("question", "opition") ?></div>
		<div class="answer-1"><?php the_field("answer", "opition") ?></div>
	</div>
	<button id="ft-btn" class="foot-button"><?php
											the_field("foot_button_text", "opition");
											?></button>
</div>
<?php $back = get_field("foot_background", "option") ?>
<div class="foot-top" style="background-image:url(<?php echo esc_url($back["url"]) ?>)">
	<div class="form">
		<?php echo do_shortcode('[contact-form-7 id="6" title="Contact form 1"]'); ?>
	</div>
</div>
<div class="foot-bottom">
	<div class="about-us">
		<div class="f-head"><?php the_field("about_us", "option"); ?></div>
		<p class="ab-content">
			<?php the_field("about_content", "option"); ?>
		</p>
	</div>
	<div class="about-us">
		<div class="f-head"><?php the_field("nav_foot", "option"); ?></div>
		<ul>
			<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
		</ul>
	</div>
	<div class="about-us">
		<div class="f-head"><?php the_field("contact_foot") ?></div>
		<ul>
			<li>
				<img src="<?php get_template_directory_uri() . '/images/loaction.svg' ?>" alt="loaction logo"><?php the_field("foot_location", "option") ?>
			</li>
			<li>
				<a href="Tel:<?php the_field("foot_phone", "option")  ?>">
					<img src="<?php get_template_directory_uri() . '/images/phone.svg' ?>" alt="loaction logo">
					<?php the_field("foot_phone", "option") ?>
				</a>
			</li>
			<li>
				<a href="mailto:<?php the_field("foot_mail", "option")  ?>">
					<img src="<?php get_template_directory_uri() . '/images/mail.svg' ?>" alt="loaction logo">
					<?php the_field("foot_mail", "option") ?>
				</a>
			</li>
		</ul>
	</div>
</div>
<footer>
	<div class="copy">
		<?php the_field("copy_text", "option") ?>
	</div>
	<ul class="social soc-footer">
		<?php if (have_rows('social_links', 'option')) : ?>
			<?php while (have_rows('social_links', 'option')) : the_row();
				$image = get_sub_field('platform_icon');
			?>
				<li><a target="_blank" href="<?php the_sub_field('profile_link') ?>">
						<img class="soc-icon" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></a></li>
			<?php endwhile; ?>
		<?php endif; ?>
	</ul>
</footer>
<?php wp_footer(); ?>

</body>

</html>