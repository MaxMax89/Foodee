<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="js-sticky">
	<div class="fh5co-main-nav">
		<div class="container-fluid">
			<div class="fh5co-menu-1">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"menu.top",
					array(
						"COMPONENT_TEMPLATE" => "menu.top",
						"ROOT_MENU_TYPE" => "top_left",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N"
					),
					false
				);?>
			</div>
			<div class="fh5co-logo">
				<a href="index.html">
					<? $APPLICATION->IncludeFile(
						"inc/top_title.php",
						Array(),
						Array("MODE"=>"html")
					); ?>
				</a>
			</div>
			<div class="fh5co-menu-2">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"menu.top",
					array(
						"COMPONENT_TEMPLATE" => "menu.top",
						"ROOT_MENU_TYPE" => "top_right",
						"MENU_CACHE_TYPE" => "N",
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MAX_LEVEL" => "1",
						"CHILD_MENU_TYPE" => "left",
						"USE_EXT" => "N",
						"DELAY" => "N",
						"ALLOW_MULTI_SELECT" => "N"
					),
					false
				);?>
			</div>
		</div>

	</div>
</div>

