<?php


class TOOLS
{
	public static function getElementByID($IBLOCK_ID, $ID){
		$result = [];
		$resultElement = CIBlockElement::GetList(["SORT"=> "ASC"], ["IBLOCK_ID" => $IBLOCK_ID, "ACTIVE" => "Y", "ID" => $ID],
			false,false, ["IBLOCK_ID", "ID", 'NAME', 'SECTION_ID', 'PREVIEW_TEXT', 'DETAIL_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_*']);

		if($obElement = $resultElement->GetNextElement()){
			$arFields = $obElement->GetFields();
			$arProps  = $obElement->GetProperties();

			$result   = $arFields;
			$result["PROPERTIES"] = $arProps;
		}
		return $result;
	}



}