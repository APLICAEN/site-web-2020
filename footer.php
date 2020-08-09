</main>
<footer class="site-footer">
  <section class="site-section">
    <div class="section-header">
      <h2 class="section-title"><?php echo get_theme_mod("contact_title"); ?></h2>
    </div>
    <div class="section-collapsed-content-footer">
      <h6><?php echo get_theme_mod("contact_info_1"); ?></h6>
      <h6><?php echo get_theme_mod("contact_info_2"); ?></h6>
      <div class="collapsed-cta">
        <a href="<?php bloginfo("url"); echo '/' . get_page_uri(get_theme_mod("contact_cta_url")); ?>">
        <button type="button" class="section-cta"><?php echo get_theme_mod("contact_cta_text"); ?></button>
      </a>
      </div>
    </div>
  </section>
  <section class="widgets-wrapper">
    <section class="widget-section">
      <?php
        if(is_active_sidebar('widgets-section-1')) :
          dynamic_sidebar('widgets-section-1');
        endif;
       ?>
      <!-- <h6 class="widget-title">Nous trouver</h6>
      <div class="widget-content">
        <p>
          6 Boulevard Maréchal Juin 14000 Caen
          contact@aplicaen.fr
          00 00 00 00 00
          Du lundi au vendredi de
          9 h 30 à 18 h 00
        </p>
      </div> -->
    </section>
    <section class="widget-section">
      <?php
        if(is_active_sidebar('widgets-section-2')) :
          dynamic_sidebar('widgets-section-2');
        endif;
       ?>
    </section>
    <section class="widget-section">
      <?php
        if(is_active_sidebar('widgets-section-3')) :
          dynamic_sidebar('widgets-section-3');
        endif;
       ?>
    </section>
    <section class="widget-section">
      <?php
        if(is_active_sidebar('widgets-section-4')) :
          dynamic_sidebar('widgets-section-4');
        endif;
       ?>
      <!-- <h6 class="widget-title">Étudiants</h6>
      <div class="widget-content">
        <ul>
          <li>Devenir adhérent</li>
          <li>Devenir intervenant</li>
          <li>Devenir memebre administrateur</li>
        </ul>
        <button type="button" class="btn-secondary-cta">Espace adhérent</button>
      </div> -->
    </section>
  </section>
  <section class="social-links">
    <?php
    $social_networks = array("linkedin", "facebook", "instagram", "youtube", "twitter");
    $uri = get_template_directory_uri();
    foreach($social_networks as $network) {
      $id = "social_" . $network . "_url";
      $url = get_theme_mod($id);
      $url = isset($url) ? trim($url) : false;

      if(!empty($url)) {
        $html = '<a href="' . $url . '" target="_blank">
        <img src="' . $uri . '/assets/media/images/icon-' . $network . '.svg"
        alt="' . $network . '"></a>';
        echo $html;
      }
    }
    ?>
  </section>
  <section class="site-credits">
    <div class="site-branding">
      <?php if(has_custom_logo()) : the_custom_logo(); endif; ?>
      <!-- <a href="index.html"><img src="./assets/media/images/logo-dark.png" alt="Logo du site"></a> -->
    </div>
    <div class="site-copyright">
      <p>
        <?php
          echo get_theme_mod("credits_text") . ' ' . date("Y");
          echo ' ';
          bloginfo('name');
        ?>
      </p>
    </div>
    <div class="site-labels">
      <?php
        if(is_active_sidebar('widgets-section-5')) :
          dynamic_sidebar('widgets-section-5');
        endif;
       ?>
      <!-- <img src="./assets/media/images/logo-nf.svg" alt="NF Service">
      <img src="./assets/media/images/logo-afaq.svg" alt="Afaq"> -->
    </div>
  </section>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/js/OverlayScrollbars.min.js" integrity="sha512-5R3ngaUdvyhXkQkIqTf/k+Noq3phjmrqlUQyQYbgfI34Mzcx7vLIIYTy/K1VMHkL33T709kfh5y6R9Xy/Cbt7Q==" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri() . '/assets/scripts/main.js'?>" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>
