<?php
/*
Template name: Template "a_propos"
*/
?>
<?php get_header(); ?>

<!-- Fichiers CSS spécifiques -->
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--./src/css/reset.css">-->
<!--<link rel="stylesheet" href="--><?php //echo get_template_directory_uri(); ?><!--./src/css/a_propos.css">-->

<section class="about__me">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="about__me__title"><?php the_field('titile__apropos'); ?></h1>

        <section class="about__me__content">
            <div class="about__me__info">
            <h2 class="title" id="aboute__me__title">À propos de moi</h2>
            <p class="about__me__text"><?php the_field('description__apropos'); ?></p>
            </div>
                    <!-- Image d'introduction -->
                    <?php
                    $image = get_field('photo_profile');
                    // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

                    if ($image) :
                        ?>
                        <div class="photo_profile">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        </div>
                    <?php endif; ?>
                </div>
        </section>

        <div class="scroll__animation">
            <?php get_template_part('partials/logo/scroll'); ?>
        </div>

        <!-- Compétences -->
        <section class="competences__bloc">
            <h2 class="title" id="title__competence">Mes compétences</h2>
            <div class="competences">
                <?php $galerie = get_field('galerie__picture__competence'); ?>
                <?php if ($galerie) : ?>
                    <?php foreach ($galerie as $image) : ?>
                        <img class="image__competence" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </section>

        <!-- Parcours scolaire -->
        <section class="school">
            <h2 class="title" id="title__parcours__scolaire">Mon parcours scolaire</h2>
            <div class="school__info">
                <section class="bloc__scolaire" id="parcoursWeb">
                    <div class="info--school">
                    <h3 class="titile__parcours" id="title__web"><?php the_field('titile__parcous__web'); ?></h3>
                    <p><?php the_field('date__parcous__web'); ?></p>
                    <p><?php the_field('name__school__web'); ?></p>
                    </div>
                    <div class="description">
                        <p><?php the_field('descripiton__web'); ?></p>
                    </div>
                </section>

                <div class="school__arrow"></div>

                <section class="bloc__scolaire" id="parcoursArt">
                    <div class="info--school">
                    <h3 class="titile__parcours" id="title__art"><?php the_field('titile__parcous__art'); ?></h3>
                    <p><?php the_field('date__parcous__art'); ?></p>
                    <p><a href="https://www.programmes.uliege.be/cocoon/20252026/formations/bref/P1HISA01.html"><?php the_field('name__school__art'); ?></a></p>
                    </div>
                    <div class="description">
                    <p><?php the_field('description__school__art'); ?></p>
                    </div>
                </section>

                <div class="school__arrow"></div>

                <section class="bloc__scolaire" id="parcoursSecondary">
                    <div class="info--school">
                        <h3 class="titile__parcours" id="title__secondary"><?php the_field('name__school__secondary'); ?></h3>
                        <p><?php the_field('date__school__secondary'); ?></p>
                        <p><a href="https://arverdi.be/arvv"><?php the_field('link__school__secondary'); ?></a></p>
                    </div>
                    <div class="description">
                    <p><?php the_field('description__school__secondary'); ?></p>
                    </div>
                </section>
                <div class="school__arrow"></div>
            </div>
        </section>

        <!-- Passions -->
        <section class="passion__me">
            <div>
            <h2 class="title">Mes passions</h2>
            <p><?php the_field('description__passion'); ?></p>
            </div>

            <!-- Image d'introduction -->
            <?php
                $image_loisir = get_field('passion__image');
            // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers

            if ($image_loisir) :
                ?>
                <div class="passion__image">
                    <img src="<?php echo esc_url($image_loisir['url']); ?>" alt="<?php echo esc_attr($image_loisir['alt']); ?>">
                </div>
            <?php endif; ?>
        </section>

    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
