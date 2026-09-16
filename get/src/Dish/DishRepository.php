<?php

namespace Local\Dish;




class DishRepository {

	public function getORM(){
		\Bitrix\Main\Loader::includeModule('iblock');
		$entity = \Bitrix\Iblock\Iblock::wakeUp(5)->getEntityDataClass();
		return $entity;
	}

	public function getList() {
		$table = $this->getORM();
		$result = $table::getList([
			"select" => ['ID', 'NAME', 'PRICE_VALUE' => 'PRICE.VALUE', 'FEATURED_DISHES_VALUE' => 'FEATURED_DISHES.ITEM.XML_ID']
		]);

		$dishes = [];

		while($row = $result->fetch()){
			$dishes[] = new Dish(
				(int)$row['ID'],
				$row['NAME'],
				(float)$row['PRICE_VALUE'],
				$row['FEATURED_DISHES_VALUE']
			);
		}
		return $dishes;

	}
}