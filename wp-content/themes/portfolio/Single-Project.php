<?php
// single-projet.php – Template utilisé pour chaque projet individuel
get_header();

?>
<!---->
<!--<main class="projet-detaille">-->
<!--    --><?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--        <article class="bloc-projet">-->
<!--            <h1>--><?php //the_title(); ?><!--</h1>-->
<!---->
<!--            <h2>--><?php //the_field('sous_titre'); ?><!--</h2>-->
<!--            <!-- Image d'introduction -->-->
<!--            --><?php
//            $image_projets = get_field('image_projet');
//            // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers
//
//            if ($image_projets) :
//                ?>
<!--                <div class="image_projet">-->
<!--                    <img src="--><?php //echo esc_url($image_projets['url']); ?><!--" alt="--><?php //echo esc_attr($image_projets['alt']); ?><!--">-->
<!--                </div>-->
<!--            --><?php //endif; ?>
<!--            <div class="description">-->
<!--                --><?php //the_content(); ?>
<!--            </div>-->
<!--            <a href="--><?php //the_field('lien_site_final'); ?><!--" class="btn-decouvrir" target="_blank">Découvrir le projet</a>-->
<!--        </article>-->
<!--    --><?php //endwhile; endif; ?>
<!--</main>-->
<main class="projet-detaille">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="bloc-projet">
        <!-- Titre du projet -->
        <h1>Projetstitile__page</h1>

        <!-- Sous-titre du projet (ACF) -->
        <?php if ($sous_titre = get_field('sous_titre')) : ?>
            <h2><?php echo esc_html($sous_titre); ?></h2>
        <?php endif; ?>
        <!-- description du projet (ACF) -->
        <?php if ($sous_titre = get_field(' description__project')) : ?>
            <p><?php echo esc_html($sous_titre); ?></p>
        <?php endif; ?>

        <!-- Image du projet (ACF) -->
        <?php
        $image = get_field('image_du_projet');
        if ($image) :
            ?>
            <div class="image-projet">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            </div>
        <?php endif; ?>

        <!-- Description longue du projet (contenu principal) -->
        <div class="description-projet">
            <?php the_content(); ?>
        </div>

        <!-- Lien vers le site réel -->
        <?php if ($url = get_field('url_vers_site')) : ?>
            <a href="<?php echo esc_url($url); ?>" class="btn-decouvrir" target="_blank">
                Voir le projet en ligne
            </a>
        <?php endif; ?>
    </article>
<?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>


