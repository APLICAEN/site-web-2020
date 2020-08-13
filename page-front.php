<?php
/* Template Name: Accueil */
get_header(); ?>
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
        <a href="<?php echo get_permalink(get_theme_mod("expertises_url_" . $i)); ?>"
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
              <a href="<?php echo get_permalink(get_theme_mod("expertises_url_" . $i)); ?>">
                <?php echo get_theme_mod("expertises_cta"); ?>
              </a>
            </div>
          </div>
        </a>
      </div>
    <?php } ?>
    </section>
  </div>
</section>
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
    <a href="<?php echo get_permalink(get_theme_mod("prestations_cta_url")); ?>"
      class="cta-link">
      <button type="button" class="prestations-cta">
        <?php echo get_theme_mod("prestations_cta_text"); ?>
      </button>
    </a>
  </div>
</section>
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
    <a href="<?php echo get_permalink(get_theme_mod("testimonials_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="prestations-cta"><?php echo get_theme_mod("testimonials_cta_text"); ?></button>
    </a>
  </div>
  <?php endif; ?>
</section>
<?php endif; ?>
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
    <a href="<?php echo get_permalink(get_theme_mod("team_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="section-cta"><?php echo get_theme_mod("team_cta_text"); ?></button>
    </a>
  </div>
</section>
<?php endif; ?>
<?php if(have_posts() && !get_theme_mod('news_hidden')) : ?>
<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("news_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="recommended-wrapper">
      <?php
        $blog_posts = get_posts(array('numberposts' => 3));
        foreach ($blog_posts as $post_key => $post) {
      ?>
      <article class="card card-recommended">
        <div class="recommended-header">
          <a href="<?php the_permalink(); ?>" class="card-link">
            <div class="recommended-thumbnail-wrapper">
              <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('post-thumbnail', ['class' => 'recommended-thumbnail']); ?>
              <?php endif; ?>
            </div>
          </a>
          <h6 class="recommended-publish-date"><?php echo get_the_date(); ?></h6>
          <a href="<?php the_permalink(); ?>" class="card-link">
            <h4 class="recommended-title"><?php the_title(); ?></h4>
          </a>
        </div>
        <div class="recommended-content">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php } unset($post);
    ?>
    </section>
  </div>
  <div class="section-footer">
    <a href="<?php echo get_permalink(get_theme_mod("news_cta_url")); ?>"
    class="cta-link">
    <button type="button"><?php echo get_theme_mod("news_cta_text"); ?></button>
    </a>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
