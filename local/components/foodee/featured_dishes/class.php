<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\Iblock;
use Bitrix\Main\FileTable;
use Bitrix\Iblock\PropertyTable;
use Local\Helpers\IblockHelper;
use Local\Services\ProductService;




if (!\Bitrix\Main\Loader::includeModule('iblock')) {
	return;
}

class HomeFeaturedComponent extends CBitrixComponent

{

	public function executeComponent()
	{
		$this->iblockHelper = new IblockHelper();


		$productIblockId = $this->iblockHelper->getLinkIblockId($this->arParams['IBLOCK_ID'], 'DISHES');


		$this->productService = new ProductService(
			$this->iblockHelper,
			$productIblockId
		);

		$this->arResult = $this->getDataTpl();

		$this->includeComponentTemplate();
	}

	private function getDataTpl():array
	{
		$result = [];
		$items = $this->getDataPage();

		$result['TITLE'] = $items['TITLE'];
		$result['PREVIEW_TEXT'] = $items['PREVIEW_TEXT'];
		$result['ICON'] = $items['ICON'];
		$result['BACKGROUND'] = $items['BACKGROUND'];

		$result['DISHES'] = [

				'TOP_BIG' => $items['DISHES'][0],
				'TOP_SMALL' => array_slice($items['DISHES'], 1, 2),


				'BOTTOM_SMALL' => array_slice($items['DISHES'], 3, 2),
				'BOTTOM_BIG' => $items['DISHES'][5],

		];
		return  $result;
	}
	private function getDataPage(): array
	{
		$result = [];

		$dataClass = $this->iblockHelper->getDataClass($this->arParams['IBLOCK_ID']);


		$dataObj = $dataClass::getList([
			'select' => [
				'ID',
				'PREVIEW_TEXT',
				'TITLE_VALUE'  => 'TITLE.VALUE',
				'ICON_LINK'    => 'ICON.VALUE',
				'BG_LINK'      => 'BACKGROUND.VALUE',
				'DISHES_LINKS' => 'DISHES.VALUE'
			],

		]);

		while ($row = $dataObj->fetch()) {

			$dishesLinks[] = $row['DISHES_LINKS'];

			$result['ID']           = $row['ID'];
			$result['TITLE']        = $row['TITLE_VALUE'];
			$result['PREVIEW_TEXT'] = $row['PREVIEW_TEXT'];
			$result['ICON']         = \CFile::GetPath($row['ICON_LINK']);
			$result['BACKGROUND']   = \CFile::GetPath($row['BG_LINK']);
		}

		foreach ($dishesLinks as $dishID){
			$result['DISHES'][] = $this->productService->getProductByID($dishID);
		}

		return $result;

	}


	private function getDishes($dishesLinks): array
	{

		$dishesIblockId = $this->getLinkIblockId();
		$dataClass = $this->getDataClass($dishesIblockId);

		$dataObj = $dataClass::getList([
			'select' => [
				'ID',
				'NAME',
				'PREVIEW_TEXT',
				'PREVIEW_PICTURE',
				'PRICE_VALUE' => 'PRICE.VALUE',
			],
			'filter' => ['ID' => $dishesLinks],
		]);

		while ($row = $dataObj->fetch()) {
			$result = [
				'ID' => $row['ID'],
				'NAME' => $row['NAME'],
				'PREVIEW_TEXT' => $row['PREVIEW_TEXT'],
				'PREVIEW_PICTURE' => \CFile::GetPath($row['PREVIEW_PICTURE']),
				'PRICE' => $row['PRICE_VALUE'],
			];
		}
		return $result;
	}
}