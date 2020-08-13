<?php if(!get_theme_mod('team_hidden')) : ?>
<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("team_title"); ?></h2>
  </div>
  <div class="section-content full-width">
    <div class="image-overlay-wrapper"
    style="background-image: url('<?php echo get_theme_mod('team_image'); ?>') ;">
    </div>
  </div>
  <div class="section-footer">
    <a href="<?php get_permalink(get_theme_mod("team_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="section-cta"><?php echo get_theme_mod("team_cta_text"); ?></button>
    </a>
  </div>
</section>
<?php endif; ?>
