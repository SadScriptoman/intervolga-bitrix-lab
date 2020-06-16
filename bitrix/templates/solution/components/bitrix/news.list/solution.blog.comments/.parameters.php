<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
CModule::IncludeModule('iblock'); 
$arPropList = array();
$rsProps = CIBlockElement::GetList(Array("SORT"=>"ASC"),Array('IBLOCK_ID' => 1, 'ACTIVE' => 'Y'), false, false, Array('ID', 'NAME'));
while ($arProp = $rsProps->Fetch())
{
   $arPropList[$arProp['ID']] = '['.$arProp['ID'].'] '.$arProp['NAME'];
}
$arTemplateParameters = array(
	"LINKED_ELEMENT" => Array(
		"PARENT" => "BASE",
		"NAME" => GetMessage("LINKED_ELEMENT"),
		"TYPE" => "LIST",
		'VALUES' => $arPropList,
	),
);
?>
