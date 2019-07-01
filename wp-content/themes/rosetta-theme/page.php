
<?php get_header(); ?>

<?php  if (have_posts()) : while (have_posts()) : the_post(); ?>

    <div class="home">

        <div class="aviso__bg" style="background-image: url(<?php echo THEMEURL ?>images/bg/4.png);">
            <section class="aviso">
                <h3 class="aviso__titulo"><?php the_title(); ?></h3>
                <div class="aviso__flex">
                    <div class="aviso__extracto">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
        </div>
    </div>

<?php  endwhile; endif; ?>

<?php get_footer();?>



<!--get_header();

if (have_posts()) : while (have_posts()) : the_post(); ?>


    <div class="page-template">
        Este es el page-template.php
        <br>
         echo the_title();
    </div>

 endwhile; endif;

get_footer();-->
