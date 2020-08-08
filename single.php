<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <article class="entry">
    <?php if(has_post_thumbnail()) : ?>
      <div class="section-header entry-header full-width image-overlay-wrapper"
      style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
      <div class="entry-meta">
        <h2 class="section-title entry-title"><?php the_title(); ?></h2>
        <h5 class="recommended-publish-date"><?php echo get_the_date(); ?></h5>
      </div>
    </div>
  <?php else : ?>
    <div class="entry-meta">
      <h2 class="section-title entry-title solo"><?php the_title(); ?></h2>
      <h5 class="recommended-publish-date"><?php echo get_the_date(); ?></h5>
    </div>
  <?php endif; ?>
  <div class="entry-content">
    <?php the_content(); ?>
  </div>
  <footer class="entry-footer">
    <?php
    the_post_navigation(
      array(
        'prev_text'          => '<i class="fas fa-arrow-left"></i> Précédent : %title',
        'next_text'          => 'Suivant : %title <i class="fas fa-arrow-right"></i>'
      )
    );
    ?>
    <?php comments_template(); ?>
  </footer>
</article>
<?php endwhile; endif; ?>

<!-- WIDGET JETPACK  -->
<!-- <section class="site-section">
  <div class="section-header">
    <h2 class="section-title">Autres actualités</h2>
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
</section> -->
<?php get_footer(); ?>
