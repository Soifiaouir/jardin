<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <nav  class='nav'>
        <ul>
            <li><a href="<?php echo get_post_type_archive_link('fruits'); ?>">Fruits</a></li>
            <li><a href="<?php echo get_post_type_archive_link('legumes'); ?>">Légumes</a></li>
            <li><a href="<?php echo get_post_type_archive_link('herbes_aromatiques'); ?>">Herbes Aromatiques</a></li>
        </ul>
</nav>