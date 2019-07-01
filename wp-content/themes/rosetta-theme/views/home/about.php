<!-- A B O U T  -->
<div class="about__bg" style="background-image: url(<?php echo THEMEURL ?>images/ilustracion-1.png);">
    <section class="about" id="restaurante" style="">
        <div class="about__flex">
            <div class="image" id="imagen-about">
            <?php

                $image_about = get_field('imagen_about');

                if( !empty($image_about) ): ?>

                    <img class="image__single wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" src="<?php echo $image_about['url']; ?>" alt="<?php echo $image_about['alt']; ?>" />

            <?php endif; ?>
            </div>

            <div class="text">
                <div class="text__contenido wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">

                    <?php the_field('texto_about'); ?>
                </div>
            </div>
        </div>
    </section>
</div>
