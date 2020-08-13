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
    <?php } unset($post); ?>
    </section>
  </div>
  <div class="section-footer">
    <a href="<?php get_permalink(get_theme_mod("news_cta_url")); ?>"
    class="cta-link">
    <button type="button"><?php echo get_theme_mod("news_cta_text"); ?></button>
    </a>
  </div>
</section>
<?php endif; ?>
