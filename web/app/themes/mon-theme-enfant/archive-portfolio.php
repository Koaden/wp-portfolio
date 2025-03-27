<?php get_header(); ?>
<main>
    <h1>Mes projets</h1>
    <div class="portfolio-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="portfolio-grid">
                <a href="<?php the_permalink(); ?>">
                    <article>
                        <img src="<?php the_field('image'); ?>" alt="image du projet">
                        <h2><?php the_title(); ?></h2>
                    </article>
                </a>
            </div>
        <?php endwhile; else : ?>
            <p>Aucune réalisation trouvée.</p>
        <?php endif; ?>
    </div>
</main>
<?php get_footer(); ?>