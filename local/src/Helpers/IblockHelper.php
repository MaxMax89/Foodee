<?php

namespace Local\Helpers;



use Bitrix\Iblock\Iblock;
use Bitrix\Iblock\PropertyTable;

if (!\Bitrix\Main\Loader::includeModule('iblock')) {
	return;
}


class IblockHelper
{
	public function getDataClass(int $iblockId)
	{
		return Iblock::wakeUp($iblockId)->getEntityDataClass();
	}

	public function getLinkIblockId(int $iblockId, string $code): int
	{
		$property = PropertyTable::getList([
			'select' => ['LINK_IBLOCK_ID'],
			'filter' => ['IBLOCK_ID' => $iblockId, 'CODE' => $code],
		])->fetch();
		return (int)$property['LINK_IBLOCK_ID'];
	}
}