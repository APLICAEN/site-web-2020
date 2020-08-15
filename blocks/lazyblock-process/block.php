<?php

// Disable Lazyblock plugin block frontend wrapper
add_filter( 'lazyblock/process/frontend_allow_wrapper', '__return_false' );
get_template_part( 'template-parts/front/site', 'process' ); ?>
