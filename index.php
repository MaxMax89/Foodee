<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания"); ?><?/*$APPLICATION->IncludeComponent(
	"foodee:featured_dishes", 
	".default", 
	[
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "Home_page",
		"COMPONENT_TEMPLATE" => ".default"
	],
	false
);*/?><?$APPLICATION->IncludeComponent(
	"foodee:featured_dishes",
	"",
	Array(
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "products"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>