<?php get_header(); ?>

<h1><?php the_title();?></h1>
<div class="date">
    <?php the_field('sous-categorie__date_de_depart-seme'); ?>
    <?php the_field('sous-categorie__date_de_fin-seme'); ?>
</div>
<div class="contenu">
    <?php the_field('sous_categorie__description'); ?>
    <img src="<?php the_field('sous-categorie__image'); ?>" alt="soucatimg">
</div>
<?php get_footer(); ?>