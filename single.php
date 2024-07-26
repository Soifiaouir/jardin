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
            // Débogage de l'image mise en avant
            if (has_post_thumbnail()) :
                $thumbnail_id = get_post_thumbnail_id();
                $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'large')[0];
                echo "<p>Image mise en avant URL: $thumbnail_url</p>";
            ?>
                <div class="featured-image">
                    <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                </div>
            <?php
            else :
                echo "<p>Pas d'image mise en avant.</p>";
            endif;

            // Débogage des champs ACF
            if (function_exists('get_field')) :
                $date_depart = get_field('sous-categorie__date_de_depart-seme');
                $date_fin = get_field('sous-categorie__date_de_fin-seme');
                $description = get_field('sous_categorie__description');
                $image_acf = get_field('sous-categorie__image');

                if ($date_depart) echo "<p>Date de départ : " . esc_html($date_depart) . "</p>";
                if ($date_fin) echo "<p>Date de fin : " . esc_html($date_fin) . "</p>";
                if ($description) echo "<div class='description'>" . wp_kses_post($description) . "</div>";
                if ($image_acf) :
                    echo "<p>Image ACF URL: " . esc_url($image_acf['url']) . "</p>";
            ?>
                    <div class="acf-image">
                        <?php echo wp_get_attachment_image($image_acf['ID'], 'full', false, array('class' => 'img-fluid')); ?>
                    </div>
            <?php
                else :
                    echo "<p>Pas d'image ACF.</p>";
                endif;
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
