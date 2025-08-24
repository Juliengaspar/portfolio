<?php
/*
Template Name: Projet_finaux
*/
get_header(); ?>

    <section class="projets-container">
        <h1 class="projets-titre">Projets</h1>
        <section class="categorie-section" id="categorie_web">
            <h2 class="categorie-titre">Développements WEB</h2>

            <!-- Debug temporaire -->


            <div class="cartes-projets">
                <?php
                if (have_rows('developpement__web')) :
                    while (have_rows('developpement__web')) : the_row();
                        $titreWeb = get_sub_field('titre__projet__web');
                        $descriptionWeb = get_sub_field('description__projet__web');
                        $lienWeb = get_sub_field('url__projet__web');
                        ?>
                        <section class="carte">
                            <h3 class="carte-titre"><?php echo esc_html($titreWeb); ?></h3>
                            <p class="carte-description"><?php echo wp_kses_post($descriptionWeb); ?></p>
                            <?php if ($lienWeb): ?>
                                <a class="carte-lien" href="<?php echo esc_url($lienWeb); ?>" target="_blank">Découvrir</a>
                            <?php else: ?>
                                <span class="carte-lien indisponible">Lien non disponible</span>
                            <?php endif; ?>
                        </section>
                    <?php endwhile;
                else : ?>
                    <p>Aucun projet Web trouvé.</p>
                <?php endif; ?>
            </div>
        </section>

        <section class="categorie-section" id="categorie-2d">
            <h2 class="categorie-titre">Créations Graphiques <span class="chiffre">2</span>D</h2>
            <div class="cartes-projets">
                <?php if (have_rows('Creations__Graphiques__2D')) :
                    while (have_rows('Creations__Graphiques__2D')) : the_row();
                        $titre2d = get_sub_field('titre_projet_2d');
                        $description2d = get_sub_field('description_projet_2d');
                        $lien2d = get_sub_field('url_projet_2d'); ?>
                        <section class="carte">
                            <h3 class="carte-titre"><?php echo esc_html($titre2d); ?></h3>
                            <p class="carte-description">
                                <?php echo wp_kses_post($description2d); ?>
                            </p>
                            <a class="carte-lien" href="<?php echo esc_url($lien2d); ?>" target="_blank">Découvrir</a>
                        </section>
                    <?php endwhile;
                endif; ?>
            </div>
        </section>
    </section>
    <div class="scroll__animation">
        <?php get_template_part('partials/logo/scroll'); ?>
    </div>

<?php get_footer(); ?>