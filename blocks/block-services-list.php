<?php
if(!empty(block_value( 'parent-page-url' ))) :
$page_id = url_to_postid(block_value( 'parent-page-url' ));
$children = get_pages(array('parent' => $page_id));
$nb_children = count($children);
if($nb_children > 0) : ?>
  <section class="site-section block-services-list">
    <div class="section-header">
      <h2 class="section-title"><?php echo block_value( 'section-title' ); ?></h2>
    </div>
    <div class="section-content">
      <section class="recommended-wrapper">
        <?php
        for($i = 0; $i < $nb_children; $i++) {
          $child = $children[$i];
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
        <?php } ?>
      </section>
    </div>
  </section>
<?php endif; endif; ?>
