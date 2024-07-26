<?php get_header(); ?>

<div class="archive-content">
    <h1><?php post_type_archive_title(); ?></h1>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            ?>
            <div class="archive-post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </div>
            <?php
        endwhile;
    else :
        echo '<p>Aucun contenu trouvé.</p>';
    endif;
    ?>
</div>

<?php get_footer(); ?>