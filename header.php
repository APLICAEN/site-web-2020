<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta name="author" content="<?php bloginfo('author'); ?>">
  <title><?php the_title(); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/1.13.0/css/OverlayScrollbars.min.css" integrity="sha512-pYQcc5kgavar0ah58/O8hw/6Tbo3mWlmQTmvoi1i96cBz7jQYS9as5J+Nfy32rAHY6CgR9ExwnFMcBdGVcKM7g==" crossorigin="anonymous" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-branding">
      <?php if(has_custom_logo()) :
        the_custom_logo();
      else: ?>
      <a href="<?php bloginfo('url'); ?>">
        <?php bloginfo('name'); ?>
      </a>
    <?php endif; ?>
  </div>
  <nav class="navigation navigation-top desktop-navigation">
    <?php
    wp_nav_menu(
      array(
        'theme_location'  => 'primary',
        'container' => false
      )
    );
    ?>
  </nav>
  <nav class="navigation navigation-top mobile-navigation">
    <ul>
      <li class="mobile-menu"><i class="fa fa-bars fa-1x"></i>
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'menu_class'      => 'sub-navigation',
            'container'       => false
          )
        );
        ?>
      </li>
    </ul>
  </nav>
  <section class="call-to-action">
    <button type="button" class="btn-secondary-cta">Notre plaquette</button>
  </section>
</header>
<main class="site-content">