<?php
/* Template Name: Prestation */
get_header(); ?>
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
<?php
if($post->post_parent > 0) {
  $siblings = get_pages(array('parent' => $post->post_parent, 'sort_column' => 'rand', 'exclude' => array($post->ID)));
  $nb_siblings = count($siblings);
  if($nb_siblings > 0) { ?>
    <section class="site-section">
      <div class="section-header">
        <h2 class="section-title"><?php echo get_theme_mod("service_page_related_title"); ?></h2>
      </div>
      <div class="section-content">
        <section class="recommended-wrapper">
          <?php
          for($i = 0; $i < $nb_siblings && $i < 3; $i++) {
            $sibling = $siblings[$i];
            ?>
            <article class="card card-recommended">
              <div class="recommended-header">
                <a href="<?php echo get_permalink($sibling->ID); ?>" class="card-link">
                  <div class="recommended-thumbnail-wrapper">
                    <?php if(has_post_thumbnail($sibling->ID)) :
                      echo get_the_post_thumbnail($sibling->ID, 'post-thumbnail', ['class' => 'recommended-thumbnail']);
                    endif; ?>
                  </div>
                </a>
                <a href="<?php echo get_permalink($sibling->ID); ?>" class="card-link">
                  <h4 class="recommended-title"><?php echo get_the_title($sibling->ID); ?></h4>
                </a>
              </div>
              <div class="recommended-content">
                <?php echo get_the_excerpt($sibling->ID); ?>
              </div>
            </article>
          <?php } ?>
        </section>
      </div>
      <div class="section-footer">
        <a href="<?php echo get_permalink(get_theme_mod("service_page_related_cta_url")); ?>"
          class="cta-link">
          <button type="button"><?php echo get_theme_mod("service_page_related_cta_text"); ?></button>
        </a>
      </div>
    </section>
  <?php }}
get_footer(); ?>
