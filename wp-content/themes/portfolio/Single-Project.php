<?php
/*
Template name: Template "Single-Project"
*/
?>
<?php
get_header();
?>
<main class="projet-detaille">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="bloc-projets">
        <!-- Titre du projet -->
        <h1 class="title__single__projet">Projets</h1>

        <section class="projet__entiers">
            <h2 class="titile__Proget__detailler" id="title__projet"><?php the_field('sous_titre__projet'); ?></h2>
            <section class="projet__info">
                <div class="projet__text">
                <h3><?php the_field('title__proget__description'); ?></h3>
                <p class="description__Projet__detailler" id="description__projet"><?php the_field('description__projet'); ?></p>
                </div>
                <!-- Image du projet (ACF) -->
                <?php
                $image = get_field('image_du_projet');
                if ($image) :
                    ?>
                    <div class="image-projet">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    </div>
                <?php endif; ?>
            </section>
        </section>


        <!-- Lien vers le site réel -->
        <?php if ($url = get_field('url_vers_site')) : ?>
            <a href="<?php echo esc_url($url); ?>" class="btn-decouvrir" target="_blank">
                Vers le site en ligne
            </a>
        <?php endif; ?>
    </article>
<?php endwhile; endif; ?>
    <div class="scroll__animation">
        <?php get_template_part('partials/logo/scroll'); ?>
    </div>


</main>

<?php get_footer(); ?>


