<?php get_header(); ?>
<main>
    <h1><?php the_title(); ?></h1>
    <img src="<?php the_field('image'); ?>" alt="image du projet">
    <div><?php the_content(); ?></div>
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <p>Client : <?php the_field('client'); ?></p>
    <p>Date : <?php the_field('date_de_realisation'); ?></p>
    <p>Lien : <a href="<?php the_field('lien_du_projet'); ?>"><?php the_field('lien_du_projet'); ?></a></p>
    
</main>
<?php get_footer(); ?>