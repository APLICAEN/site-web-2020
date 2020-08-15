<?php
// Disable Lazyblock plugin block frontend wrapper
add_filter( 'lazyblock/member-list/frontend_allow_wrapper', '__return_false' );
?>
<div class="section-content">
  <section class="recommended-wrapper">
    <?php foreach( $attributes['member-card'] as $member ): ?>
      <div class="card card-team-member">
        <div class="card-header">
          <?php
          if ( $member["member-picture"] ) {
            $picture_url = $member["member-picture"]["url"];
          } else {
            $picture_url = get_template_directory_uri() . '/assets/media/images/logo-dark-bg.png';
          }
          ?>
          <img src="<?php echo $picture_url; ?>" class="member-picture">
          <h5 class="member-name"><?php echo $member["member-name"]; ?></h5>
        </div>
        <div class="card-content">
          <p class="member-position">
            <?php echo $member["member-position"]; ?>
          </p>
        </div>
        <div class="card-footer">
          <?php $linkedin = $member["member-linkedin"]; if(!empty($linkedin)) { ?>
            <a href="<?php echo $linkedin; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() . '/assets/media/images/icon-linkedin.svg'; ?>"
              alt="LinkedIn">
            </a>
          <?php } ?>
          <?php $mail = $member["member-email"]; if(!empty($mail)) { ?>
            <a href="mailto:<?php echo $mail; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri() . '/assets/media/images/icon-mail.svg'; ?>"
              alt="Email">
            </a>
          <?php } ?>
        </div>
      </div>
    <?php endforeach; ?>
  </section>
</div>
