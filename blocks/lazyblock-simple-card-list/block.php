<?php

// Disable Lazyblock plugin block frontend wrapper
add_filter( 'lazyblock/simple-card-list/frontend_allow_wrapper', '__return_false' );
 ?>
<section class="site-section card-list">
  <?php if(!empty($attributes['section-title'])) : ?>
  <div class="section-header">
    <h2 class="section-title"><?php echo $attributes['section-title']; ?></h2>
  </div>
<?php endif; ?>
  <div class="section-content">
    <section class="processus-wrapper">
      <?php foreach( $attributes['card-list'] as $card ): ?>
      <div class="card card-processus card-simple">
        <div class="card-header">
          <h3 class="prestation-name"><?php echo $card["card-name"]; ?></h3>
        </div>
        <div class="card-content">
          <p class="expertise-desc">
            <?php echo $card["card-description"]; ?>
          </p>
        </div>
      </div>
  <?php endforeach; ?>
    </section>
  </div>
</section>
