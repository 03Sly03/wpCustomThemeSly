<?php

// page d'accueil


get_header();

echo "page d'accueil debut front-page";

if (have_posts() ):
    the_post();

    get_template_part('header', 'page');
    
endif;


$args = array(
    'post_type' => 'post',
);

// Exécution de la requête WP_Query
$query = new WP_Query( $args );

// Affichage du résultat de la requête WP_Query avec la boucle
if ( $query->have_posts() ):
    while ($query->have_posts() ):
        $query->the_post();

        get_template_part('loop', 'post');

    endwhile;
endif;
// Restauration des paramètres originaux de la requête de l'utilisateur
wp_reset_postdata();

echo "page d'accueil fin du front-page";

get_footer();
