<?php

function aplicaen_setup() {
  register_nav_menus(
    array(
      'primary' => 'Menu principal'
    )
  );

  add_theme_support('custom-logo');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'aplicaen_setup');

function aplicaen_init_widgets() {
  register_sidebar(
    array(
      'id'  => 'widgets-section-1',
      'name'  => 'Zone de widgets 1',
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
      'name'  => 'Zone de widgets 2',
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
      'name'  => 'Zone de widgets 3',
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
      'name'  => 'Zone de widgets 4',
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
      'name'  => 'Zone de widgets 5',
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

require get_template_directory() . '/inc/customizer.php';

 ?>
