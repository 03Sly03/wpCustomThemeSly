<?php

get_header();

$args = array(
    'post_type' => 'page',
    'pagename' => 'actus',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ):
    $query->the_post();

    get_template_part('header', 'page'); 
endif;

wp_reset_postdata();

if ( have_posts() ):
    while (have_posts()):
        the_post();
       
        get_template_part('loop', 'post');

    endwhile;
endif;

get_footer();