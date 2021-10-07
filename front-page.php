<?php

get_header();

if (have_posts() ):
    the_post();

    get_template_part('header', 'page');
    
endif;

$args = array(
    'post_type' => 'post',
);

$query = new WP_Query( $args );

if ( $query->have_posts() ):
    while ($query->have_posts() ):
        $query->the_post();

        get_template_part('loop', 'post');

    endwhile;
endif;
wp_reset_postdata();

get_footer();
