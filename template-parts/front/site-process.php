<section class="site-section hero-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("processus_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="processus-wrapper">
      <?php
      for($i = 1; $i <= 6; $i++) {
       ?>
      <div class="card card-processus">
        <div class="card-header">
          <img src="<?php echo get_theme_mod('processus_image_' . $i); ?>" class="card-icon">
          <h6 class="prestation-name"><?php echo get_theme_mod('processus_name_' . $i); ?></h6>
        </div>
        <div class="card-content">
          <p class="expertise-desc">
            <?php echo get_theme_mod('processus_desc_' . $i); ?>
          </p>
        </div>
      </div>
    <?php } ?>
    </section>
  </div>
</section>
