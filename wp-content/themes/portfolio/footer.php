<?php /* Template name: Template "footer"*/ ?>
<footer>
    <section class="footer__about">
        <?php
        $imageFooter = get_field('logo_footer', 'option'); // Ajoute 'option' si c’est un champ global        // var_dump($image); // temporaire pour voir ce qu'il y a dans le fichiers
        //var_dump($imageFooter);
        if ($imageFooter) :
            ?>
            <div class="logo_footer">
                <img src="<?php echo esc_url($imageFooter['url']); ?>" alt="<?php echo esc_attr($imageFooter['alt']); ?>" class="logo__dore__footer">
                <?php
                //var_dump($imageFooter);
                ?>
            </div>

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
                <li class="redirection"><a href="<?php echo get_permalink(get_page_by_path('A_Propos')); ?>">Profil</a></li>
                <li class="redirection"><a href="<?php echo get_permalink(get_page_by_path('Contact')); ?>">Contact</a></li>
            </ul>
        </section>
        <section class="footer__title__contact">
            <h3 class="contact_title" style="display: none;"></h3>
            <!--<a href="src/pages/Contact.php" class="lien-contact">Contactez mois</a>-->
            <a href="<?php the_field('lien_bouton_footer', 'option'); ?>" class="lien-contact">
                <?php the_field('texte_bouton_footer', 'option'); ?>
            </a>
        </section>
    </section>
    <section class="copyright">
        <h2 class="copyright__title"><?php the_field('copyright_footer', 'option'); ?></h2>
    </section>
</footer>
<?php wp_footer(); ?>
