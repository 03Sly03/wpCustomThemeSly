<?php

echo "hello World commin qu'cha va !!!";

get_header();

echo "index debut";

the_archive_title( '<h1 class="page-title">', '</h1>' );

if ( have_posts() ):
    while (have_posts()):
        the_post();

        get_template_part('loop', 'post');

    endwhile;
endif;

echo "index fin";

get_footer();

?>