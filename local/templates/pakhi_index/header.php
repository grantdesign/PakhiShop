<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!DOCTYPE html>
<html>
<head>
	<?php 
	use Bitrix\Main\Page\Asset; 
	$APPLICATION->showHead();
	?>

	<title><?php $APPLICATION->showTitle(); ?></title>

	<?php
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/css/bootstrap.css');
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/css/style.css');
	Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH.'/css/nav.css');

	Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
	Asset::getInstance()->addString("<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>");

	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/js/jquery.min.js');
	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/js/jquery.easydropdown.js');
	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/js/scripts.js');
	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/js/classie.js');
	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/js/uisearch.js');
	Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH.'/js/jquery.mixitup.min.js');
	?>
</head>
<body>
	<div id="panel"><?php $APPLICATION->showPanel(); ?></div>
	<!-- header-section-starts -->
	<div class="header" id="home">
		<div class="top-header">
			<div class="container">

				<?$APPLICATION->IncludeComponent(
					"bitrix:main.include",
					"",
					Array(
						"AREA_FILE_SHOW" => "file",
						"AREA_FILE_SUFFIX" => "inc",
						"EDIT_TEMPLATE" => "",
						"PATH" => "/include/logo.php"
					)
				);?>

				<div class="header-top-right">
					<!-- start search-->

					<?$APPLICATION->IncludeComponent("bitrix:search.form", "search", Array(
	"PAGE" => "#SITE_DIR#search/index.php",	// Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
		"USE_SUGGEST" => "N",	// Показывать подсказку с поисковыми фразами
	),
	false
);?>

				<!-- search-scripts -->
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
				<!-- //search-scripts -->

				<a href="/personal/cart/"><i class="cart"></i></a>
			</div>

			<?$APPLICATION->IncludeComponent("bitrix:menu", "menu_catalog", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "2",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => "",	// Значимые переменные запроса
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "Y",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
		"COMPONENT_TEMPLATE" => "bootstrap_v4",
		"MENU_THEME" => "site",	// Тема меню
	),
			false
		);?>

	</div>
</div>
<div class="banner">