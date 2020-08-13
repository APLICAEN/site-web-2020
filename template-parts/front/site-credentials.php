<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("credentials_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="credentials-wrapper">
      <p>
        <?php echo get_theme_mod("credentials_desc"); ?>
      </p>
      <img src="<?php echo get_theme_mod("credentials_image"); ?>">
    </section>
  </div>
  <?php if(!get_theme_mod("credentials_cta_hide")) : ?>
  <div class="section-footer">
    <a href="<?php echo get_permalink(get_theme_mod("credentials_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="prestations-cta">
      <?php echo get_theme_mod("credentials_cta_text"); ?>
    </button>
    </a>
  </div>
<?php endif; ?>
</section>
