
<!DOCTYPE html>
<html lang="fr" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="icon" type="image/png" href="src/img/icone-portfolio-image.png">
    <meta name="keywords" content="portfolio, Projet-web, Julien, competence, formation hepl, "/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <meta name="theme-color" content="#fafafa">
    <link rel="stylesheet" type="text/css" href="src/css/reset.css"/>
    <link rel="stylesheet" href="./src/css/header.css">
<!--    <script src="./src/js/main.js" type="module" defer></script>-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="nav__header">
    <h1 class="title__page">Titre invisible</h1>
    <ul class="redirections">
        <li class="redirection"><a  href="<?php the_field('lien_accueil', 'option'); ?>"></a>Aceuille</li>
        <li class="redirection"><a  href="<?php the_field('lien_projet', 'option'); ?>"></a>Projet</li>
        <li class="redirection"><a  href="<?php the_field('lien_a_propos', 'option'); ?>"></a>Propos</li>
        <li class="redirection"><a href="<?php the_field('lien_contact', 'option'); ?>">Contact</a></li>
    </ul>
</nav>
</body>
</html>

