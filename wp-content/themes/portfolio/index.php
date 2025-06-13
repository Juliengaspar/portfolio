<?php get_header(); ?>

<main class="contenu-site">
    //on ouvre la boucle (the loop) , la structure de contrôle
    //de contenu propore de wordpresse
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

