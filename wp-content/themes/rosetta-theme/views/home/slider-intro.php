<!-- I N T R O -->
<section class="intro">
    <img class="intro__logo" src="<?php echo THEMEURL ?>/images/logo/logo-grande.svg" alt="">
    <ul class="intro__slider">
        <?php 

        $images = get_field('slider');

        if( $images ): ?>
            <?php foreach( $images as $image ): ?>
                <li>
                    <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />                
                </li>
            <?php endforeach; ?>
        <?php endif; ?>

    </ul>
</section>