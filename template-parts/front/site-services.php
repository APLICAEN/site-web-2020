<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("prestations_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="prestations-wrapper">
      <section class="prestations-column">
        <?php
        for($i = 1; $i <= 3; $i++) {
          $slug = 'prestations_url_' . $i;
          $page_id = get_theme_mod($slug);
         ?>
        <div class="card card-prestation">
          <a href="<?php echo get_permalink($page_id); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_the_title($page_id); ?></h6>
          </a>
        </div>
      <?php } ?>
      </section>
      <section class="prestations-column">
        <?php
        for($i = 4; $i <= 7; $i++) {
          $slug = 'prestations_url_' . $i;
          $page_id = get_theme_mod($slug);
         ?>
        <div class="card card-prestation">
          <a href="<?php echo get_permalink($page_id); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_the_title($page_id); ?></h6>
          </a>
        </div>
      <?php } ?>
      </section>
      <section class="prestations-column">
        <?php
        for($i = 8; $i <= 10; $i++) {
          $slug = 'prestations_url_' . $i;
          $page_id = get_theme_mod($slug);
         ?>
        <div class="card card-prestation">
          <a href="<?php echo get_permalink($page_id); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_the_title($page_id); ?></h6>
          </a>
        </div>
      <?php } ?>
      </section>
    </section>
  </div>
  <div class="section-footer">
    <a href="<?php get_permalink(get_theme_mod("prestations_cta_url")); ?>"
      class="cta-link">
      <button type="button" class="prestations-cta">
        <?php echo get_theme_mod("prestations_cta_text"); ?>
      </button>
    </a>
  </div>
</section>
