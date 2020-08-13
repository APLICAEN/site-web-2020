<?php if(!get_theme_mod('testimonials_hidden')) : ?>
<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("testimonials_title"); ?></h2>
  </div>
    <?php
    echo do_shortcode(get_theme_mod("testimonials_content"));
    if(get_theme_mod("testimonials_rating_show")) {
    	echo do_shortcode(get_theme_mod("testimonials_rating"));
    }
    ?>
    <?php if(!get_theme_mod("testimonials_cta_hide")) : ?>
  <div class="section-footer">
    <a href="<?php get_permalink(get_theme_mod("testimonials_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="prestations-cta"><?php echo get_theme_mod("testimonials_cta_text"); ?></button>
    </a>
  </div>
  <?php endif; ?>
</section>
<?php endif; ?>
