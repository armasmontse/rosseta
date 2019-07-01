<header class="header">
	<div class="grid__container">
		<div class="menu menu--mobile">
			<?php
                wp_nav_menu(array(
					'menu'           => "main",
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'lista',
            	));
				?>
                <?php if (function_exists('icl_get_languages')){
                    $languages = icl_get_languages('skip_missing=0');
                }?>
                <div class="mobile-languages">
                    <ul >
                        <?php if ($languages): ?>
                            <?php foreach($languages as $language): ?>

                                <li ><a class="langmenu<?php echo (get_locale()==$language['default_locale'] )? ' active' : ''; ?>" href="<?php echo $language['url']; ?>"><?php echo substr($language['native_name'], 0, 3); ?></a> </li>
                            <?php endforeach; ?>

                    <?php endif;?>
        			</ul>
                </div>


		</div>
		<div class="logo">
			<a href="<?php echo BLOGURL ?>">
				<img class="logo__imagen" src="<?php echo THEMEURL ?>images/logo/logo-pequeno.svg" alt="">
			</a>
		</div>
		<div class="idiomas">

			<div class="card">
				<a href="https://www.instagram.com/panaderiarosetta" target="_blank">Panadería</a>
			</div>
            <?php if (function_exists('icl_get_languages')){
                $languages = icl_get_languages('skip_missing=0');
            }?>
			<ul>
                <?php if ($languages): ?>
                    <?php foreach($languages as $language): ?>
                        <li ><a  class="langmenu <?php echo (get_locale()==$language['default_locale'] )? ' active' : ''; ?>" href="<?php echo $language['url']; ?>"><?php echo substr($language['native_name'], 0, 3); ?></a> </li>
                    <?php endforeach; ?>

            <?php endif;?>
			</ul>
		</div>
		<div class="header__collapse">
			<button class="header__menu open">
				Menú
			</button>
			<button class="header__menu close">
				Cerrar
			</button>
		</div>

	</div>
</header>
