<?php
function enregistrer_types_publications_personnalises() {
    $types = array(
        'fruit' => 'Fruits',
        'herbes_aromatiques' => 'Herbes Aromatiques',
        'legumes' => 'Légumes'
    );

    foreach ($types as $slug => $name) {
        register_post_type($slug, array(
            'labels' => array(
                'name' => $name,
                'singular_name' => rtrim($name, 's'),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
        ));
    }
}
add_action('init', 'enregistrer_types_publications_personnalises');
?>

<?php

include 'ACF.php';
include 'CPT-UI.php';

