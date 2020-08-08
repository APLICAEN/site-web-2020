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
<?php get_footer(); ?>
