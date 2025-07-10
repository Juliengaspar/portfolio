<?php /* Template name: Template "header"*/ ?>
<!DOCTYPE html>
<html lang="fr" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="icon" type="image/png" href="src/img/icone-portfolio-image.png">
    <meta name="keywords" content="portfolio, Projet-web, Julien, competence, formation hepl, "/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">
<!--    <link rel="stylesheet" type="text/css" href="src/css/reset.css"/>-->
<!--    <link rel="stylesheet" href="./src/css/header.css">-->
<!--    <script src="./src/js/main.js" type="module" defer></script>-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav class="nav__header">
        <ul class="redirections">
            <li class="redirection" id="accueil"><a href="<?php the_field('lien_accueil', 'option'); ?>">Accueil&nbsp;</a></li>
            <li class="redirection" id="projet"><a href="<?php the_field('lien_projet', 'option'); ?>">Projet&nbsp;</a></li>
            <li class="redirection" id="propos"><a href="<?php the_field('lien_a_propos', 'option'); ?>">propos&nbsp;</a></li>
            <li class="redirection" id="contact"><a href="<?php the_field('lien_contact', 'option'); ?>">Contact&nbsp;</a></li>
        </ul>
</nav>
</body>
</html>

