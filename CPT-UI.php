function cptui_register_my_cpts() {

/**
 * Post Type: herbes_aromatiques.
 */

$labels = [
    "name" => esc_html__( "herbes_aromatiques", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "herbe_aromatique", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "herbes_aromatiques", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "herbes_aromatiques", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-palmtree",
    "supports" => [ "title" ],
    "show_in_graphql" => false,
];

register_post_type( "herbes_aromatiques", $args );

/**
 * Post Type: fruits.
 */

$labels = [
    "name" => esc_html__( "fruits", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "fruit", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "fruits", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "fruits", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-admin-site",
    "supports" => [ "title" ],
    "taxonomies" => [ "fruits" ],
    "show_in_graphql" => false,
];

register_post_type( "fruits", $args );

/**
 * Post Type: Légumes.
 */

$labels = [
    "name" => esc_html__( "Légumes", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "Légume", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "Légumes", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "legumes", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-carrot",
    "supports" => [ "title" ],
    "taxonomies" => [ "legume" ],
    "show_in_graphql" => false,
];

register_post_type( "legumes", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );


function cptui_register_my_cpts_herbes_aromatiques() {

/**
 * Post Type: herbes_aromatiques.
 */

$labels = [
    "name" => esc_html__( "herbes_aromatiques", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "herbe_aromatique", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "herbes_aromatiques", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "herbes_aromatiques", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-palmtree",
    "supports" => [ "title" ],
    "show_in_graphql" => false,
];

register_post_type( "herbes_aromatiques", $args );
}

add_action( 'init', 'cptui_register_my_cpts_herbes_aromatiques' );


function cptui_register_my_cpts_fruits() {

/**
 * Post Type: fruits.
 */

$labels = [
    "name" => esc_html__( "fruits", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "fruit", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "fruits", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "fruits", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-admin-site",
    "supports" => [ "title" ],
    "taxonomies" => [ "fruits" ],
    "show_in_graphql" => false,
];

register_post_type( "fruits", $args );
}

add_action( 'init', 'cptui_register_my_cpts_fruits' );


function cptui_register_my_cpts_legumes() {

/**
 * Post Type: Légumes.
 */

$labels = [
    "name" => esc_html__( "Légumes", "custom-post-type-ui" ),
    "singular_name" => esc_html__( "Légume", "custom-post-type-ui" ),
];

$args = [
    "label" => esc_html__( "Légumes", "custom-post-type-ui" ),
    "labels" => $labels,
    "description" => "",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "rest_namespace" => "wp/v2",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "can_export" => false,
    "rewrite" => [ "slug" => "legumes", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-carrot",
    "supports" => [ "title" ],
    "taxonomies" => [ "legume" ],
    "show_in_graphql" => false,
];

register_post_type( "legumes", $args );
}

add_action( 'init', 'cptui_register_my_cpts_legumes' );
