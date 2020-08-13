<?php

function aplicaen_setup() {
  register_nav_menus(
    array(
      'primary' => 'Menu principal'
    )
  );

  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
  add_post_type_support('page', array('excerpt'));
}

add_action('after_setup_theme', 'aplicaen_setup');

/**
 * Change the excerpt length
 */

function aplicaen_custom_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'aplicaen_custom_excerpt_length', 999 );

/**
 * Change the excerpt more string
 */
function aplicaen_custom_excerpt_more( $more ) {
    return "...";
}

add_filter( 'excerpt_more', 'aplicaen_custom_excerpt_more', 999);


function aplicaen_init_widgets() {
  register_sidebar(
    array(
      'id'  => 'widgets-section-1',
      'name'  => 'Widgets colonne 1',
      'description' => 'Utiliser cette zone de widgets pour afficher les
                        informations de contact de l\'association.',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h6 class="widget-title widgettitle">',
      'after_title' => '</h6>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-2',
      'name'  => 'Widgets colonne 2',
      'description' => 'Utiliser cette zone de widgets pour afficher des
                        informations sur l\'offre de prestations.',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h6 class="widget-title widgettitle">',
      'after_title' => '</h6>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-3',
      'name'  => 'Widgets colonne 3',
      'description' => 'Utiliser cette zone de widgets pour afficher des
                        informations annexes : RGPD, politique qualité,
                        mentions légales...',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h6 class="widget-title widgettitle">',
      'after_title' => '</h6>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-4',
      'name'  => 'Widgets colonne 4',
      'description' => 'Utiliser cette zone de widgets pour afficher les
                        informations utiles pour les étudiants et un lien vers
                        l\'espace adhérent.',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h6 class="widget-title widgettitle">',
      'after_title' => '</h6>'
    )
  );

  register_sidebar(
    array(
      'id'  => 'widgets-section-5',
      'name'  => 'Widgets pied de page',
      'description' => 'Utiliser cette zone de widgets pour afficher des
                        les labels de l\'association : CNJE, ISO 9001, NF Service...',
      'before_widget' => '',
      'after_widget'  => '',
      'before_title'  => '<h6 class="widget-title widgettitle">',
      'after_title' => '</h6>'
    )
  );
}

add_action('widgets_init', 'aplicaen_init_widgets');

require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/required-plugins.php';

 ?>
