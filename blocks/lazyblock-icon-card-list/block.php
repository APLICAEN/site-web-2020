<?php

// Disable Lazyblock plugin block frontend wrapper
add_filter( 'lazyblock/icon-card-list/frontend_allow_wrapper', '__return_false' );
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
      <div class="card card-processus">
        <div class="card-header">
          <?php if($card["card-icon"]) : ?>
          <img src="<?php echo $card["card-icon"]["url"]; ?>" class="card-icon">
        <?php endif; ?>
          <h5 class="prestation-name"><?php echo $card["card-name"]; ?></h5>
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
