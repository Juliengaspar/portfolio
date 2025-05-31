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
    <title>Aceuilles</title>
    <meta name="description" content=" Premiers pages aceuille du projet portfolio fait avec woordpresse ">
    <meta name="keywords" content="portfolio, Projet-web, Julien, woordpresse, formation hepl"/>
    <meta name="author" content="Julien Gaspar"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/portfolios-small.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/portfolios-medium.png">
    <link rel="icon" type="image/png" sizes="162x162" href="../img/portfolios-big.png">
    <!-- <link rel="stylesheet" href="../css/reset.css">
     <link rel="stylesheet" href="../css/aceuille.css">-->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/Sample page.css">

</head>
<body>
<section class="acceuille">
   <!-- <h1 class="acceuille__titile">Portfolio</h1>-->
    <h1><?php the_field('titre_principal'); ?></h1>
    <div class="balle">
        <!--<img src="./src/img/balle-icone.png" alt="" id="balle" class="balle__img__animation">-->
        <?php
        $img = get_field('image_intro');
        if ($img): ?>
            <img src="<?php echo esc_url($img['url']); ?>" alt="Image intro">
        <?php endif; ?>
    </div>
    <section class="acceuille__about__me">
        <h2 class="name__complet">Julien Gaspar</h2>
        <p class="about__me"><!--Bienvenue sur mon portfolio !
            Parcourez-le en rebondissant d’un projet à l’autre pour découvrir mes réalisations et en apprendre un peu plus sur moi.-->
            <?php the_field('texte_intro'); ?>
        </p>
        <div  class="logo__JG">
            <img class="raquette__balle" src="src/img/raqquett-balle.png">
        </div>
    </section>

    <!--Liste projet web-->
    <section class="projets">
        <h2><?php the_field('titre_section_projets'); ?></h2>
        <div class="liste-projets">
            <?php if(have_rows('projets_accueil')): ?>
                <?php while(have_rows('projets_accueil')): the_row(); ?>
                    <div class="carte-projet">
                        <h3><?php the_sub_field('titre_projet'); ?></h3>
                        <p><?php the_sub_field('description_projet'); ?></p>
                        <a href="<?php the_sub_field('url_projet'); ?>">
                            <?php the_sub_field('texte_bouton'); ?>
                        </a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <a class="bouton-projets" href="<?php the_field('lien_bouton_projets'); ?>">
            <?php the_field('texte_bouton_projets'); ?>
        </a>
    <!--// logo-->

    <!--//mon metiers-->
    <section class="metiers">
        <?php if(have_rows('roles_repetable')): ?>
            <div class="roles">
                <?php while(have_rows('roles_repetable')): the_row(); ?>
                    <span><?php the_sub_field('role'); ?></span>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div>
            <img class="logo__dore" src="src/img/logo__noire__dore.png">
        </div>
        <h2 class="metier">WEB DEVELOPER UX UI Designer</h2>

        <button>Commencez le match</button>
    </section>
    <!--//animation metiers-->
    <section class="animation__metier">
        <h3>Metiers animation</h3>
        <div class="animations__text">
            <p class="animation__text">Web Développer</p>
            <p class="animation__text">UX IU Designer</p>
        </div>
    </section>
</section>
<!--// titre apropos de sois-->
</body>
</html>
<?php
 get_footer();
?>

