<?php
/**
 * Displays header call to action
 */
?>

<section class="call-to-action">
	<?php if ( is_front_page() || is_home() ) : ?>
	<a href="<?php echo wp_get_attachment_url(get_theme_mod("header_home_cta_file")); ?>"
	target="_blank" class="cta-link">
	<button type="button" class="btn-secondary-cta"><?php echo get_theme_mod("header_home_cta_text"); ?></button>
	</a>
<?php else : ?>
	<a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("header_cta_url")); ?>">
	<button type="button"><?php echo get_theme_mod("header_cta_text"); ?></button>
	</a>
<?php endif; ?>
</section>
