<?php get_header(); ?>
<header>
<div class="home">
    <div class="home_header">
        <h1><?php the_title();?></h1>
        <?php the_field('home__header_description'); ?>
        <img src="<?php the_field('home__header_background'); ?>" alt="logo" class="logo">
    </div>
</header>  
    <div class="home-content">
        <?php
// Fonction pour obtenir le dernier article d'un type de publication spécifique
        function get_last_post($post_type) {
            $args = array(
            'post_type' => $post_type,
            'posts_per_page' => 1,
            'orderby' => 'date',
            'order' => 'DESC',
        );
            $query = new WP_Query($args);
            return $query->posts[0] ?? null;
}

// Liste des types de publications
            $post_types = array('fruits', 'legumes', 'herbes_aromatiques'); // Remplacez par vos types de publications réels

            // Récupérer le dernier article pour chaque type de publication
            foreach ($post_types as $post_type) {
                $last_post = get_last_post($post_type);
                if ($last_post) {
                    // Configurer les données du post pour les fonctions WordPress standard
                    setup_postdata($GLOBALS['post'] =& $last_post);
                    ?>
                    <div class="last-post <?php echo esc_attr($post_type); ?>">
                        <h2><?php echo esc_html(get_post_type_object($post_type)->labels->singular_name); ?></h2>
                        <?php
                        // Vérifier si le champ ACF 'sous-categorie__image' existe
                        if (function_exists('get_field') && get_field('sous-categorie__image')) {
                            $image = get_field('sous-categorie__image');
                            // Vérifier si l'image est un ID ou un tableau
                            if (is_array($image)) {
                                echo wp_get_attachment_image($image[''], 'full', false, array('alt' => esc_attr(get_the_title())));
                            } else {
                                echo wp_get_attachment_image($image, 'full', false, array('alt' => esc_attr(get_the_title())));
                            }
                        } else {
                            // Utiliser l'image mise en avant si le champ ACF n'existe pas
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full', array('alt' => esc_attr(get_the_title())));
                            }
                        }
                        ?>
                        <a href="<?php the_permalink(); ?>">Lire la suite</a>
        <?php
        wp_reset_postdata();
    }
}
?>
</div>
</div>

<?php get_footer(); ?>