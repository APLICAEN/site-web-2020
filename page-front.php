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
    <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("portrait_cta_url")); ?>"
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
      <div class="card card-expertise">
        <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("expertises_url_1")); ?>"
          class="card-link">
          <div class="card-header">
            <h4 class="expertise-name"><?php echo get_theme_mod("expertises_name_1"); ?></h4>
          </div>
          <div class="card-content">
            <p class="expertise-desc">
              <?php echo get_theme_mod("expertises_desc_1"); ?>
            </p>
          </div>
          <div class="card-footer">
            <div class="expertise-cta">
              <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("expertises_url_1")); ?>">
                <?php echo get_theme_mod("expertises_cta"); ?>
              </a>
            </div>
          </div>
        </a>
      </div>
      <div class="card card-expertise">
        <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("expertises_url_2")); ?>"
          class="card-link">
          <div class="card-header">
            <h4 class="expertise-name"><?php echo get_theme_mod("expertises_name_2"); ?></h4>
          </div>
          <div class="card-content">
            <p class="expertise-desc">
              <?php echo get_theme_mod("expertises_desc_2"); ?>
            </p>
          </div>
          <div class="card-footer">
            <div class="expertise-cta">
              <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("expertises_url_2")); ?>">
                <?php echo get_theme_mod("expertises_cta"); ?>
              </a>
            </div>
          </div>
        </a>
      </div>
      <div class="card card-expertise">
        <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("expertises_url_3")); ?>"
          class="card-link">
          <div class="card-header">
            <h4 class="expertise-name"><?php echo get_theme_mod("expertises_name_3"); ?></h4>
          </div>
          <div class="card-content">
            <p class="expertise-desc">
              <?php echo get_theme_mod("expertises_desc_3"); ?>
            </p>
          </div>
          <div class="card-footer">
            <div class="expertise-cta">
              <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("expertises_url_3")); ?>">
                <?php echo get_theme_mod("expertises_cta"); ?>
              </a>
            </div>
          </div>
        </a>
      </div>
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
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_1")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_1"); ?></h6>
          </a>
        </div>
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_2")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_2"); ?></h6>
          </a>
        </div>
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_3")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_3"); ?></h6>
          </a>
        </div>
      </section>
      <section class="prestations-column">
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_4")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_4"); ?></h6>
          </a>
        </div>
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_5")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_5"); ?></h6>
          </a>
        </div>
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_6")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_6"); ?></h6>
          </a>
        </div>
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_7")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_7"); ?></h6>
          </a>
        </div>
      </section>
      <section class="prestations-column">
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_8")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_8"); ?></h6>
          </a>
        </div>
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_9")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_9"); ?></h6>
          </a>
        </div>
        <div class="card card-prestation">
          <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_url_10")); ?>"
            class="card-link">
            <h6 class="prestation-name"><?php echo get_theme_mod("prestations_name_10"); ?></h6>
          </a>
        </div>
      </section>
    </section>
  </div>
  <div class="section-footer">
    <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("prestations_cta_url")); ?>"
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
  <div class="section-footer">
    <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("credentials_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="prestations-cta">
      <?php echo get_theme_mod("credentials_cta_text"); ?>
    </button>
    </a>
  </div>
</section>
<?php if(!get_theme_mod('testimonials_hidden')) : ?>
<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("testimonials_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="testimonials-wrapper">
      <div class="card card-testimonial">
        <div class="card-content">
          <p class="expertise-desc">
            Réactifs et dynamiques, les membres d’APLICAEN sauront répondre
            avec professionnalisme et pertinence à vos besoins en mettant
            à profit la formation dont ils bénéficient à l’ENSICAEN.
          </p>
        </div>
        <div class="card-footer">
          <img src="./assets/media/images/info.jpg" alt="Partenaires" class="author-picture">
          <p class="author-name">J.F. Hamet</p>
          <p class="author-position">Directeur ENSICAEN</p>
        </div>
      </div>
      <div class="card card-testimonial">
        <div class="card-content">
          <p class="expertise-desc">
            Réactifs et dynamiques, les membres d’APLICAEN sauront répondre
            avec professionnalisme et pertinence à vos besoins en mettant
            à profit la formation dont ils bénéficient à l’ENSICAEN.
          </p>
        </div>
        <div class="card-footer">
          <img src="./assets/media/images/info.jpg" alt="Partenaires" class="author-picture">
          <p class="author-name">J.F. Hamet</p>
          <p class="author-position">Directeur ENSICAEN</p>
        </div>
      </div>
      <div class="card card-testimonial">
        <div class="card-content">
          <p class="expertise-desc">
            Réactifs et dynamiques, les membres d’APLICAEN sauront répondre
            avec professionnalisme et pertinence.
          </p>
        </div>
        <div class="card-footer">
          <img src="./assets/media/images/info.jpg" alt="Partenaires" class="author-picture">
          <p class="author-name">J.F. Hamet</p>
          <p class="author-position">Directeur ENSICAEN</p>
        </div>
      </div>
    </section>
  </div>
  <div class="section-footer">
    <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("testimonials_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="prestations-cta"><?php echo get_theme_mod("testimonials_cta_text"); ?></button>
    </a>
  </div>
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
    <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("testimonials_cta_url")); ?>"
    class="cta-link">
    <button type="button" class="section-cta"><?php echo get_theme_mod("team_cta_text"); ?></button>
    </a>
  </div>
</section>
<?php endif; ?>
<?php if(!get_theme_mod('news_hidden')) : ?>
<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("news_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="recommended-wrapper">
      <article class="card card-recommended">
        <div class="recommended-header">
          <a href="#" class="card-link">
            <div class="recommended-thumbnail-wrapper">
              <img src="./assets/media/images/info.jpg" alt="Icon startup" class="recommended-thumbnail">
            </div>
          </a>
          <h6 class="recommended-publish-date">25/03/2020</h6>
          <a href="#" class="card-link">
            <h4 class="recommended-title">5 bonnes raisons de faire appel à une JE</h4>
          </a>
        </div>
        <div class="recommended-content">
          <p>
            culpa dolore pariatur quis consequat ex deserunt cupidatat.
            Aute do cillum laborum ut occaecat. Officia
          </p>
        </div>
      </article>
      <article class="card card-recommended">
        <div class="recommended-header">
          <a href="#" class="card-link">
            <div class="recommended-thumbnail-wrapper">
              <img src="./assets/media/images/info.jpg" alt="Icon startup" class="recommended-thumbnail">
            </div>
          </a>
          <h6 class="recommended-publish-date">25/03/2020</h6>
          <a href="#">
            <h4 class="recommended-title">5 bonnes raisons de faire appel à une JE</h4>
          </a>
        </div>
        <div class="recommended-content">
          <p>
            culpa dolore pariatur quis consequat ex deserunt cupidatat.
            Aute do cillum laborum ut occaecat. Officia
          </p>
        </div>
      </article>
      <article class="card card-recommended">
        <div class="recommended-header">
          <a href="#" class="card-link">
            <div class="recommended-thumbnail-wrapper">
              <img src="./assets/media/images/info.jpg" alt="Icon startup" class="recommended-thumbnail">
            </div>
          </a>
          <h6 class="recommended-publish-date">25/03/2020</h6>
          <a href="#">
            <h4 class="recommended-title">5 bonnes raisons de faire appel à une JE</h4>
          </a>
        </div>
        <div class="recommended-content">
          <p>
            culpa dolore pariatur quis consequat ex deserunt cupidatat.
            Aute do cillum laborum ut occaecat. Officia
          </p>
        </div>
      </article>
    </section>
  </div>
  <div class="section-footer">
    <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("news_cta_url")); ?>"
    class="cta-link">
    <button type="button"><?php echo get_theme_mod("news_cta_text"); ?></button>
    </a>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
