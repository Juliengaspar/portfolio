<?php get_header(); ?>

<main class="contenu-site">
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <!--  affiche le contenu -->

            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; else: ?>
        <p>Pas de contenus à afficher.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>

