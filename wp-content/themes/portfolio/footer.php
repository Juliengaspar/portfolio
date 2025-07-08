<?php /* Template name: Template "footer"*/ ?>

<!DOCTYPE html>
<html lang="fr-be">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?= wp_title('·', false, 'right') . get_bloginfo('name') ?></title>
    <link rel="icon" type="image/png" href="src/img/icone-portfolio-image.png">
    <meta name="keywords" content="portfolio, Projet-web, Julien, competence, formation hepl, "/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#fafafa">
    <!-- <link rel="stylesheet" type="text/css" href="src/css/reset.css"/>
     <link rel="stylesheet" href="./src/css/footer.css">-->
<!--    <link rel="stylesheet" href="./src/css/reset.css">-->
<!--    <link rel="stylesheet" href="./src/css/footer.css">-->
    <!--    <script src="./src/js/main.js" type="module" defer></script>-->
    <?php wp_head(); ?>

</head>
<body>
<footer>
    <section class="footer__about">
        <?php
        $image = get_field('logo_footer');
        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

        if ($image) :
            ?>
            <div class="logo_footer">
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="logo-doré">
                <?php
                $image_logo = get_field('logo_footer');
                // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers
                ?>
            </div>

        <?php endif; ?>
        <section class="footer__title">
            <h2>Mon Portfolio</h2>
            <!--<p class="email">jgaspar@oginformatique.be</p>
            <p class="tel">+32 486 95 77 22 </p>-->
            <p><?php the_field('email_footer', 'option'); ?></p>
            <p><?php the_field('telephone_footer'); ?></p>
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
            <h2 class="contact_title">M’envoyer un message</h2>
            <!--<a href="src/pages/Contact.php" class="lien-contact">Contactez mois</a>-->
            <a href="<?php the_field('lien_bouton_footer', 'option'); ?>" class="lien-contact">
                <?php the_field('texte_bouton_footer', 'option'); ?>
            </a>
        </section>
    </section>
    <section class="copyright">
        <h2 class="copyright__title"><?php the_field('copyright_footer') ?></h2>
    </section>
</footer>
<?php wp_footer(); ?>
</body>
</html>