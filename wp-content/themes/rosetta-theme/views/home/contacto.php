<!-- C O N T A C T O -->
<div class="contacto__bg" style="">
    <section class="contacto" id="contacto">

        <h3 class="contacto__title"><?php _e("Contact","rosetta-theme")?></h3>

        <div class="contacto__flex">
            <div class="card__one">
                <div class="domicilio">
                    <?php the_field('domicilio_contacto'); ?>
                </div>
                <div class="redes">
                    <p>
                        <a target="_blank" class="redes__facebook" href="<?php the_field('instagram_contacto'); ?>"><?php the_field('texto_instagram_contacto'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" class="redes__facebook" href="<?php the_field('facebook_contacto'); ?>"><?php the_field('texto_facebook_contacto'); ?></a>
                    </p>
                    <p>
                        <a target="_blank" class="redes__facebook" href="<?php the_field('twitter_contacto'); ?>"><?php the_field('texto_twitter_contacto'); ?></a>
                    </p>
                </div>
            </div>

            <div class="card__two">

                <?php $imagen_mapa = get_field('mapa_contacto'); ?>

                <?php if( !empty($imagen_mapa) ): ?>

                    <img class="imagen" src="<?php echo $imagen_mapa['url']; ?>" alt="<?php echo $imagen_mapa['alt']; ?>" />

                <?php endif; ?>

                <a target="_blank" class="link-maps" href="<?php the_field('link_maps_contacto'); ?>" target="_blank" ><?php _e("Open in Google Maps","rosetta-theme")?></a>

            </div>

        </div>

        <div class="correos">
            <?php the_field('correos_contacto'); ?>
        </div>
    </section>
</div>
