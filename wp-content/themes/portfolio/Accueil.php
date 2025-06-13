<?php
/*
Template Name: Accueil
*/
get_header(); // Inclut le header.php
?>

<!-- Test pour voir si le bon template est chargé -->
<!-- Ceci est le TEMPLATE ACCUEIL -->

<!-- Feuilles de style spécifiques à cette page -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/css/accueil.css">

<section class="accueil">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Titre principal -->
        <?php $titre = get_field('titre_accueil'); ?>
        <?php if ($titre): ?>
            <h1><?php echo esc_html($titre); ?></h1>
        <?php endif; ?>

        <!-- Image d'introduction -->
        <?php $img = get_field('image_intro'); ?>
        <?php if ($img): ?>
            <div class="image_intro">
                <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
            </div>
        <?php endif; ?>

        <!-- Texte d’introduction -->
        <?php $texte_intro = get_field('texte_intro'); ?>
        <?php if ($texte_intro): ?>
            <p class="intro"><?php echo wp_kses_post($texte_intro); ?></p>
        <?php endif; ?>

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

        <!-- Lien vers tous les projets -->
        <?php $lien = get_field('lien_bouton_projets'); ?>
        <?php if ($lien): ?>
            <a class="bouton-projets" href="<?php echo esc_url($lien); ?>">
                <?php the_field('texte_bouton_projets'); ?>
            </a>
        <?php endif; ?>

    <?php endwhile; endif; ?>

</section>

<?php get_footer(); // Inclut le footer.php ?>
