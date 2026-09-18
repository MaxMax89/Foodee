<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Loader;
use Bitrix\Iblock\Iblock;
use Bitrix\Main\FileTable;
use Bitrix\Iblock\PropertyTable;
use Local\Helpers\IblockHelper;
use Local\Services\ProductService;


if (!\Bitrix\Main\Loader::includeModule('iblock')) {
    return;
}

class HomeFoоdeeComponent extends CBitrixComponent

{

    public function executeComponent()
    {
        $this->iblockHelper = new IblockHelper();

        $this->arResult = $this->getDataPage();

        $this->includeComponentTemplate();
    }

    public function getDataPage(): array{
        $result = [];
        $dataClass = $this->iblockHelper->getDataClass($this->arParams['IBLOCK_ID']);

        $dataObj = $dataClass::getList(['select' => ['ID', 'PREVIEW_TEXT', 'TITLE_VALUE' => 'TITLE.VALUE', 'TEXT_LINK_VALUE' => 'TEXT_LINK.VALUE', 'LINK_VALUE' => 'LINK.VALUE', 'BG_IMAGES_LINKS' =>'BG_IMAGES.VALUE']]);

        while ($row = $dataObj->fetch()){
            $result['ID'] = $row['ID'];
            $result['TITLE'] = $row['TITLE_VALUE'];
            $result['PREVIEW_TEXT'] = $row['PREVIEW_TEXT'];
            $result['TEXT_LINK'] = $row['TEXT_LINK_VALUE'];
            $result['LINK'] = $row['LINK_VALUE'];
            $result['BG_IMAGES'][] = \CFile::GetPath($row['BG_IMAGES_LINKS']);
        }

        return $result;
    }


}