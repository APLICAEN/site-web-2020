<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <article class="entry">
    <?php if(has_post_thumbnail()) : ?>
      <div class="section-header entry-header full-width image-overlay-wrapper"
      style="background-image: url('<?php the_post_thumbnail_url(); ?>') ;">
      <h2 class="section-title entry-title"><?php the_title(); ?></h2>
    </div>
  <?php else : ?>
    <h2 class="section-title entry-title solo"><?php the_title(); ?></h2>
  <?php endif; ?>
  <?php the_content(); ?>
</article>
<?php endwhile; endif; ?>
<!--  MODELE DE PAGE "expertise" seulement : sélection trois prestations -->
<section class="site-section">
  <div class="section-header">
    <h2 class="section-title">Nos prestations associées</h2>
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
          <a href="#" class="card-link">
            <h4 class="recommended-title">Rédaction de contenu</h4>
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
    <button type="button">Voir plus de prestations</button>
  </div>
</section>
<?php get_footer(); ?>
