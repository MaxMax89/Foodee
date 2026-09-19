<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мебельная компания"); ?>



<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH ."/inc/blocks/foodee.php", [], ["MODE"=>"PHP"]);?>
<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/inc/blocks/top_menu.php", [], ["MODE" => "PHP"]);?>
<?$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . "/inc/blocks/featured.php", [], ["MODE" => "PHP"]);?>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>