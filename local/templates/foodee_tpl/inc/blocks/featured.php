<?
global $featuredFilter;
$featuredFilter = ['PROPERTY_FEATURED_DISHES' => 8];
?>

<?$APPLICATION->IncludeComponent(
    "foodee:featured_dishes",
    "",
    Array(
        "IBLOCK_ID" => "7",
        "IBLOCK_TYPE" => "products"
    )
);?>