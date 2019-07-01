<!-- R E S E R V A C I O N E S  -->
<div class="reservaciones__bg" style="background-image: url(<?php echo THEMEURL ?>images/ilustracion-2.png)" >
    <section class="reservaciones" id="reservaciones">

        <h3 class="reservaciones__title"><?php _e("Reservations","rosetta-theme")?></h3>
        <div class="reservaciones__flex">

            <div class="card__one">
                <?php

                    $image_izq = get_field('imagen_izquierda_reservaciones');

                    if( !empty($image_izq) ): ?>

                        <img class="imagen__izq" src="<?php echo $image_izq['url']; ?>" alt="<?php echo $image_izq['alt']; ?>" />

                <?php endif; ?>
            </div>

            <div class="card__two">
                <?php

                    $image_der = get_field('imagen_derecha_reservaciones');

                    if( !empty($image_der) ): ?>

                        <img class="imagen__der" src="<?php echo $image_der['url']; ?>" alt="<?php echo $image_der['alt']; ?>" />

                <?php endif; ?>
            </div>

        </div>

        <div class="reservaciones__flex--text">
            <div class="text">
                <div class="text__contenido">
                    <?php the_field('texto_reservaciones'); ?>
                </div>
            </div>

            <div class="table">
                <div class="">
                    <?php

                        if(get_locale()=="es_ES"){
                           $lang = "es-MX";
                       }else {
                           $lang = "en-US";
                       }
                    ?>
                    <script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=115690&type=standard&theme=wide&iframe=false&overlay=false&domain=com&lang=<?php echo $lang?>'></script>
                </div>

                <div class="correo-contacto">
                    <?php _e("Reservations for 8 people or more","rosetta-theme")?> <a href="mailto:<?php the_field('mail_reservaciones'); ?>"><?php the_field('mail_reservaciones'); ?></a>
                </div>
            </div>
        </div>
    </section>
</div>
