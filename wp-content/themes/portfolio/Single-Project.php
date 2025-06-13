<?php get_header(); ?>

<main class="projet-detaille">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="bloc-projet">
            <h1><?php the_title(); ?></h1>
            <h2><?php the_field('sous_titre'); ?></h2>
            <div class="image_projet">
                <?php
                $image = get_field('image_projet');
                if ($image): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                <?php endif; ?>
            </div>
            <div class="description">
                <?php the_content(); ?>
            </div>
            <a href="<?php the_field('lien_site_final'); ?>" class="btn-decouvrir" target="_blank">Découvrir le projet</a>
        </article>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
