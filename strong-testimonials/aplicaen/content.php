<?php
/**
 * Template Name: Aplicaen
 * Description: Styles CSS spéciaux pour Aplicaen
 */

do_action( 'wpmtst_before_view' );
?>

<div class="section-content">
<section class="testimonials-wrapper">
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>
	<div class="card card-testimonial">
		<div class="card-content">
			<?php wpmtst_the_content(); ?>
		</div>
		<div class="card-footer">
			<?php wpmtst_the_thumbnail(); ?>
			<?php wpmtst_the_client(); ?>
		</div>
	</div>
<?php endwhile; ?>
</section>
</div>

<?php do_action( 'wpmtst_after_view' ); ?>
