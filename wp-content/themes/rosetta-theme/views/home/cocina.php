<!-- C O C I N A -->
<div class="cocina__bg" style="background-image: url(<?php echo THEMEURL ?>images/ilustracion-3.png);">
    <section class="cocina" id="cocina">

        <h3 class="cocina__title">
            <a href="<?php the_field('enlace_pdf'); ?>" target="_blank">
                 <?php _e("Menu PDF","rosetta-theme");?>
            </a>
        </h3>

        <!-- <div class="text wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
            <?php // the_field('cocina_texto'); ?>
        </div> -->

        <div class="cocina__row">

            <div class="gallery">
                <ul class="cocina__slider">
                    <?php

                    $images = get_field('slider_cocina');

                    if( $images ): ?>

                        <?php foreach( $images as $image ): ?>
                            <li>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                            </li>
                        <?php endforeach; ?>

                    <?php endif; ?>
                </ul>

                <div class="galeria-anterior"></div>
                <div class="galeria-siguiente"></div>

                <span class="numero"></span>

            </div>
        </div>

        <!-- <div class="flex__right">
            <div class="text__columnas wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s">
                <?php // the_field('texto_dos_columnas'); ?>
            </div>
        </div> -->

    </section>
</div>
