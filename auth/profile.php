<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "Профиль пользователя");
$APPLICATION->SetPageProperty("title", "Профиль пользователя");
$APPLICATION->SetPageProperty("keywords", "Профиль пользователя");
$APPLICATION->SetPageProperty("description", "Профиль пользователя");
$APPLICATION->SetTitle("Профиль пользователя");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.profile", 
	"profile", 
	array(
		"CHECK_RIGHTS" => "N",
		"SEND_INFO" => "N",
		"SET_TITLE" => "Y",
		"USER_PROPERTY" => array(
			0 => "UF_IM_SEARCH",
		),
		"USER_PROPERTY_NAME" => "",
		"COMPONENT_TEMPLATE" => "profile"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>