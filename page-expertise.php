<?php
/* Template Name: Expertise */
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
<section class="site-section">
  <div class="section-header">
    <h2 class="section-title"><?php echo get_theme_mod("expertise_page_related_title"); ?></h2>
  </div>
  <div class="section-content">
    <section class="recommended-wrapper">
      <?php
      $my_wp_query = new WP_Query();
      $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
      $children = get_page_children($post->ID, $all_wp_pages);
      $nb_children = count($children);
      if($nb_children > 0) {
        for($i = 0; $i < $nb_children && $i < 3; $i++) {
          $child_index = rand(0, $nb_children - 1);
          $child = $children[$child_index];
       ?>
      <article class="card card-recommended">
        <div class="recommended-header">
          <a href="<?php echo get_permalink($child->ID); ?>" class="card-link">
            <div class="recommended-thumbnail-wrapper">
              <?php if(has_post_thumbnail($child->ID)) :
                 echo get_the_post_thumbnail($child->ID, 'post-thumbnail', ['class' => 'recommended-thumbnail']);
              endif; ?>
            </div>
          </a>
          <a href="<?php echo get_permalink($child->ID); ?>" class="card-link">
            <h4 class="recommended-title"><?php echo get_the_title($child->ID); ?></h4>
          </a>
        </div>
        <div class="recommended-content">
          <?php echo get_the_excerpt($child->ID); ?>
        </div>
      </article>
    <?php } } ?>
    </section>
  </div>
  <div class="section-footer">
    <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("expertise_page_related_cta_url")); ?>"
    class="cta-link">
    <button type="button"><?php echo get_theme_mod("expertise_page_related_cta_text"); ?></button>
    </a>
  </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
