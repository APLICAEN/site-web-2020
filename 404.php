<?php get_header(); ?>
  <section class="site-section error-404">
    <div class="section-header">
      <h2 class="section-title">Oops...</h2>
    </div>
    <div class="section-content">
      <p>La page que vous cherchez n'existe pas.</p>
    </div>
    <div class="section-footer">
      <a href="<?php bloginfo("url"); ?>"
      class="cta-link">
      <button type="button" class="prestations-cta">Retourner à l'accueil</button>
      </a>
    </div>
</section>
<?php get_footer(); ?>
