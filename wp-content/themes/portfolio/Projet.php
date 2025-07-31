<?php
/*
Template Name: Projet_finaux
*/
get_header(); ?>

    <div class="projets-container">
        <h1 class="projets-titre">Projets</h1>

        <section class="categorie-section">
            <h2 class="categorie-titre">Développements WEB</h2>
            <div class="cartes-projets">
                <?php if (have_rows('Developpement__Web')) :
                    while (have_rows('Developpement__Web')) : the_row();
                        $titre = get_sub_field('titre_projet_web');
                        $description = get_sub_field('description_projet_web');
                        $lien = get_sub_field('url_projet_web'); ?>
                        <div class="carte">
                            <h3 class="carte-titre"><?php echo esc_html($titre); ?></h3>
                            <p class="carte-description"><?php echo esc_html($description); ?></p>
                            <a class="carte-lien" href="<?php echo esc_url($lien); ?>" target="_blank">Découvrir</a>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </section>

        <section class="categorie-section">
            <h2 class="categorie-titre">Créations Graphiques 2D</h2>
            <div class="cartes-projets">
                <?php if (have_rows('Creations__Graphiques__2D')) :
                    while (have_rows('Creations__Graphiques__2D')) : the_row();
                        $titre = get_sub_field('titre_projet_2d');
                        $description = get_sub_field('description_projet_2d');
                        $lien = get_sub_field('url_projet_2d'); ?>
                        <div class="carte">
                            <h3 class="carte-titre"><?php echo esc_html($titre); ?></h3>
                            <p class="carte-description"><?php echo esc_html($description); ?></p>
                            <a class="carte-lien" href="<?php echo esc_url($lien); ?>" target="_blank">Découvrir</a>
                        </div>
                    <?php endwhile;
                endif; ?>
            </div>
        </section>
    </div>

<?php get_footer(); ?>