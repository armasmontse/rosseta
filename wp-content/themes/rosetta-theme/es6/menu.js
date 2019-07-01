import {$, w} from './constants';

$(document).ready(function() {
    if(!$('.intro').length){
    $( ".logo__imagen" ).animate({
        opacity: 1,
    }, 4000 );
    }
    // - - - M e n ú   r e s p o n s i v e - - -
	const btnAbrir = $(".header__menu.open");
	const btnCerrar = $(".header__menu.close");
	const menuMobile = $(".header-container");

	// Abrir menu lateral
	btnAbrir.click(function() {
		// console.log('abre menu');
		btnAbrir.hide();
		btnCerrar.show();
	    menuMobile.addClass('show');
    });

    // Cerrar menu lateral
	btnCerrar.click(function() {
		// console.log('cierra menu');
		btnCerrar.hide();
		btnAbrir.show();
		menuMobile.removeClass('show');
	});

	var x = window.matchMedia("(max-width: 850px)")

	function myFunction(x) {

		var topMenu = $("#menu-header-menu");
		var menuItems = topMenu.find("a");

		if (x.matches) { // If media query matches
			menuItems.click(function(e){
				// var href = $(this);
				// console.log('clic que entra en if de menor de 850px');
				menuMobile.removeClass('show');
				btnCerrar.hide();
				btnAbrir.show();
			});
			// document.body.style.backgroundColor = "yellow";
		} else {
			// document.body.style.backgroundColor = "pink";
		}
	}

	myFunction(x) // Call listener function at run time
	x.addListener(myFunction) // Attach listener function on state changes

});

w.scroll(function() {
    if($('.intro').length){
	$( ".logo__imagen" ).animate({
		opacity: 1,
	}, 4000 );
}

	const intro = $('.intro').height();
	const scroll = $(window).scrollTop();

	// console.log(intro);
	// console.log(scroll);

	if (scroll >= intro) {
		$(".header-container").addClass("header-container-fixed");
		$(".about").css("margin-top", "50px");
	}
	else {
		$(".header-container").removeClass("header-container-fixed");
		$(".about").css("margin-top", "0px");
    }

});
