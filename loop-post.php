
        <p>le loop bidule post début</p>
    <article>
        <p><?php echo get_permalink(); ?></p>
        <h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_time( get_option( 'date_format' ) ); ?></div>
        <a href="<?php echo get_permalink(); ?>">
            <?php
                if ( has_post_thumbnail() ):
                    the_post_thumbnail( 'medium' );
                endif;
            ?>
        </a>
        <?php
    // Affichage des tags dans une liste
    the_terms( $post->ID, 'post_tag', '<ul><li>', '</li><li>', '</li></ul>' );

    // Affichage des catégories dans une liste
    the_terms( $post->ID, 'category', '<ul><li>', '</li><li>', '</li></ul>' );
    ?>
    </article>
    <p>le loop post fin</p>