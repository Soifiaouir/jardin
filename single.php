<?php get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('single-article'); ?>>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
        </header>

        <div class="entry-content">
            <?php
            // Gestion de l'image mise en avant
            if (has_post_thumbnail()) :
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_array = wp_get_attachment_image_src($thumbnail_id, 'large');
                if (is_array($thumbnail_array) && !empty($thumbnail_array)) {
                    $thumbnail_url = $thumbnail_array[0];
                    ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                    </div>
                    <?php
                }
            endif;

            // Affichage des champs ACF
            if (function_exists('get_field')) :
                $date_depart = get_field('sous-categorie__date_de_depart-seme');
                $date_fin = get_field('sous-categorie__date_de_fin-seme');
                $description = get_field('sous_categorie__description');
                $image_acf = get_field('sous-categorie__image') ;

                if ($date_depart) {
                    echo "<p><strong>Date de départ :</strong> " . esc_html($date_depart) . "</p>";
                }
                if ($date_fin) {
                    echo "<p><strong>Date de fin :</strong> " . esc_html($date_fin) . "</p>";
                }
                if ($description) {
                    echo "<div class='description'>" . wp_kses_post($description) . "</div>";
                }
                if ($image_acf) {
                    if (is_array($image_acf) && isset($image_acf['url'])) {
                        echo "<div class='acf-image'>";
                        echo "<img src='" . esc_url($image_acf['url']) . "' alt='" . esc_attr(get_the_title()) . "' />";
                        echo "</div>";
                    } elseif (is_string($image_acf)) {
                        echo "<div class='acf-image'>";
                        echo "<img src='" . esc_url($image_acf) . "' alt='" . esc_attr(get_the_title()) . "' />";
                        echo "</div>";
                    }
                }
            endif;

            // Contenu principal de l'article
            the_content();
            ?>
        </div>

       

    <?php
        endwhile;
    else :
        echo '<p>Aucun contenu trouvé.</p>';
    endif;
    ?>
</article>



<?php get_footer(); ?>