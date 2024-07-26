<?php
function enregistrer_types_publications_personnalises() {
    $types = array(
        'fruits' => 'Fruits',
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

include 'configACF.php';
include 'configCPT-UI.php';

