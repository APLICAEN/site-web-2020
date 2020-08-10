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
    'section_intranet',
    array(
      'title'         => 'Espace adhérent',
      'description'   => 'Redirection vers l\'espace adhérent pour les étudiants et administrateurs.',
      'panel'         => 'panel_footer'
    )
  );

  $wp_customize->add_setting(
    'intranet_cta_text',
    array(
    'default'     => 'Espace adhérent',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'intranet_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_intranet',
      'setting'        => 'intranet_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'intranet_cta_url',
    array(
      'default'     => 'http://vive.aplicaen.fr/connexion',
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'intranet_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page externe vers laquelle doit rediriger le bouton.',
      'section'        => 'section_intranet',
      'setting'        => 'intranet_cta_url',
      'type'           => 'url'
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

function aplicaen_customize_register_prestation($wp_customize, $id) {
  $wp_customize->add_setting(
    'prestations_name_' . $id,
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'prestations_name_' . $id,
    array(
      'label'          => 'Prestation ' . $id . ' - Nom',
      'description'    => 'Nom de la prestation.',
      'section'        => 'section_prestations',
      'setting'        => 'prestations_name_' . $id,
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'prestations_url_' . $id,
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'prestations_url_' . $id,
    array(
      'label'          => 'Prestation ' . $id . ' - Lien',
      'description'    => 'Page vers laquelle rediriger.',
      'section'        => 'section_prestations',
      'setting'        => 'prestations_url_' . $id,
      'type'           => 'dropdown-pages'
    )
  );
}

function aplicaen_customize_register_processus($wp_customize, $id) {

  $wp_customize->add_setting(
    'processus_image_' . $id,
    array(
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'processus_image_' . $id,
      array (
        'label' => 'Processus ' . $id . ' - Pictogramme',
        'section' => 'section_processus',
        'setting' => 'processus_image_' . $id
      )
    )
  );

  $wp_customize->add_setting(
    'processus_name_' . $id,
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'processus_name_' . $id,
    array(
      'label'          => 'Processus ' . $id . ' - Nom',
      'description'    => 'Nom de l\'étape.',
      'section'        => 'section_processus',
      'setting'        => 'processus_name_' . $id,
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'processus_desc_' . $id,
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'processus_desc_' . $id,
    array(
      'label'          => 'Processus ' . $id . ' - Description',
      'description'    => 'Description de l\'étape.',
      'section'        => 'section_processus',
      'setting'        => 'processus_desc_' . $id,
      'type'           => 'textarea'
    )
  );
}

function aplicaen_customize_register_homepage($wp_customize) {
  $wp_customize -> add_panel(
    'panel_homepage',
    array(
      'title'         => 'Accueil du site'
    )
  );

  $wp_customize -> add_section(
    'section_portrait',
    array(
      'title'         => 'Carte d\'identité',
      'description'   => 'Sélection d\'informations pour une présentation flatteuse de l\'association.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'portrait_name',
    array(
    'default'     => 'Aplicaen association d\'étudiants ingénieurs',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_name',
    array(
      'label'          => 'Accroche',
      'description'    => 'Exemple : Nom et slogan.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_name',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_desc',
    array(
    'default'     => 'Mobilise les étudiants-ingénieurs de l’ENSICAEN pour
    accompagner les entreprises, les centres de recherche et
    les entrepreneurs dans leurs projets des domaines : ',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_desc',
    array(
      'label'          => 'Présentation',
      'description'    => 'Courte présentation de l\'association.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_desc',
      'type'           => 'textarea'
    )
  );

  $wp_customize->add_setting(
    'portrait_expertise_1',
    array(
    'default'     => 'Électronique et Physique Appliquée',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_expertise_1',
    array(
      'label'          => 'Expertise 1',
      'description'    => 'Un domaine d\'expertise.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_expertise_1',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_expertise_2',
    array(
    'default'     => 'Informatique',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_expertise_2',
    array(
      'label'          => 'Expertise 2',
      'description'    => 'Un domaine d\'expertise.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_expertise_2',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_expertise_3',
    array(
    'default'     => 'Matériaux-Chimie',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_expertise_3',
    array(
      'label'          => 'Expertise 3',
      'description'    => 'Un domaine d\'expertise.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_expertise_3',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_statistic_number_1',
    array(
    'default'     => '8000',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_statistic_number_1',
    array(
      'label'          => 'Statistique 1 - Nombre',
      'description'    => 'Un chiffre à mettre en avant.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_statistic_number_1',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_statistic_desc_1',
    array(
    'default'     => 'diplômés dépuis 1976 pour nous conseiller',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_statistic_desc_1',
    array(
      'label'          => 'Statistique 1 - Description',
      'description'    => 'Description de la statistique.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_statistic_desc_1',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_statistic_number_2',
    array(
    'default'     => '750',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_statistic_number_2',
    array(
      'label'          => 'Statistique 2 - Nombre',
      'description'    => 'Un chiffre à mettre en avant.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_statistic_number_2',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_statistic_desc_2',
    array(
    'default'     => 'étudiants prêts à se mobiliser pour votre projet',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_statistic_desc_2',
    array(
      'label'          => 'Statistique 2 - Description',
      'description'    => 'Description de la statistique.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_statistic_desc_2',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_statistic_number_3',
    array(
    'default'     => '14',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_statistic_number_3',
    array(
      'label'          => 'Statistique 3 - Nombre',
      'description'    => 'Un chiffre à mettre en avant.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_statistic_number_3',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_statistic_desc_3',
    array(
    'default'     => 'ans d’expérience',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_statistic_desc_3',
    array(
      'label'          => 'Statistique 3 - Description',
      'description'    => 'Description de la statistique.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_statistic_desc_3',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_cta_text',
    array(
    'default'     => 'Demander un devis',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'portrait_cta_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'portrait_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page vers laquelle doit rediriger le bouton.',
      'section'        => 'section_portrait',
      'setting'        => 'portrait_cta_url',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize -> add_section(
    'section_expertises',
    array(
      'title'         => 'Expertises',
      'description'   => 'Présentation des domaines de compétences.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'expertises_title',
    array(
    'default'     => 'Nos expertises',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_cta',
    array(
      'default'     => 'En savoir plus',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_cta',
    array(
      'label'          => 'Appel à l\'action',
      'description'    => 'Texte des appels à l\'action des trois blocs d\'expertise.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_cta',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_name_1',
    array(
    'default'     => 'Informatique',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_name_1',
    array(
      'label'          => 'Expertise 1 - Nom',
      'description'    => 'Nom de l\'expertise.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_name_1',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_desc_1',
    array(
    'default'     => 'Nous offrons un large spectre de technologies de pointe : 
    développement web, mobile et logiciel, e-Paiement, cybersécurité et multimédia.',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_desc_1',
    array(
      'label'          => 'Expertise 1 - Description',
      'description'    => 'Description de l\'expertise.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_desc_1',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_url_1',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_url_1',
    array(
      'label'          => 'Expertise 1 - Lien',
      'description'    => 'Page vers laquelle rediriger.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_url_1',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize->add_setting(
    'expertises_name_2',
    array(
    'default'     => 'Électronique et Physique Appliquée',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_name_2',
    array(
      'label'          => 'Expertise 2 - Nom',
      'description'    => 'Nom de l\'expertise.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_name_2',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_desc_2',
    array(
    'default'     => 'Nos proposons des solutions innovantes pour l’ingénierie
    des capteurs, du numérique et de l’énergie.',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_desc_2',
    array(
      'label'          => 'Expertise 2 - Description',
      'description'    => 'Description de l\'expertise.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_desc_2',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_url_2',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_url_2',
    array(
      'label'          => 'Expertise 2 - Lien',
      'description'    => 'Page vers laquelle rediriger.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_url_2',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize->add_setting(
    'expertises_name_3',
    array(
    'default'     => 'Matériaux-Chimie',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_name_3',
    array(
      'label'          => 'Expertise 3 - Nom',
      'description'    => 'Nom de l\'expertise.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_name_3',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_desc_3',
    array(
    'default'     => 'Nous apportons des réponses aux enjeux sociétaux du 21e 
    siècle : défis énergétiques, développement durable ou santé.',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_desc_3',
    array(
      'label'          => 'Expertise 3 - Description',
      'description'    => 'Description de l\'expertise.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_desc_3',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'expertises_url_3',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'expertises_url_3',
    array(
      'label'          => 'Expertise 3 - Lien',
      'description'    => 'Page vers laquelle rediriger.',
      'section'        => 'section_expertises',
      'setting'        => 'expertises_url_3',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize -> add_section(
    'section_prestations',
    array(
      'title'         => 'Prestations',
      'description'   => 'Extrait de l\'offre de prestations.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'prestations_title',
    array(
    'default'     => 'Nos prestations',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'prestations_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_prestations',
      'setting'        => 'prestations_title',
      'type'           => 'text'
    )
  );

  for($i = 1; $i <= 10; $i++) {
    aplicaen_customize_register_prestation($wp_customize, $i);
  }

  $wp_customize->add_setting(
    'prestations_cta_text',
    array(
    'default'     => 'Toutes nos prestations',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'prestations_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_prestations',
      'setting'        => 'prestations_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'prestations_cta_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'prestations_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page vers laquelle doit rediriger le bouton.',
      'section'        => 'section_prestations',
      'setting'        => 'prestations_cta_url',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize -> add_section(
    'section_processus',
    array(
      'title'         => 'Processus',
      'description'   => 'Processus de gestion d\une étude en 6 étapes.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'processus_title',
    array(
    'default'     => 'Notre processus',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'processus_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_processus',
      'setting'        => 'processus_title',
      'type'           => 'text'
    )
  );

  for($i = 1; $i <= 6; $i++) {
    aplicaen_customize_register_processus($wp_customize, $i);
  }

  $wp_customize -> add_section(
    'section_credentials',
    array(
      'title'         => 'Références',
      'description'   => 'Sélection de partenaires et anciens clients pour la preuve sociale.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'credentials_title',
    array(
    'default'     => 'Nos références',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'credentials_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_credentials',
      'setting'        => 'credentials_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'credentials_desc',
    array(
    'default'     => 'Nous faire confiance, c\'est faire le même choix que nos
    anciens clients et partenaires.',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'credentials_desc',
    array(
      'label'          => 'Description',
      'description'    => 'Quelques mots d\'introduction.',
      'section'        => 'section_credentials',
      'setting'        => 'credentials_desc',
      'type'           => 'textarea'
    )
  );

  $wp_customize->add_setting(
    'credentials_image',
    array(
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'credentials_image',
      array (
        'label' => 'Image d\'illustration',
        'section' => 'section_credentials',
        'setting' => 'credentials_image'
      )
    )
  );

  $wp_customize->add_setting(
    'credentials_cta_text',
    array(
    'default'     => 'En savoir plus',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'credentials_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_credentials',
      'setting'        => 'credentials_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'credentials_cta_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'credentials_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page vers laquelle doit rediriger le bouton.',
      'section'        => 'section_credentials',
      'setting'        => 'credentials_cta_url',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize -> add_section(
    'section_testimonials',
    array(
      'title'         => 'Témoignages',
      'description'   => 'Sélection de témoignages de partenaires et clients pour la preuve sociale.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'testimonials_hidden',
    array(
    'default'     => false,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'testimonials_hidden',
    array(
      'label'          => 'Masquer cette section.',
      'description'    => 'Cocher cette case pour masquer cette section de la page.',
      'section'        => 'section_testimonials',
      'setting'        => 'testimonials_hidden',
      'type'           => 'checkbox'
    )
  );

  $wp_customize->add_setting(
    'testimonials_title',
    array(
    'default'     => 'Ils en parlent le mieux',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'testimonials_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_testimonials',
      'setting'        => 'testimonials_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'testimonials_cta_text',
    array(
    'default'     => 'Tous nos témoignages',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'testimonials_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_testimonials',
      'setting'        => 'testimonials_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'testimonials_cta_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'testimonials_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page vers laquelle doit rediriger le bouton.',
      'section'        => 'section_testimonials',
      'setting'        => 'testimonials_cta_url',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize -> add_section(
    'section_team',
    array(
      'title'         => 'Équipe',
      'description'   => 'Photo de groupe du mandat actuel.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'team_hidden',
    array(
    'default'     => false,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'team_hidden',
    array(
      'label'          => 'Masquer cette section.',
      'description'    => 'Cocher cette case pour masquer cette section de la page.',
      'section'        => 'section_team',
      'setting'        => 'team_hidden',
      'type'           => 'checkbox'
    )
  );

  $wp_customize->add_setting(
    'team_title',
    array(
    'default'     => 'Notre équipe',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'team_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_team',
      'setting'        => 'team_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'team_image',
    array(
      'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
      $wp_customize,
      'team_image',
      array (
        'label' => 'Image d\'illustration',
        'section' => 'section_team',
        'setting' => 'team_image'
      )
    )
  );

  $wp_customize->add_setting(
    'team_cta_text',
    array(
    'default'     => 'Nous connaître',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'team_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_team',
      'setting'        => 'team_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'team_cta_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'team_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page vers laquelle doit rediriger le bouton.',
      'section'        => 'section_team',
      'setting'        => 'team_cta_url',
      'type'           => 'dropdown-pages'
    )
  );

  $wp_customize -> add_section(
    'section_news',
    array(
      'title'         => 'Actualité',
      'description'   => 'Photo de groupe du mandat actuel.',
      'panel'         => 'panel_homepage'
    )
  );

  $wp_customize->add_setting(
    'news_hidden',
    array(
    'default'     => false,
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'news_hidden',
    array(
      'label'          => 'Masquer cette section.',
      'description'    => 'Cocher cette case pour masquer cette section de la page.',
      'section'        => 'section_news',
      'setting'        => 'news_hidden',
      'type'           => 'checkbox'
    )
  );

  $wp_customize->add_setting(
    'news_title',
    array(
    'default'     => 'Notre actualité',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'news_title',
    array(
      'label'          => 'Titre',
      'description'    => 'Titre de la section.',
      'section'        => 'section_news',
      'setting'        => 'news_title',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'news_cta_text',
    array(
    'default'     => 'Toute notre actualité',
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'news_cta_text',
    array(
      'label'          => 'Texte du bouton',
      'description'    => 'Texte à afficher.',
      'section'        => 'section_news',
      'setting'        => 'news_cta_text',
      'type'           => 'text'
    )
  );

  $wp_customize->add_setting(
    'news_cta_url',
    array(
    'type'        => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'news_cta_url',
    array(
      'label'          => 'Lien',
      'description'    => 'Page vers laquelle doit rediriger le bouton.',
      'section'        => 'section_news',
      'setting'        => 'news_cta_url',
      'type'           => 'dropdown-pages'
    )
  );

}

add_action('customize_register', 'aplicaen_customize_register_blog');
add_action('customize_register', 'aplicaen_customize_register_footer');
add_action('customize_register', 'aplicaen_customize_register_homepage');

?>
