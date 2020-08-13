<div class="card card-team-member">
  <div class="card-header">
    <?php
    $picture_id = block_value( 'member-picture' );
    $image_attributes = wp_get_attachment_image_src($picture_id, 'full');
    if ( $image_attributes ) {
      $picture_url = $image_attributes[0];
    } else {
      $picture_url = get_template_directory_uri() . '/assets/media/images/logo-dark-bg.png';
    }
    ?>
    <img src="<?php echo $picture_url; ?>" class="member-picture">
    <h5 class="member-name"><?php echo block_value( 'member-name' ); ?></h5>
  </div>
  <div class="card-content">
    <p class="member-position">
      <?php echo block_value( 'member-position' ); ?>
    </p>
  </div>
  <div class="card-footer">
  <?php $linkedin = block_value( 'member-linkedin' ); if(!empty($linkedin)) { ?>
    <a href="<?php echo $linkedin; ?>" target="_blank">
    <img src="<?php echo get_template_directory_uri() . '/assets/media/images/icon-linkedin.svg'; ?>"
    alt="LinkedIn">
    </a>
  <?php } ?>
  <?php $mail = block_value( 'member-email' ); if(!empty($mail)) { ?>
    <a href="<?php echo $mail; ?>" target="_blank">
    <img src="<?php echo get_template_directory_uri() . '/assets/media/images/icon-mail.svg'; ?>"
    alt="Email">
    </a>
  <?php } ?>
  </div>
</div>
