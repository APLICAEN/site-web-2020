<section class="site-metadata">
  <section class="metadata-info">
    <section class="metadata-general">
      <h2 class="metadata-name"><?php echo get_theme_mod("portrait_name"); ?></h2>
      <p class="metadata-description">
        <?php echo get_theme_mod("portrait_desc"); ?>
      </p>
    </section>
    <section class="metadata-statistics">
      <?php
      for($i = 1; $i <= 3; $i++) {
       ?>
      <div class="statistic-wrapper">
        <h3 class="statistic-number"><?php echo get_theme_mod("portrait_statistic_number_" . $i); ?></h3>
        <p class="statistic-desc">
          <?php echo get_theme_mod("portrait_statistic_desc_" . $i); ?>
        </p>
      </div>
    <?php } ?>
    </section>
  </section>
  <section class="metadata-cta">
    <ul class="cta-expertises">
      <li><?php echo get_theme_mod("portrait_expertise_1"); ?></li>
      <li><?php echo get_theme_mod("portrait_expertise_2"); ?></li>
      <li><?php echo get_theme_mod("portrait_expertise_3"); ?></li>
    </ul>
    <section class="metadata-statistics mobile-statistics">
      <?php
      for($i = 1; $i <= 3; $i++) {
       ?>
      <div class="statistic-wrapper">
        <h3 class="statistic-number"><?php echo get_theme_mod("portrait_statistic_number_" . $i); ?></h3>
        <p class="statistic-desc">
          <?php echo get_theme_mod("portrait_statistic_desc_" . $i); ?>
        </p>
      </div>
    <?php } ?>
    </section>
    <div class="cta-expertises-links">
    <a href="<?php echo get_permalink(get_theme_mod("portrait_cta_url")); ?>"
      class="cta-link">
      <button type="button" class="cta-primary">
        <?php echo get_theme_mod("portrait_cta_text"); ?>
      </button>
    </a>

    <section class="call-to-action mobile-cta">
      <a href="<?php echo wp_get_attachment_url(get_theme_mod("header_home_cta_file")); ?>"
      target="_blank" class="cta-link">
      <button type="button" class="btn-secondary-cta"><?php echo get_theme_mod("header_home_cta_text"); ?></button>
      </a>
    </section>
  </div>
  </section>

</section>
