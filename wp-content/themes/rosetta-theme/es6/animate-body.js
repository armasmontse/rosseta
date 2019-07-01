import {$, w} from './constants';

w.load(() => {

    var menu = $("#menu-header-menu");
    var menuItems = menu.find("a");
    var allItems = menuItems.map(function(){
        var itemMenu = $(this).attr("href");
        // console.log(itemMenu);
        if (itemMenu.length) {
            return itemMenu;
        }
    });

    // Cambiar IDs de links
    // localhost
    $('#menu-item-83').click(function(){
        $('html, body').animate({
            scrollTop: $("#restaurante").offset().top
        }, 2000);
    });

    $('#menu-item-82').click(function(){
        $('html, body').animate({
            scrollTop: $("#reservaciones").offset().top
        }, 2000);
    });

    $('#menu-item-84').click(function(){
        $('html, body').animate({
            scrollTop: $("#cocina").offset().top
        }, 2000);
    });

    $('#menu-item-85').click(function(){
        $('html, body').animate({
            scrollTop: $("#libro").offset().top
        }, 2000);
    });

    $('#menu-item-86').click(function(){
        $('html, body').animate({
            scrollTop: $("#contacto").offset().top
        }, 2000);
    });


    // Desarrollo
    $('#menu-item-103').click(function(){
        $('html, body').animate({
            scrollTop: $("#restaurante").offset().top
        }, 2000);
    });

    $('#menu-item-100').click(function(){
        $('html, body').animate({
            scrollTop: $("#reservaciones").offset().top
        }, 2000);
    });

    $('#menu-item-104').click(function(){
        $('html, body').animate({
            scrollTop: $("#cocina").offset().top
        }, 2000);
    });

    $('#menu-item-105').click(function(){
        $('html, body').animate({
            scrollTop: $("#libro").offset().top
        }, 2000);
    });

    $('#menu-item-106').click(function(){
        $('html, body').animate({
            scrollTop: $("#contacto").offset().top
        }, 2000);
    });


    // Producción
    $('#menu-item-83').click(function(){
        $('html, body').animate({
            scrollTop: $("#restaurante").offset().top
        }, 2000);
    });

    $('#menu-item-82').click(function(){
        $('html, body').animate({
            scrollTop: $("#reservaciones").offset().top
        }, 2000);
    });

    $('#menu-item-84').click(function(){
        $('html, body').animate({
            scrollTop: $("#cocina").offset().top
        }, 2000);
    });

    $('#menu-item-85').click(function(){
        $('html, body').animate({
            scrollTop: $("#libro").offset().top
        }, 2000);
    });

    $('#menu-item-86').click(function(){
        $('html, body').animate({
            scrollTop: $("#contacto").offset().top
        }, 2000);
    });
});