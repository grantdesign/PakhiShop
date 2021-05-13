<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>

<div class="signing text-right">
	<div class="container">
		<div class="sign-in">
			<a href="/auth">Sign In</a>
		</div>
		<div class="sign-up1">
			<a href="/auth/registration.php">Sign Up</a>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="banner-info text-center">
	<i class="shipping"></i>
	<h3>Shopping Place For Girls</h3>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enimcidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim</p>
	<a href="/catalog">All Products</a>
</div>
</div>
</div>
<div class="content">
	<div class="features-section">
		<div class="features-section-head text-center">
			<h3><span>F</span>eatured Items</h3>
			<p>“this weeks featured products”</p>
		</div>
		<div class="features-section-grids">
			<div class="features-section-grid">
				<img src="<?=DEFAULT_TEMPLATE_PATH?>/images/girl.png" alt="" />
				<div class="girl-info">
					<div class="lonovo">
						<div class="dress">
							<h4>Lolona Dress</h4>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut</p>
						</div>
						<div class="priceindollers">
							<h3>$ <span>689</span></h3>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<div class="container">
		<div class="products-section">
			<div class="products-section-head text-center">
				<h3><span>P</span>roducts</h3>
				<p>“check out our products”</p>
			</div>
			<div class="products-section-grids">

				<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "catalog_category", Array(
					"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
						"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
						"CACHE_GROUPS" => "N",	// Учитывать права доступа
						"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"CACHE_TYPE" => "N",	// Тип кеширования
						"COUNT_ELEMENTS" => "N",	// Показывать количество элементов в разделе
						"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",	// Показывать количество
						"FILTER_NAME" => "sectionsFilter",	// Имя массива со значениями фильтра разделов
						"IBLOCK_ID" => "4",	// Инфоблок
						"IBLOCK_TYPE" => "catalog",	// Тип инфоблока
						"SECTION_CODE" => "",	// Код раздела
						"SECTION_FIELDS" => array(	// Поля разделов
							0 => "CODE",
							1 => "NAME",
							2 => "",
						),
						"SECTION_ID" => "",	// ID раздела
						"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
						"SECTION_USER_FIELDS" => array(	// Свойства разделов
							0 => "",
							1 => "",
						),
						"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
						"TOP_DEPTH" => "1",	// Максимальная отображаемая глубина разделов
						"VIEW_MODE" => "LINE",	// Вид списка подразделов
					),
				false
			);?>

			<div id="portfoliolist">

				<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"catalog_list", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "#SITE_DIR#/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "catalog",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "CATEGORY",
			1 => "SIZE",
			2 => "SEASON",
			3 => "STYLE",
			4 => "",
		),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "catalog_list"
	),
	false
);?>

				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<div class="more">
				<div class="seemore">
					<a href="/catalog">See More</a>
				</div>
				<div class="allproducts">
					<a href="/catalog">All Products</a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>

		<!-- script-for-portfolio -->
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>

		<script type="text/javascript">
			$(function () {

				var filterList = {

					init: function () {

				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});

			},
			
			hoverEffect: function () {

				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
					);				

			}

		};
		
		// Run the show!
		filterList.init();

	});
</script>

</div>
</div>
<div class="container">

	<?$APPLICATION->IncludeComponent("bitrix:sender.subscribe", "subscribe", Array(
	"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CONFIRMATION" => "N",	// Запрашивать подтверждение подписки по email
		"HIDE_MAILINGS" => "Y",	// Скрыть список рассылок, и подписывать на все
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_HIDDEN" => "N",	// Показать скрытые рассылки для подписки
		"USER_CONSENT" => "N",	// Запрашивать согласие
		"USER_CONSENT_ID" => "0",	// Соглашение
		"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
		"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
		"USE_PERSONALIZATION" => "Y",	// Определять подписку текущего пользователя
	),
	false
);?>

</div>

<div class="contact-section">

	<?$APPLICATION->IncludeComponent(
		"bitrix:main.feedback", 
		"contact_form", 
		array(
			"EMAIL_TO" => "admin@mail.ru",
			"EVENT_MESSAGE_ID" => array(
			),
			"OK_TEXT" => "Ваше сообщение успешно отправлено.",
			"REQUIRED_FIELDS" => array(
			),
			"USE_CAPTCHA" => "N",
			"COMPONENT_TEMPLATE" => "contact_form"
		),
		false
	);?>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>