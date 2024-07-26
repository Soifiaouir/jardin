<?php get_header(); ?>
<?php get_header(); ?>
<header class="home-header" style="background-image: url('<?php the_field('home__header_background'); ?>');">
    <div class="homeh">
        <div class="home_header">
            <h1><?php the_title(); ?></h1>
            <?php the_field('home__header_description'); ?>
        </div>
    </div>
</header>  
 
<div class="home-content">
    <?php
    // Liste des types de publications
    $post_types = array('fruits', 'legumes', 'herbes_aromatiques');

    // Boucle à travers chaque type de publication
    foreach ($post_types as $post_type) {
        $args = array(
            'post_type' => $post_type,
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC'
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="last-post <?php echo esc_attr($post_type); ?>">
                    <?php
                    // Affichage de l'image
                    if (function_exists('get_field') && get_field('sous-categorie__image')) {
                        $image = get_field('sous-categorie__image');
                        if (is_array($image) && isset($image['url'])) {
                            echo '<img src="' . esc_url($image['url']) . '" alt="' . esc_attr(get_the_title()) . '">';
                        } elseif (is_string($image)) {
                            echo '<img src="' . esc_url($image) . '" alt="' . esc_attr(get_the_title()) . '">';
                        }
                    } elseif (has_post_thumbnail()) {
                        echo get_the_post_thumbnail(null, 'full', array('alt' => get_the_title()));
                    }
                    ?>
                    <h3><?php the_title(); ?></h3>
                    <a href="<?php the_permalink(); ?>">Lire la suite</a>
                </div>
                <?php
            endwhile;
        endif;
        wp_reset_postdata();
    }
    ?>
</div>

<?php get_footer(); ?>
