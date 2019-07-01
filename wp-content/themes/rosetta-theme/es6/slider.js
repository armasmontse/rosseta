import {$, w} from './constants';

w.load(() => {

	// console.log('Hola Mundo Slider!')

	var $status = $('.numero');
	var $slickElement = $('.cocina__slider');

	$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.text(i + '/' + slick.slideCount);
    });

	$('.intro__slider').slick({
		autoplay: true,
		dots: true,
        prevArrow: $('.galeria-prev'),
		nextArrow: $('.galeria-next'),
		infinite: true,
		speed: 900,
		fade: true,
	});

	$('.cocina__slider').slick({
		autoplay: true,
        prevArrow: $('.galeria-anterior'),
		nextArrow: $('.galeria-siguiente'),
		infinite: true,
		speed: 500,
		fade: true,
		dots: true,
	});

	$('.libro__slider').slick({
		autoplay: true,
        prevArrow: $('.galeria-anterior'),
		nextArrow: $('.galeria-siguiente'),
		infinite: true,
		speed: 900,
		fade: true,
	});

});
