<?php get_header(); ?>
<article class="entry">
  <div class="section-header entry-header full-width image-overlay-wrapper"
  style="background-image: url('<?php echo get_theme_mod('blog_bg_image'); ?>') ;">
    <h2 class="section-title entry-title"><?php echo get_theme_mod('blog_title'); ?></h2>
  </div>
</article>
<section class="site-section">
  <div class="section-content">
    <section class="recommended-wrapper">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <article class="card card-recommended">
        <div class="recommended-header">
          <a href="#" class="card-link">
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
    <?php endwhile; endif; ?>
    </section>
    <nav class="navigation pagination">
      <?php
      the_posts_pagination(
        array(
          'prev_text'          => '<i class="fas fa-arrow-left"></i> Précédent',
          'next_text'          => 'Suivant <i class="fas fa-arrow-right"></i>'
        )
      );
      ?>
    </nav>
  </div>
</section>
<?php get_footer(); ?>
