<!-- D E S C A N S O -->
<section class="descanso">
    <?php 

        $segundo_descanso = get_field('segundo_descanso_visual');

        if( !empty($segundo_descanso) ): ?>

            <img class="image__descanso" src="<?php echo $segundo_descanso['url']; ?>" alt="<?php echo $segundo_descanso['alt']; ?>" />

    <?php endif; ?>
</section>