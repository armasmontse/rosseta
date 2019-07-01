<!DOCTYPE html>
<html lang="<?php echo substr(get_bloginfo ( 'language' ), 0, 2);?>">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title(); ?></title>

	<?php include_once('inc/favicon.php'); ?>

	<meta name="description" content="Rosetta es la propuesta gastronómica de la chef mexicana Elena Reygadas, un restaurante que abrió en 2010 en la colonia Roma, ciudad de México." />
	<meta name="keywords" content="Rosetta, Elena Reygadas, gastronomía, México, restaurante, comida, cocina, autor, chef, cocina mexicana, colonia roma, ciudad de méxico, panadería, gastronomía, gastronomía contemporánea, 50 best, premio Veuve Clicquot, Restaurante Rosetta, Rossetta, Rosseta" />
	<meta name="author" content="<?php echo THEMEURL;?>humans.txt">

	<!-- Facebook Metadata /-->
<meta property="fb:page_id" content="312027142012" />
<meta property="og:image" content="<?php $images = get_field('slider'); echo $images[0]['url']; ?>" />
<meta property="og:description" content="Rosetta es la propuesta gastronómica de la chef mexicana Elena Reygadas, un restaurante que abrió en 2010 en la colonia Roma, ciudad de México."/>
<meta property="og:title" content="<?php wp_title(); ?>"/>

<!-- Google+ Metadata /-->
<meta itemprop="name" content="<?php wp_title(); ?>">
<meta itemprop="description" content="Rosetta es la propuesta gastronómica de la chef mexicana Elena Reygadas, un restaurante que abrió en 2010 en la colonia Roma, ciudad de México.">
<meta itemprop="image" content="<?php $images = get_field('slider'); echo $images[0]['sizes']['url']; ?>">

	<link href="<?php bloginfo('template_url'); ?>/style.css?v=1.1" rel="stylesheet" type="text/css" />

	<!-- Slick -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

	<!-- Font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<!-- Animate.css -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

	<?php wp_head(); ?>

</head>
<body style="background-image: url(<?php echo THEMEURL ?>images/ilustracion-5.png);background-position:left bottom;;background-attachment:fixed;background-repeat:no-repeat;background-size: 480px" <?php body_class(); ?>>

	<?php

    use App\Contacto;

    global $contact;

    $contact = new Contacto;

	/**
	 *CLTVO: poner esto en true sólo en la versiones locales.
	 */

	if( !defined('CLTVO_ISLOCAL') || ( CLTVO_ISLOCAL != true) ){ include_once('inc/analytics.php'); }

	?>

	<!--[if gt IE 8]><div style="z-index: 1000; padding: 5px 0; text-align: center; position: absolute; top: 0; left: 0; width: 100%; background-color: #312822;"><p style="font-family: Arial, Helvetica, sans-serif; font-size: 16px; color: white;">Consider <a style="color: #EA7640;
	text-decoration: underline;" href="http://www.google.com/intl/es/chrome/browser/" target="_blank">updating your browser</a> in order to render this site correctly.</p></div><!-->
	<!--<![endif]-->

	<!-- Aquí abre el main-wrap -->
	<div class="main-wrap">

	<?php if(is_front_page()): ?>

		<?php get_template_part('views/home/slider-intro'); ?>

	<?php endif; ?>

	<!--Menu -->
	<div class="header-container">

		<?php if(true): ?>
			<!-- N a v -->
			<?php get_template_part('views/general/header'); ?>

		<?php endif; ?>

	</div>


	<!-- M O D A L  -->
	<?php // get_template_part('views/general/modal-news'); ?>
