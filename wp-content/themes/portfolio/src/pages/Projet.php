<?php
/*
Template Name: Accueil
*/
get_header();
?>
<!doctype html>
<html lang="fr-be">
<head>
    <meta charset="UTF-8">
    <title>Projet</title>
    <meta name="description" content=" Premiers pages aceuille du projet portfolio fait avec woordpresse ">
    <meta name="keywords" content="portfolio, Projet-web, Julien, woordpresse, formation hepl"/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/portfolios-small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/portfolios-medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="../img/portfolios-big.png">
<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/projets.css">
    <title>Projets</title>
</head>
<body>
        <section class="galerie-projets">
            <h1>Projets</h1>

            <?php
            $projets = get_field('projets');

            if ($projets):
                // Séparation des projets
                $web = [];
                $graphique = [];

                foreach ($projets as $projet) {
                    if ($projet['categorie'] == 'Web') {
                        $web[] = $projet;
                    } elseif ($projet['categorie'] == 'Graphique 2D') {
                        $graphique[] = $projet;
                    }
                }
                ?>

                <h2>Développement WEB</h2>
                <div class="grille">
                    <?php foreach ($web as $projet): ?>
                        <div class="carte">
                            <h3><?= esc_html($projet['nom_projet']) ?></h3>
                            <p><?= esc_html($projet['description_projet']) ?></p>
                            <a href="<?= esc_url($projet['lien_projet']) ?>" class="bouton">Découvrir</a>
                        </div>
                    <?php endforeach; ?>
                </div>

                <h2>Créations Graphiques 2D</h2>
                <div class="grille">
                    <?php foreach ($graphique as $projet): ?>
                        <div class="carte">
                            <h3><?= esc_html($projet['nom_projet']) ?></h3>
                            <p><?= esc_html($projet['description_projet']) ?></p>
                            <!--<a href="<?= esc_url($projet['lien_projet']) ?>" class="bouton">Découvrir</a>-->
                            <a href="<?= get_permalink($projet['projet_objet']->ID) ?>">Découvrir</a>
                        </div>
                    <?php endforeach; ?>
                </div>

            <?php endif; ?>
    </section>
</body>
</html>
<?php
get_footer();
?>
