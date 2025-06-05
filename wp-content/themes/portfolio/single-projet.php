<?php
/*
Template Name: Single-Project
*/
get_header();
?>
<div class="projet-detail">
    <h1>Projets></h1>
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
</div>


<?php get_footer(); ?>
