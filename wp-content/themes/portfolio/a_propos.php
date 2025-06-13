<?php
/*
Template Name: a_propos
*/
get_header();
?>

<!-- Fichiers CSS spécifiques -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./src/css/reset.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>./src/css/a_propos.css">

<section class="about__me">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_field('titile__apropos'); ?></h1>

        <section class="about__me__content">
            <h2 class="title">À propos de moi</h2>
            <p class="about__me__text"><?php the_field('description__apropos'); ?></p>
        </section>

        <div class="about__me__image">
            <?php $image = get_field('photo_profile'); ?>
            <?php if ($image) : ?>
                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        </div>

        <!-- Compétences -->
        <section>
            <h2 class="title">Mes compétences</h2>
            <div class="competences">
                <?php $image_comp = get_field('galerie__picture__competence'); ?>
                <?php if ($image_comp) : ?>
                    <img src="<?php echo esc_url($image_comp['url']); ?>" alt="<?php echo esc_attr($image_comp['alt']); ?>">
                <?php endif; ?>
            </div>
        </section>

        <!-- Parcours scolaire -->
        <section class="school">
            <h2 class="title">Mon parcours scolaire</h2>
            <div class="school__info">
                <section>
                    <h3><?php the_field('titile__parcous__web'); ?></h3>
                    <p><?php the_field('date__parcous__web'); ?></p>
                    <p><?php the_field('name__school__web'); ?></p>
                    <p><?php the_field('descripiton__web'); ?></p>
                </section>

                <section>
                    <p><?php the_field('description__school__art'); ?></p>
                    <h3><?php the_field('titile__parcous__art'); ?></h3>
                    <p><?php the_field('date__parcous__art'); ?></p>
                    <p><?php the_field('name__school__art'); ?></p>
                </section>

                <section>
                    <h3><?php the_field('name__school__secondary'); ?></h3>
                    <p><?php the_field('date__school__secondary'); ?></p>
                    <p><a href="<?php the_field('link__school__secondary'); ?>"><?php the_field('link__school__secondary'); ?></a></p>
                    <p><?php the_field('description__school__secondary'); ?></p>
                </section>
            </div>
        </section>

        <!-- Passions -->
        <section class="passion__me">
            <h2 class="title">Mes passions</h2>
            <p><?php the_field('description__passion'); ?></p>

            <?php $image_loisir = get_field('passion__image'); ?>
            <?php if ($image_loisir) : ?>
                <img class="passion__me__img" src="<?php echo esc_url($image_loisir['url']); ?>" alt="<?php echo esc_attr($image_loisir['alt']); ?>">
            <?php endif; ?>
        </section>

    <?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>
