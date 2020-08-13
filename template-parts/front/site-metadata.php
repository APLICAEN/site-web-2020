<section class="site-metadata">
  <section class="metadata-info">
    <section class="metadata-general">
      <h2 class="metadata-name"><?php echo get_theme_mod("portrait_name"); ?></h2>
      <p class="metadata-description">
        <?php echo get_theme_mod("portrait_desc"); ?>
      </p>
    </section>
    <section class="metadata-statistics">
      <div class="statistic-wrapper">
        <h3 class="statistic-number"><?php echo get_theme_mod("portrait_statistic_number_1"); ?></h3>
        <p class="statistic-desc">
          <?php echo get_theme_mod("portrait_statistic_desc_1"); ?>
        </p>
      </div>
      <div class="statistic-wrapper">
        <h3 class="statistic-number"><?php echo get_theme_mod("portrait_statistic_number_2"); ?></h3>
        <p class="statistic-desc">
          <?php echo get_theme_mod("portrait_statistic_desc_2"); ?>
        </p>
      </div>
      <div class="statistic-wrapper">
        <h3 class="statistic-number"><?php echo get_theme_mod("portrait_statistic_number_3"); ?></h3>
        <p class="statistic-desc">
          <?php echo get_theme_mod("portrait_statistic_desc_3"); ?>
        </p>
      </div>
    </section>
  </section>
  <section class="metadata-cta">
    <ul class="cta-expertises">
      <li><?php echo get_theme_mod("portrait_expertise_1"); ?></li>
      <li><?php echo get_theme_mod("portrait_expertise_2"); ?></li>
      <li><?php echo get_theme_mod("portrait_expertise_3"); ?></li>
    </ul>
    <a href="<?php echo get_permalink(get_theme_mod("portrait_cta_url")); ?>"
      class="cta-link">
      <button type="button" class="cta-primary">
        <?php echo get_theme_mod("portrait_cta_text"); ?>
      </button>
    </a>
  </section>
</section>
