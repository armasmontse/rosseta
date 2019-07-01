<?php

require __DIR__.'/bootstrap/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

add_action("after_setup_theme",function(){
    //echo get_locale();
    load_theme_textdomain("rosetta-theme",get_template_directory().'/languages');
     //var_dump(load_theme_textdomain("test",get_template_directory().'/languages'));
});

//Filtro para insertarle una clase específica al body de una página específica
//Insertamos la clase aviso
add_filter( 'body_class', function ( $classes ) {
    if ( is_page() ) {
        $classes[] = 'bg-grey';
    }
    return $classes;
});
