<?php

namespace Local\Services;

use Local\Helpers\IblockHelper;


class ProductService
{

    private $dataClass;


    public function __construct(
        private IblockHelper $iblockHelper,
        private int $productIblockId,
    ) {
        $this->dataClass = $this->iblockHelper->getDataClass($this->productIblockId);
    }


    public function getProductByID($id): array
    {
        $result = [];

        $dataObj = $this->dataClass::getList([
            'select' => [
                'ID',
                'NAME',
                'PREVIEW_PICTURE',
                'PREVIEW_TEXT',
                'PRICE_VALUE'  => 'PRICE.VALUE',
                'DISHES_VALUE' => 'FEATURED_DISHES.ITEM'
            ],
            'filter' => ['ID' => $id],
        ]);

        while ($row = $dataObj->fetch()) {
            $result = [
                'ID'              => $row['ID'],
                'NAME'            => $row['NAME'],
                'PREVIEW_TEXT'    => $row['PREVIEW_TEXT'],
                'PREVIEW_PICTURE' => \CFile::GetPath($row['PREVIEW_PICTURE']),
                'PRICE'           => $row['PRICE_VALUE'],
            ];
        }

        return $result;
    }
}