<?php /* Template name: Template "projet" */ ?>

<?php get_header(); ?>
<section class="galerie-projets">
    <h1>Projets</h1>

<!--    <section class="projets-web">-->
<!--        <h2>Développement Web</h2>-->
<!--        --><?php
//        $args_web = [
//            'post_type' => 'project',
//            'posts_per_page' => -1,
//            'category_name' => 'web'
//        ];
//        $query_web = new WP_Query($args_web);
//        if ($query_web->have_posts()) :
//            while ($query_web->have_posts()) : $query_web->the_post(); ?>
<!--                <div class="carte-projet">-->
<!--                    <h3>--><?php //the_title(); ?><!--</h3>-->
<!--                    <p>--><?php //the_field('sous_titre'); ?><!--</p>-->
<!--                    <a href="--><?php //the_permalink(); ?><!--" class="btn-decouvrir">Découvrir</a>-->
<!--                </div>-->
<!--            --><?php //endwhile; wp_reset_postdata(); endif; ?>
<!--    </section>-->
<!--    <section>-->
<!--        <h2>Créations Graphiques 2D</h2>-->
<!--        --><?php
//        $args_2d = [
//            'post_type' => 'project',
//            'posts_per_page' => -1,
//            'category_name' => '2d'
//        ];
//        $query_2d = new WP_Query($args_2d);
//        if ($query_2d->have_posts()) :
//            while ($query_2d->have_posts()) : $query_2d->the_post(); ?>
<!--                <div class="carte-projet">-->
<!--                    <h3>--><?php //the_title(); ?><!--</h3>-->
<!--                    <p>--><?php //the_field('sous_titre'); ?><!--</p>-->
<!--                    <a href="--><?php //the_permalink(); ?><!--" class="btn-decouvrir">Découvrir</a>-->
<!--                </div>-->
<!--            --><?php //endwhile; wp_reset_postdata(); endif; ?>
<!---->
<!--    </section>-->


<!--    --><?php //if( have_rows('tous_les_projets') ): ?>
<!--        <h2>Développement Web</h2>-->
<!--        --><?php //while( have_rows('tous_les_projets') ): the_row(); ?>
<!--            --><?php //if(get_sub_field('categorie_projet') === 'Développement Web'): ?>
<!--                <h3>--><?php //the_sub_field('tittle__project'); ?><!--</h3>-->
<!--                <p>--><?php //the_sub_field('description__project'); ?><!--</p>-->
<!--                <a href="--><?php //the_sub_field('url_projet'); ?><!--">Découvrir</a>-->
<!--            --><?php //endif; ?>
<!--        --><?php //endwhile; ?>
<!---->
<!--        <h2>Créations Graphiques 2D</h2>-->
<!--        --><?php //rewind_rows(); ?>
<!--        --><?php //while( have_rows('tous_les_projets') ): the_row(); ?>
<!--            --><?php //if(get_sub_field('categorie_projet') === 'Création Graphique 2D'): ?>
<!--                <h3>--><?php //the_sub_field('tittle__project'); ?><!--</h3>-->
<!--                <p>--><?php //the_sub_field('description__project'); ?><!--</p>-->
<!--                <a href="--><?php //the_sub_field('url_projet'); ?><!--">Découvrir</a>-->
<!--            --><?php //endif; ?>
<!--        --><?php //endwhile; ?>
<!--    --><?php //endif; ?>
<!---->
<!--    --><?php
//    $projets = new WP_Query(array(
//        'post_type' => 'projet',
//        'posts_per_page' => -1
//    ));
//    if($projets->have_posts()):
//        while($projets->have_posts()): $projets->the_post(); ?>
<!--            <h2>--><?php //the_title(); ?><!--</h2>-->
<!--            <p>--><?php //the_field('sous_titre'); ?><!--</p>-->
<!--            <a href="--><?php //the_permalink(); ?><!--">Découvrir</a>-->
<!--        --><?php //endwhile;
//        wp_reset_postdata();
//    endif;
//    ?>

    <?php
    $categories = ['Développement Web', 'Création Graphique 2D'];

    foreach ($categories as $categorie) :
        $args = [
            'post_type' => 'projet', // <--- Doit correspondre au nom dans functions.php
            'posts_per_page' => -1,
            'meta_query' => [
                [
                    'key' => 'categorie_projet',
                    'value' => $categorie,
                    'compare' => '='
                ]
            ]
        ];
        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <section class="bloc-categorie">
                <h2><em><?= $categorie ?></em></h2>
                <div class="cartes-container">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                        <div class="carte-projet">
                            <h3><?php the_field('title__project'); ?></h3> <!-- Corrigé -->
                            <p><?php the_field('description__project'); ?></p>
                            <a href="<?php the_field('url_projet'); ?>" class="btn-decouvrir">Découvrir 🌕</a> <!-- Corrigé -->
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>
        <?php endif;
        wp_reset_postdata();
    endforeach;
    ?>
    </section>

    <?php get_footer(); ?>
