<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>

<? use Bitrix\Main\Page\Asset; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<?$APPLICATION->ShowHead();?>

	<? Asset::getInstance()->addString('<meta charset="utf-8">') ?>
	<? Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">') ?>
	<? Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">') ?>
	<? Asset::getInstance()->addString('<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />') ?>
	<? Asset::getInstance()->addString('<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />') ?>
	<? Asset::getInstance()->addString('<meta name="author" content="FREEHTML5.CO" />') ?>
	<? Asset::getInstance()->addString('<meta property="og:title" content=""/>') ?>
	<? Asset::getInstance()->addString('<meta property="og:image" content=""/>') ?>
	<? Asset::getInstance()->addString('<meta property="og:url" content=""/>') ?>
	<? Asset::getInstance()->addString('<meta property="og:site_name" content=""/>') ?>
	<? Asset::getInstance()->addString('<meta property="og:description" content=""/>') ?>
	<? Asset::getInstance()->addString('<meta name="twitter:title" content="" />') ?>
	<? Asset::getInstance()->addString('<meta name="twitter:image" content="" />') ?>
	<? Asset::getInstance()->addString('<meta name="twitter:url" content="" />') ?>
	<? Asset::getInstance()->addString('<meta name="twitter:card" content="" />') ?>
	<? Asset::getInstance()->addString('<link rel="shortcut icon" href="favicon.ico">') ?>
	<? Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic' rel='stylesheet' type='text/css'>") ?>


    <title><?$APPLICATION->ShowTitle();?></title>



	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/animate.css") ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/icomoon.css") ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/simple-line-icons.css") ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap-datetimepicker.min.css") ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/flexslider.css") ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/bootstrap.css") ?>
	<? Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css") ?>


    <!-- Modernizr JS -->
	<? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/modernizr-2.6.2.min.js") ?>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <? Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/respond.min.js") ?>
    <![endif]-->

    
</head>
<body>
<div id="panel"><?$APPLICATION->ShowPanel();?></div>

<div id="fh5co-container">
    
	

	

    



