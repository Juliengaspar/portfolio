<?php
/*
Template Name: Single-Project
*/
get_header();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content=" Premiers pages aceuille du projet portfolio fait avec woordpresse ">
    <meta name="keywords" content="portfolio, Projet-web, Julien, woordpresse, formation hepl"/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/portfolios-small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/portfolios-medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="../img/portfolios-big.png">
    <title>Single Project</title>
</head>
<body>
<section class="projet-detail">
    <h1>Projets></h1>
    <section>
    <h2><?php the_field('sous_titre'); ?></h2>

    <div class="contenu-projet">
        <div class="image">
            <?php
            $image = get_field('image_projet');
            if ($image) {
                echo wp_get_attachment_image($image, 'large');
            }
            ?>
        </div>

        <div class="texte">
            <p><?php the_field('texte_long'); ?></p>

            <!-- Boutons liens -->
            <div class="liens-projet">
                <?php
                $type = get_field('type_projet');
                $lien_site_final = get_field('lien_site_final');
                $lien_site_officiel = get_field('lien_site_officiel');

                if ($type === 'web') {
                    if ($lien_site_final) {
                        echo '<a class="btn" href="' . esc_url($lien_site_final) . '" target="_blank">Voir le site</a>';
                    }
                    if ($lien_site_officiel) {
                        echo '<a class="btn" href="' . esc_url($lien_site_officiel) . '" target="_blank">Site officiel</a>';
                    }
                } else {
                    echo '<p><em>Ce projet est une création graphique sans lien web.</em></p>';
                }
                ?>
            </div>
        </div>
    </div>

    <a href="/projets">← Retour aux projets</a>
    </section>
</section>


<?php get_footer(); ?>
</body>
</html>
