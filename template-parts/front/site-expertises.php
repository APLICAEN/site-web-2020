<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("expertises_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="expertises-wrapper">
      <?php
      for($i = 1; $i <= 3; $i++) {
       ?>
      <div class="card card-expertise">
        <a href="<?php get_permalink(get_theme_mod("expertises_url_" . $i)); ?>"
          class="card-link">
          <div class="card-header">
            <h4 class="expertise-name"><?php echo get_theme_mod("expertises_name_" . $i); ?></h4>
          </div>
          <div class="card-content">
            <p class="expertise-desc">
              <?php echo get_theme_mod("expertises_desc_" . $i); ?>
            </p>
          </div>
          <div class="card-footer">
            <div class="expertise-cta">
              <a href="<?php get_permalink(get_theme_mod("expertises_url_" . $i)); ?>">
                <?php echo get_theme_mod("expertises_cta"); ?>
              </a>
            </div>
          </div>
        </a>
      </div>
    <?php } ?>
  </div>
</section>
