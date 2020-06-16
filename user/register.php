<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Регистрация");
?><?$APPLICATION->IncludeComponent(
	"bitrix:main.register", 
	"solution.register", 
	array(
		"AUTH" => "Y",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "LAST_NAME",
			2 => "EMAIL",
		),
		"SET_TITLE" => "Y",
		"SHOW_FIELDS" => array(
			0 => "NAME",
			1 => "LAST_NAME",
			2 => "EMAIL",
		),
		"SUCCESS_PAGE" => "/user/registered.php",
		"USER_PROPERTY" => array(
		),
		"USER_PROPERTY_NAME" => "",
		"USE_BACKURL" => "Y",
		"COMPONENT_TEMPLATE" => "solution.register"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>