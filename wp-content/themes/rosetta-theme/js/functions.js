/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./js/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	__webpack_require__(2);
	
	__webpack_require__(3);
	
	__webpack_require__(4);
	
	__webpack_require__(5);
	
	// import './masonry'
	// import './modal'
	// import './page-top'
	// import './view-more'
	// import './view-more-xs'
	// import './scrollit'
	// import { renderYoutube } from './video'
	
	_constants.w.load(function () {
	    //renderYoutube();
	    new WOW().init();
	});
	
	(0, _constants.$)(document).ready(function () {
	    console.log('Hello world from El Cultivo!');
	});

/***/ }),
/* 1 */
/***/ (function(module, exports) {

	"use strict";
	
	Object.defineProperty(exports, "__esModule", {
	  value: true
	});
	var $ = exports.$ = jQuery;
	var w = exports.w = $(window);

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
		// console.log('Hola Mundo Slider!')
	
		var $status = (0, _constants.$)('.numero');
		var $slickElement = (0, _constants.$)('.cocina__slider');
	
		$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
			var i = (currentSlide ? currentSlide : 0) + 1;
			$status.text(i + '/' + slick.slideCount);
		});
	
		(0, _constants.$)('.intro__slider').slick({
			autoplay: true,
			dots: true,
			prevArrow: (0, _constants.$)('.galeria-prev'),
			nextArrow: (0, _constants.$)('.galeria-next'),
			infinite: true,
			speed: 900,
			fade: true
		});
	
		(0, _constants.$)('.cocina__slider').slick({
			autoplay: true,
			prevArrow: (0, _constants.$)('.galeria-anterior'),
			nextArrow: (0, _constants.$)('.galeria-siguiente'),
			infinite: true,
			speed: 500,
			fade: true,
			dots: true
		});
	
		(0, _constants.$)('.libro__slider').slick({
			autoplay: true,
			prevArrow: (0, _constants.$)('.galeria-anterior'),
			nextArrow: (0, _constants.$)('.galeria-siguiente'),
			infinite: true,
			speed: 900,
			fade: true
		});
	});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	(0, _constants.$)(document).ready(function () {
		if (!(0, _constants.$)('.intro').length) {
			(0, _constants.$)(".logo__imagen").animate({
				opacity: 1
			}, 4000);
		}
		// - - - M e n ú   r e s p o n s i v e - - -
		var btnAbrir = (0, _constants.$)(".header__menu.open");
		var btnCerrar = (0, _constants.$)(".header__menu.close");
		var menuMobile = (0, _constants.$)(".header-container");
	
		// Abrir menu lateral
		btnAbrir.click(function () {
			// console.log('abre menu');
			btnAbrir.hide();
			btnCerrar.show();
			menuMobile.addClass('show');
		});
	
		// Cerrar menu lateral
		btnCerrar.click(function () {
			// console.log('cierra menu');
			btnCerrar.hide();
			btnAbrir.show();
			menuMobile.removeClass('show');
		});
	
		var x = window.matchMedia("(max-width: 850px)");
	
		function myFunction(x) {
	
			var topMenu = (0, _constants.$)("#menu-header-menu");
			var menuItems = topMenu.find("a");
	
			if (x.matches) {
				// If media query matches
				menuItems.click(function (e) {
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
	
		myFunction(x); // Call listener function at run time
		x.addListener(myFunction); // Attach listener function on state changes
	});
	
	_constants.w.scroll(function () {
		if ((0, _constants.$)('.intro').length) {
			(0, _constants.$)(".logo__imagen").animate({
				opacity: 1
			}, 4000);
		}
	
		var intro = (0, _constants.$)('.intro').height();
		var scroll = (0, _constants.$)(window).scrollTop();
	
		// console.log(intro);
		// console.log(scroll);
	
		if (scroll >= intro) {
			(0, _constants.$)(".header-container").addClass("header-container-fixed");
			(0, _constants.$)(".about").css("margin-top", "50px");
		} else {
			(0, _constants.$)(".header-container").removeClass("header-container-fixed");
			(0, _constants.$)(".about").css("margin-top", "0px");
		}
	});

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

	"use strict";
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	    var menu = (0, _constants.$)("#menu-header-menu");
	    var menuItems = menu.find("a");
	    var allItems = menuItems.map(function () {
	        var itemMenu = (0, _constants.$)(this).attr("href");
	        // console.log(itemMenu);
	        if (itemMenu.length) {
	            return itemMenu;
	        }
	    });
	
	    // Cambiar IDs de links
	    // localhost
	    (0, _constants.$)('#menu-item-83').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#restaurante").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-82').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#reservaciones").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-84').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#cocina").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-85').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#libro").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-86').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#contacto").offset().top
	        }, 2000);
	    });
	
	    // Desarrollo
	    (0, _constants.$)('#menu-item-103').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#restaurante").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-100').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#reservaciones").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-104').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#cocina").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-105').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#libro").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-106').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#contacto").offset().top
	        }, 2000);
	    });
	
	    // Producción
	    (0, _constants.$)('#menu-item-83').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#restaurante").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-82').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#reservaciones").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-84').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#cocina").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-85').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#libro").offset().top
	        }, 2000);
	    });
	
	    (0, _constants.$)('#menu-item-86').click(function () {
	        (0, _constants.$)('html, body').animate({
	            scrollTop: (0, _constants.$)("#contacto").offset().top
	        }, 2000);
	    });
	});

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

	'use strict';
	
	var _constants = __webpack_require__(1);
	
	_constants.w.load(function () {
	
	    // Función que agrega "active" a menú
	    (0, _constants.$)(document).on("scroll", onScroll);
	
	    function onScroll(event) {
	
	        var scrollPos = (0, _constants.$)(document).scrollTop();
	        // console.log(scrollPos);
	
	        // About
	        var offsetAbout = (0, _constants.$)('.about').offset();
	        var topAbout = offsetAbout.top;
	
	        // Reservaciones
	        var offsetReservaciones = (0, _constants.$)('.reservaciones').offset();
	        var topReservaciones = offsetReservaciones.top;
	
	        // Cocina
	        var offsetCocina = (0, _constants.$)('.cocina').offset();
	        var topCocina = offsetCocina.top;
	
	        // Libro
	        var offsetLibro = (0, _constants.$)('.libro').offset();
	        var topLibro = offsetLibro.top;
	
	        // Contacto
	        var offsetContacto = (0, _constants.$)('.contacto').offset();
	        var topContacto = offsetContacto.top;
	
	        // All list items
	        var topMenu = (0, _constants.$)("#menu-header-menu,#menu-header-menu-en");
	        var menuItems = topMenu.find("a");
	        // console.log(menuItems);
	
	        if (scrollPos >= topAbout - 30 && scrollPos < topReservaciones) {
	            // console.log('About');
	            menuItems.removeClass("active");
	            (0, _constants.$)('#menu-item-83').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-103').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-298').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-408').find('a').addClass('active');
	        }
	
	        if (scrollPos >= topReservaciones - 30 && scrollPos < topCocina) {
	            menuItems.removeClass("active");
	            (0, _constants.$)('#menu-item-82').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-100').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-299').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-409').find('a').addClass('active');
	            // console.log('Reservaciones');
	        }
	
	        if (scrollPos >= topCocina - 30 && scrollPos < topLibro) {
	            // console.log('Cocina');
	            menuItems.removeClass("active");
	            (0, _constants.$)('#menu-item-84').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-104').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-300').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-410').find('a').addClass('active');
	        }
	
	        if (scrollPos >= topLibro - 30 && scrollPos < topContacto) {
	            // console.log('Libro');
	            menuItems.removeClass("active");
	            (0, _constants.$)('#menu-item-85').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-105').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-301').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-411').find('a').addClass('active');
	        }
	
	        if (scrollPos >= topContacto - 200) {
	            // console.log('Contacto');
	            menuItems.removeClass("active");
	            (0, _constants.$)('#menu-item-86').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-106').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-302').find('a').addClass('active');
	            (0, _constants.$)('#menu-item-412').find('a').addClass('active');
	        }
	    }
	
	    // Cache selectors
	    var topMenu = (0, _constants.$)("#menu-header-menu");
	    var topMenuHeight = topMenu.outerHeight();
	    // console.log(topMenuHeight);
	
	    // All list items
	    var menuItems = topMenu.find("a");
	    // console.log(menuItems);
	
	    // Anchors corresponding to menu items
	    var scrollItems = menuItems.map(function () {
	        var item = (0, _constants.$)(this).attr("href");
	        // console.log(item);
	        if (item.length) {
	            return item;
	        }
	    });
	
	    menuItems.click(function (e) {
	        var href = (0, _constants.$)(this);
	        // console.log(href);
	        menuItems.removeClass("active");
	        href.addClass('active');
	    });
	
	    // console.log(scrollItems);
	
	    (0, _constants.$)(window).scroll(function () {
	        var fromTop = (0, _constants.$)(this).scrollTop() + topMenuHeight;
	        // console.log(fromTop);
	        var cur = scrollItems.map(function () {
	            // console.log('entra en función de scroll');
	
	            // if ($(this).offset().top < fromTop) {
	            //     return this;
	            // }
	        });
	    });
	});

/***/ })
/******/ ]);
//# sourceMappingURL=functions.js.map