<?php
/*
Template Name: Accueil
*/
?>

<?php get_header(); ?>
<!-- Test pour voir si le bon template est chargé -->
<!-- Ceci est le TEMPLATE ACCUEIL -->

<!-- Feuilles de style spécifiques à cette page -->
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/src/css/reset.css">-->
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--/src/css/accueil.css">-->

<section class="accueil">
    <h1>Portfolio</h1>
<!--    --><?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Image d'introduction -->
        <?php
        $imagelogo = get_field('image_intro');
       // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

        if ($imagelogo) :
            ?>
            <div class="image_intro">
                <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>">
            </div>
        <?php endif; ?>

        <!-- Titre principal -->
        <?php $titre = get_field('titre_accueil'); ?>
        <?php if ($titre): ?>
            <h2><?php echo esc_html($titre); ?></h2>
        <?php endif; ?>
        <!-- Texte d’introduction -->
        <?php $texte_intro = get_field('texte_intro'); ?>
        <?php if ($texte_intro): ?>
            <p class="intro"><?php echo wp_kses_post($texte_intro); ?></p>
        <?php endif; ?>
    <section>
        <h2>Dévelopement web</h2>
        <!-- Liste des projets (champ répéteur) -->
        <?php if (have_rows('projets_accueil')): ?>
            <section class="projets">
                <h2><?php the_field('titre_section_projets'); ?></h2>
                <div class="liste-projets">
                    <?php while (have_rows('projets_accueil')): the_row(); ?>
                        <div class="carte-projet">
                            <h3><?php the_sub_field('titre_projet'); ?></h3>
                            <p><?php the_sub_field('description_projet'); ?></p>
                            <a href="<?php echo esc_url(get_sub_field('url_projet')); ?>">
                                <?php the_sub_field('texte_bouton'); ?>
                            </a>
                        </div>
                    <?php endwhile; ?>
                </div>
            </section>
        <?php endif; ?>
    </section>

        <!-- Lien vers tous les projets -->
        <?php $lien = get_field('lien_bouton_projets'); ?>
        <?php if ($lien): ?>
            <a class="bouton-projets" href="<?php echo esc_url($lien); ?>">
                <?php the_field('texte_bouton_projets'); ?>
            </a>
        <?php endif; ?>

<!--    --><?php //endwhile; endif; ?>

</section>

<?php get_footer(); // Inclut le footer.php ?>
