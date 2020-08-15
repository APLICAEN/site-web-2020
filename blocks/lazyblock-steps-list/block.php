<?php

// Disable Lazyblock plugin block frontend wrapper
add_filter( 'lazyblock/steps-list/frontend_allow_wrapper', '__return_false' );
 ?>
<section class="site-section hero-section">
  <?php if(!empty($attributes['section-title'])) : ?>
  <div class="section-header">
    <h2 class="section-title"><?php echo $attributes['section-title']; ?></h2>
  </div>
<?php endif; ?>
  <div class="section-content">
    <section class="processus-wrapper">
      <?php $i = 0; foreach( $attributes['steps'] as $step ): ?>
      <div class="card card-processus">
        <div class="card-header">
          <div class="card-number">
            <span><?php echo ++$i; ?></span>
          </div>
          <h5 class="prestation-name"><?php echo $step["step-name"]; ?></h5>
        </div>
        <div class="card-content">
          <p class="expertise-desc">
            <?php echo $step["step-description"]; ?>
          </p>
        </div>
      </div>
  <?php endforeach; ?>
    </section>
  </div>
</section>
