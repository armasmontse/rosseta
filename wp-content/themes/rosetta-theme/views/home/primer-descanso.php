<!-- D E S C A N S O -->
<section class="descanso">
    <?php 

        $primer_descanso = get_field('imagen_descanso_visual_primero');

        if( !empty($primer_descanso) ): ?>

            <img class="image__descanso" src="<?php echo $primer_descanso['url']; ?>" alt="<?php echo $primer_descanso['alt']; ?>" />

    <?php endif; ?>
</section>