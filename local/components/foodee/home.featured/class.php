<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Iblock\Iblock;
use Bitrix\Main\FileTable;
use Bitrix\Main\ORM\Fields\Relations\Reference;
use Bitrix\Main\ORM\Query\Join;

if (!\Bitrix\Main\Loader::includeModule('iblock')) {
	return;
}

class HomeFeaturedComponent extends CBitrixComponent

{
	private array $arFilter  = ['FEATURED_DISHES_VALUE' => 8];

	public function executeComponent()
	{
		$this->arResult = $this->getItemsList();
		$this->includeComponentTemplate();
	}


	private function getItemsList(): array {
		$result = [];
		$dataClass = $this->getDataClass();


		$dataObj = $dataClass::getList([

			'select' => [
				'ID',
				'NAME',
				'PREVIEW_TEXT',
				],

		]);

		while($row = $dataObj->fetch()){
			//$row['PREVIEW_PICTURE_SRC'] = \CFile::GetPath($row['PREVIEW_PICTURE']);
			$result[] = $row;
		}
		return $result;


	}



	private function getDataClass(){
		$iblockId = $this->arParams['IBLOCK_ID'];
		return  Iblock::wakeUp($iblockId)->getEntityDataClass();
	}
}