<?php
/*
Template Name: Projets
*/
get_header();
?>
<section class="galerie-projets">
    <h1>Projets</h1>

    <section class="projets-web">
        <h2>Développement Web</h2>
        <?php
        $args_web = [
            'post_type' => 'project',
            'posts_per_page' => -1,
            'category_name' => 'web'
        ];
        $query_web = new WP_Query($args_web);
        if ($query_web->have_posts()) :
            while ($query_web->have_posts()) : $query_web->the_post(); ?>
                <div class="carte-projet">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_field('sous_titre'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-decouvrir">Découvrir</a>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>
    </section>
    <section>
        <h2>Créations Graphiques 2D</h2>
        <?php
        $args_2d = [
            'post_type' => 'project',
            'posts_per_page' => -1,
            'category_name' => '2d'
        ];
        $query_2d = new WP_Query($args_2d);
        if ($query_2d->have_posts()) :
            while ($query_2d->have_posts()) : $query_2d->the_post(); ?>
                <div class="carte-projet">
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_field('sous_titre'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn-decouvrir">Découvrir</a>
                </div>
            <?php endwhile; wp_reset_postdata(); endif; ?>

    </section>
</section>
<?php get_footer(); ?>
