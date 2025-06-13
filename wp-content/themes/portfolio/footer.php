<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="utf-8">
    <!--    <title>--><?php //= wp_title('·', false, 'right') . get_bloginfo('name') ?><!--</title>--><?php //wp_head(); ?>
    <title>Portfolio</title>
    <link rel="icon" type="image/png" href="src/img/icone-portfolio-image.png">
    <meta name="keywords" content="portfolio, Projet-web, Julien, competence, formation hepl, "/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">
    <!-- <link rel="stylesheet" type="text/css" href="src/css/reset.css"/>
     <link rel="stylesheet" href="./src/css/footer.css">-->
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/footer.css">
    <!--    <script src="./src/js/main.js" type="module" defer></script>-->
</head>
<body>
<footer>
    <section class="footer__about">
        <!--<img  src="src/img/logo__doré.png" alt=" cercle doré en forme de G dans un J avec un cercle blanc entre les 2 forme Portfolion" class="logo-doré">-->
        <?php
        $logo = get_field('logo_footer', 'option');
        if ($logo): ?>
            <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo footer">
        <?php endif; ?>
        <section class="footer__title">
            <h2>Mon Portfolio</h2>
            <!--<p class="email">jgaspar@oginformatique.be</p>
            <p class="tel">+32 486 95 77 22 </p>-->
            <p><?php the_field('email_footer', 'option'); ?></p>
            <p><?php the_field('telephone_footer', 'option'); ?></p>
        </section>
        <section class="footer__navigations">
            <h2 class="navigation__title">Navigation</h2>
            <ul class="redirections">
                <li class="redirection"><a href="<?php echo get_permalink(get_page_by_path('Accueil')); ?>">Accueil</a></li>
                <li class="redirection"><a href="<?php echo get_permalink(get_page_by_path('Projet')); ?>">Projets</a></li>
                <li class="redirection"><a href="<?php echo get_permalink(get_page_by_path('A_Propos')); ?>">propos</a></li>
                <li class="redirection"><a href="<?php echo get_permalink(get_page_by_path('Contact')); ?>">Contact</a></li>
            </ul>
        </section>
        <section class="footer__title__contact">
            <h2 class="contact_title">M’envoyer Un message</h2>
            <!--<a href="src/pages/Contact.php" class="lien-contact">Contactez mois</a>-->
            <a href="<?php the_field('lien_bouton_footer', 'option'); ?>" class="lien-contact">Contactez mois
                <?php the_field('texte_bouton_footer', 'option'); ?>
            </a>
        </section>
    </section>
    <section class="copyright">
        <h2 class="copyright__title">Copyright Mon  CV  © 2024  C.V  | Contact | Vie  privée  </h2>
        <p><?php the_field('copyright_footer', 'option'); ?></p>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>