<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

function debug($data){
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}

function dump($data) {
	$str_table = "";
	$str_table .= "<table class='table_distances table table-striped table-bordered'>";
	$str_table .= "<tr>";
	foreach($data[0] as $key=>$val) { $str_table .= "<th>".$key."</th>"; }
	$str_table .= "</tr>";
	foreach($data as $item){
		$str_table .= "<tr>";
		foreach($item as $key=>$value){
			if(is_array($value)){
				$str_table .= "<td>".GetTable($value)."</td>";
			} else {
				$str_table .= "<td>".$value."</td>";
			}
		}
		$str_table .= "</tr>";
	}
	$str_table .= "</table>";
	return $str_table;
}