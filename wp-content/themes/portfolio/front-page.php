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
            <h1 class="titile__page" id="accueil__portfolio">Portfolio</h1>
            <?php
            $imageballeAnimations = get_field('balle__tennis__de__tablle__animation');
            // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

            if ($imageballeAnimations) :
                ?>
                <div class="picture__balle">
                    <img src="<?php echo esc_url($imageballeAnimations['url']); ?>" alt="<?php echo esc_attr($imageballeAnimations['alt']); ?>" class="balle__img__animation">
                </div>
            <?php endif; ?>
    <section>
            <!-- Image d'introduction -->
            <!--            --><?php //if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <section class="acceuille__about__me">
        <!-- Image d'introduction -->
        <?php
        $imagelogo = get_field('image_intro');
       // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

        if ($imagelogo) :
            ?>
            <div class="logo-dore">
                <img src="<?php echo esc_url($imagelogo['url']); ?>" alt="<?php echo esc_attr($imagelogo['alt']); ?>" class="img__logo__dore">
            </div>
        <?php endif; ?>
                 <section class="about__me__text">
                     <!-- Titre principal -->
                     <?php $titre = get_field('titre_accueil'); ?>
                     <?php if ($titre): ?>
                         <h2 class="name__complet"><?php echo esc_html($titre); ?></h2>
                     <?php endif; ?>
                     <!-- Texte d’introduction -->
                     <p class="about__me"><?php the_field('texte_intro');?></p>
                 </section>
            </section>
    </section>
    <section class="projets-liste">
        <h2 class="projets__liste__titile">Développements WEB</h2>
        <!-- Liste des projets (champ répéteur) -->
        <?php if (have_rows('projets_accueil')): ?>
            <section class="projets">
                <h2><?php the_field('titre_section_projets'); ?></h2>
                <div class="liste-projets">
                    <?php while (have_rows('projets_accueil')): the_row(); ?>
                        <div class="carte-projet">
                            <h3 class="projet__title"><?php the_sub_field('titre_projet'); ?></h3>
                            <p class="projet__description"><?php the_sub_field('description_projet'); ?></p>
                            <a class="projet__liens" href="<?php echo esc_url(get_sub_field('url_projet')); ?>">
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

<section class="animation__metier">
    <h2></h2>

    <p class="metier" id="metier__web">
        <?php the_field("metiers__web") ?>&nbsp;
    </p>

    <p class="metier" id="metier__designer">
        <?php the_field("metiers__designer") ?>&nbsp;
    </p>
</section>

<?php get_footer(); // Inclut le footer.php ?>
