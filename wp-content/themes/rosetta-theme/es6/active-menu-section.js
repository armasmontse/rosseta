import {$, w} from './constants';

w.load(() => {

    // Función que agrega "active" a menú
    $(document).on("scroll", onScroll);

    function onScroll(event){

        var scrollPos = $(document).scrollTop();
        // console.log(scrollPos);

        // About
        var offsetAbout = $( '.about' ).offset();
        var topAbout = offsetAbout.top;

        // Reservaciones
        var offsetReservaciones = $( '.reservaciones' ).offset();
        var topReservaciones = offsetReservaciones.top;

        // Cocina
        var offsetCocina = $( '.cocina' ).offset();
        var topCocina = offsetCocina.top;

        // Libro
        var offsetLibro = $( '.libro' ).offset();
        var topLibro = offsetLibro.top;

        // Contacto
        var offsetContacto = $( '.contacto' ).offset();
        var topContacto = offsetContacto.top;

        // All list items
        var topMenu = $("#menu-header-menu,#menu-header-menu-en");
        var menuItems = topMenu.find("a");
        // console.log(menuItems);

        if (scrollPos >= topAbout - 30 && scrollPos < topReservaciones) {
            // console.log('About');
            menuItems.removeClass("active");
            $('#menu-item-83').find('a').addClass('active');
            $('#menu-item-103').find('a').addClass('active');
            $('#menu-item-298').find('a').addClass('active');
            $('#menu-item-408').find('a').addClass('active');
        }

        if (scrollPos >= topReservaciones - 30 && scrollPos < topCocina) {
            menuItems.removeClass("active");
            $('#menu-item-82').find('a').addClass('active');
            $('#menu-item-100').find('a').addClass('active');
            $('#menu-item-299').find('a').addClass('active');
            $('#menu-item-409').find('a').addClass('active');
            // console.log('Reservaciones');
        }

        if (scrollPos >= topCocina - 30 && scrollPos < topLibro) {
            // console.log('Cocina');
            menuItems.removeClass("active");
            $('#menu-item-84').find('a').addClass('active');
            $('#menu-item-104').find('a').addClass('active');
            $('#menu-item-300').find('a').addClass('active');
            $('#menu-item-410').find('a').addClass('active');
        }

        if (scrollPos >= topLibro - 30 && scrollPos < topContacto) {
            // console.log('Libro');
            menuItems.removeClass("active");
            $('#menu-item-85').find('a').addClass('active');
            $('#menu-item-105').find('a').addClass('active');
            $('#menu-item-301').find('a').addClass('active');
            $('#menu-item-411').find('a').addClass('active');
        }

        if (scrollPos >= topContacto - 200) {
            // console.log('Contacto');
            menuItems.removeClass("active");
            $('#menu-item-86').find('a').addClass('active');
            $('#menu-item-106').find('a').addClass('active');
            $('#menu-item-302').find('a').addClass('active');
            $('#menu-item-412').find('a').addClass('active');
        }

    }

    // Cache selectors
    var topMenu = $("#menu-header-menu");
    var topMenuHeight = topMenu.outerHeight();
    // console.log(topMenuHeight);

    // All list items
    var menuItems = topMenu.find("a");
    // console.log(menuItems);

    // Anchors corresponding to menu items
    var scrollItems = menuItems.map(function(){
        var item = $(this).attr("href");
        // console.log(item);
        if (item.length) {
            return item;
        }
    });

    menuItems.click(function(e){
        var href = $(this);
        // console.log(href);
        menuItems.removeClass("active");
        href.addClass('active');
    });

    // console.log(scrollItems);

    $(window).scroll(function(){
        var fromTop = $(this).scrollTop()+topMenuHeight;
        // console.log(fromTop);
        var cur = scrollItems.map(function(){
            // console.log('entra en función de scroll');

            // if ($(this).offset().top < fromTop) {
            //     return this;
            // }
        });
    });

});
