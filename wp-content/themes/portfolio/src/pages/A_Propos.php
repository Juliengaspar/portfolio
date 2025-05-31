<?php
/*
Template Name: Accueil
*/
get_header();
?>
<!doctype html>
<html lang="fr-be">
<link rel="stylesheet" href="../css/a_propos.css">
<link rel="stylesheet" href="../css/reset.css">
<head>
    <title></title>
</head>
<body>
<section class="about__me">

    <!-- Titre principal -->
    <h1><?php the_field('titile__About__me'); ?></h1>
    <section class="about__me__content">
        <h2 class="title">A propos de moi</h2>
        <!--<p>
            Je m'appelle Julien Gaspar, &eacute;tudiant en deuxième ann&eacute;e de Techniques Infographiques, option Web à l’HEPL Seraing (Belgique).
            Passionn&eacute; de design et d&eacute;veloppement web, j’ai d&eacute;velopp&eacute; au fil de mes &eacute;tudes une maîtrise des dernières technologies et tendances, ainsi que des comp&eacute;tences solides pour concevoir des projets interactifs, esth&eacute;tiques et fonctionnels.
            Ma passion pour le tennis de table se reflète dans le design de mes page.
            À travers ce portfolio, je vous invite à d&eacute;couvrir mes r&eacute;alisations et mon &eacute;volution dans le domaine du web.
        </p>-->
        <?php the_field('text__about__me'); ?>
    </section>
         <!--<div class="about__me__image">
             <img src="./src/img/balle-ping-pong-transparant.png" alt="Photo de profil">
         </div>-->
    <div class="about__me__image">
        <?php
        $image = get_field('Picture_me');
        if ($image) {
            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr($image['alt']) . '" />';
        }
        ?>
    </div>
    <!-- Section Compétences -->
</section>
<section>
    <h2 class="title">Mes comp&eacute;tences</h2>
    <div class="competences">
        <?php
        $image_comp = get_field('compettence__galery');
        if ($image_comp) {
            echo '<img src="' . esc_url($image_comp['url']) . '" alt="' . esc_attr($image_comp['alt']) . '" />';
        }
        ?>
    </div>

</section>
<!-- Section Parcours scolaire -->
<section class="school">
    <h2 class="title school__path" >Mon parcours scolaire</h2>
    <section class="school__info">
        <div class="school__info" id="developement__web">
            <!--
            <h3>Bachelier en d&eacute;veloppement web</h3>
            <p>2022 -Aujourd’hui</p>
            <p>Haute École de la Province de liège</p>-->
            <div class="left school__left"><?php the_field('parcours_1_texte'); ?></div>
            <div class="right school__left"><?php the_field('parcours_1_details'); ?></div>
        </div>
        <div class="school__arrow"></div>
        <!--<div class="school__description">
            <p class="contenus__description">En 2022, j’ai choisi de me réorienter vers l’infographie, un domaine qui allie le numérique et l’art, deux univers qui me passionnent.
                Je suis actuellement étudiant en développement web à la HEPL. Ce bachelier me permet d’acquérir des compétences solides en programmation, design et gestion de projets web, me préparant ainsi à une carrière créative dans le secteur du digital.</p>
        </div>-->
        <div class="school__info" id="histoire_art__archeologie">
            <div class="left school__left"><?php the_field('parcours_2_texte'); ?></div>
            <div class="right school__left"><?php the_field('parcours_2_details'); ?></div>
        </div>
        <div class="school__info" id="transirtion__art">
            <div class="left school__left"><?php the_field('parcours_3_texte'); ?></div>
            <div class="right school__left"><?php the_field('parcours_3_details'); ?></div>
        </div>
    </section>
</section>
<!-- Section Centres d’intérêt -->
<section class="passion__me">
        <h2 class="title">Mes passions</h2>
    <!--<p>J’ai divers centres d’int&eacute;rêt ! Pendant mon temps libre, j’aime me d&eacute;tendre en cuisinant ou en peignant, une passion qui m’a d’ailleurs pouss&eacute; à &eacute;tudier l’histoire de l’art. Je pratique &eacute;galement le tennis de table et participe à des rencontres interclubs le week-end.</p>
    <img src="./src/img/tennis-table_icone.png" alt="" class="passion__me__img">-->
    <section class="passion__me">
        <h2 class="title">Mes passions</h2>
        <p>J&rsquo;ai divers centres d&rsquo;int&eacute;rêt ! Pendant mon temps libre, j&rsquo;aime me d&eacute;tendre en cuisinant ou en peignant, une passion qui m&rsquo;a d&rsquo;ailleurs pouss&eacute; à &eacute;tudier l&rsquo;histoire de l&rsquo;art. Je pratique &eacute;galement le tennis de table et participe à des rencontres interclubs le week-end.</p>
        <div class="passion__me__img">
            <?php
            $image_loisir = get_field('image_loisir');
            if ($image_loisir) {
                echo '<img src="' . esc_url($image_loisir['url']) . '" alt="' . esc_attr($image_loisir['alt']) . '"  class="passion__me__img" />';
            }
            ?>
        </div>
    </section>
</section>

<?php
get_footer();
?>
</body>
</html>