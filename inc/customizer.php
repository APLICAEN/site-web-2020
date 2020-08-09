<?php

function aplicaen_customize_register_blog($wp_customize) {
  $wp_customize -> add_section(
    'section_blog',
    array(
      'title'         => 'Blog',
      'description'   => 'Options de personnalisation de la page d\'index des artciles.'
    )
  );

  $wp_customize->add_setting(
    'blog_bg_image',
    array(
      'default'     => get_template_directory_uri() .'/assets/media/images/info.jpg',
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'blog_bg_image',
      array (
        'label' => 'Image de fond',
        'section' => 'section_blog',
        'setting' => 'blog_bg_image'
      )
    )
  );

  $wp_customize->add_setting(
    'blog_title',
    array(
    'default'     => 'Actualités',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'blog_title',
    array(
      'label'          => 'Titre principal',
      'description'    => 'Texte du titre principal',
      'section'        => 'section_blog',
      'setting'        => 'blog_title',
      'type'           => 'text'
    )
  );
}

function aplicaen_customize_register_footer($wp_customize) {
  $wp_customize -> add_panel(
    'panel_footer',
    array(
      'title'         => 'Pied de page'
    )
  );
  $wp_customize -> add_section(
    'section_contact',
    array(
      'title'         => 'Contact',
      'description'   => 'Informations de contact de l\'association : téléphone, courriel...',
      'panel'         => 'panel_footer'
    )
  );

  $wp_customize->add_setting(
    'contact_title',
    array(
    'default'     => 'Nous contacter',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'contact_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_contact',
      'setting'        => 'contact_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'contact_info_1',
    array(
    'default'     => 'Tel : 00 00 00 00 00',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'contact_info_1',
    array(
      'label'          => 'Information 1',
      'description'    => 'Information de contact : téléphone par exemple.',
      'section'        => 'section_contact',
      'setting'        => 'contact_info_1',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'contact_info_2',
    array(
    'default'     => 'Mail : contact@aplicaen.fr',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'contact_info_2',
    array(
      'label'          => 'Information 2',
      'description'    => 'Information de contact : courriel par exemple.',
      'section'        => 'section_contact',
      'setting'        => 'contact_info_2',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'contact_cta_text',
    array(
    'default'     => 'Demander un devis',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'contact_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_contact',
      'setting'        => 'contact_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'contact_cta_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'contact_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page vers laquelle doit rediriger le bouton.',
      'section'        => 'section_contact',
      'setting'        => 'contact_cta_url',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize -> add_section(
    'section_social_links',
    array(
      'title'         => 'Réseaux sociaux',
      'description'   => 'Options de personnalisation des réseaux sociaux.
                          Pour ne pas afficher un réseau, laisser l\'URL vide.',
      'panel'         => 'panel_footer'
    )
  );

  $wp_customize->add_setting(
    'social_linkedin_url',
    array(
    'default'     => 'https://www.linkedin.com/company/aplicaen-junior/',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'social_linkedin_url',
    array(
      'label'          => 'LinkedIn',
      'description'    => 'Adresse URL du compte Aplicaen sur LinkedIn.',
      'section'        => 'section_social_links',
      'setting'        => 'social_linkedin_url',
      'type'           => 'url'
    )
  );

  $wp_customize->add_setting(
    'social_facebook_url',
    array(
    'default'     => 'https://www.facebook.com/Aplicaen/',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'social_facebook_url',
    array(
      'label'          => 'Facebook',
      'description'    => 'Adresse URL du compte Aplicaen sur Facebook.',
      'section'        => 'section_social_links',
      'setting'        => 'social_facebook_url',
      'type'           => 'url'
    )
  );

  $wp_customize->add_setting(
    'social_instagram_url',
    array(
    'default'     => 'https://www.instagram.com/aplicaen/',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'social_instagram_url',
    array(
      'label'          => 'Instagram',
      'description'    => 'Adresse URL du compte Aplicaen sur Instagram.',
      'section'        => 'section_social_links',
      'setting'        => 'social_instagram_url',
      'type'           => 'url'
    )
  );

  $wp_customize->add_setting(
    'social_youtube_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'social_youtube_url',
    array(
      'label'          => 'YouTube',
      'description'    => 'Adresse URL du compte Aplicaen sur YouTube.',
      'section'        => 'section_social_links',
      'setting'        => 'social_youtube_url',
      'type'           => 'url'
    )
  );

  $wp_customize->add_setting(
    'social_twitter_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'social_twitter_url',
    array(
      'label'          => 'Twitter',
      'description'    => 'Adresse URL du compte Aplicaen sur Twitter.',
      'section'        => 'section_social_links',
      'setting'        => 'social_twitter_url',
      'type'           => 'url'
    )
  );

  $wp_customize -> add_section(
    'section_credits',
    array(
      'title'         => 'Crédits',
      'description'   => 'Copyright, éditeur, mentions légales...
                          L\'année s\'incrémente automatiquement.
                          Elle est suivie du nom du site (section Identité du site). ',
      'panel'         => 'panel_footer'
    )
  );

  $wp_customize->add_setting(
    'credits_text',
    array(
    'default'     => '© Copyright',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'credits_text',
    array(
      'label'          => 'Texte',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_credits',
      'setting'        => 'credits_text',
      'type'           => 'text'
    )
  );

}

add_action('customize_register', 'aplicaen_customize_register_blog');
add_action('customize_register', 'aplicaen_customize_register_footer');

?>
