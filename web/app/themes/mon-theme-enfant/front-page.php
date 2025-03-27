<?php get_header(); ?>
<main>
    <h1>À propos de moi</h1>
    <p>Je suis Gaël Quéméré, étudiant en BUT2 informatique à l'IUT de Laval.</p>
    <h2>Mes dernières réalisations</h2>
    <?php
    $args = [
        'post_type' => 'portfolio',
        'posts_per_page' => 2, // Limite à 3 posts
        'orderby' => 'date', // Trier par date
        'order' => 'DESC', // Du plus récent au plus ancien
    ];
    $query = new WP_Query($args);
    if ($query->have_posts()) : ?>
        <div class="portfolio-grid">
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <article>
                    <a href="<?php the_permalink(); ?>">
                            <img src="<?php the_field('image'); ?>" alt="image du projet">
                            <h3><?php the_title(); ?></h3>
                    </a>
                </article>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>Aucune réalisation récente trouvée.</p>
    <?php endif; wp_reset_postdata(); ?>
</main>
<?php get_footer(); ?>