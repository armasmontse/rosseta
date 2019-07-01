<?php
/* Template Name: Home */
get_header(); ?>

<?php // if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="home">
        <?php get_template_part('views/home/about'); ?>

        <?php get_template_part('views/home/reservaciones'); ?>

        <?php get_template_part('views/home/primer-descanso'); ?>

        <?php get_template_part('views/home/cocina'); ?>

        <?php get_template_part('views/home/segundo-descanso'); ?>

        <?php get_template_part('views/home/libro'); ?>

        <?php get_template_part('views/home/contacto'); ?>

    </div>

<?php // endwhile; endif; ?>

<?php get_footer();
