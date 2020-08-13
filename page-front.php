<?php
/* Template Name: Accueil */
get_header();

get_template_part( 'template-parts/front/site', 'metadata' );
get_template_part( 'template-parts/front/site', 'expertises' );
get_template_part( 'template-parts/front/site', 'services' );
get_template_part( 'template-parts/front/site', 'process' );
get_template_part( 'template-parts/front/site', 'credentials' );
get_template_part( 'template-parts/front/site', 'testimonials' );
get_template_part( 'template-parts/front/site', 'team' );
get_template_part( 'template-parts/front/site', 'news' );


get_footer(); ?>
