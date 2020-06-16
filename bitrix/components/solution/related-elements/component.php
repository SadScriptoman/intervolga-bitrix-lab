<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
/** @var CBitrixComponent $this */
/** @var array $arParams */
/** @var array $arResult */
/** @var string $componentPath */
/** @var string $componentName */
/** @var string $componentTemplate */
/** @global CDatabase $DB */
/** @global CUser $USER */
/** @global CMain $APPLICATION */


/*************************************************************************
	Processing of received parameters
*************************************************************************/
if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 180;

if(!is_array($arParams["IBLOCKS"]))
	$arParams["IBLOCKS"] = array($arParams["IBLOCKS"]);

$arIBlockFilter = array();
foreach($arParams["IBLOCKS"] as $IBLOCK_ID)
{
	$IBLOCK_ID=intval($IBLOCK_ID);
	if($IBLOCK_ID>0)
		$arIBlockFilter[]=$IBLOCK_ID;
}

if(empty($arIBlockFilter))
{
	if(!CModule::IncludeModule("iblock"))
	{
		ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
		return;
	}
	$rsIBlocks = CIBlock::GetList(array("sort" => "asc"), array(
		"type" => $arParams["IBLOCK_TYPE"],
		"LID" => SITE_ID,
		"ACTIVE" => "Y",
	));
	if($arIBlock = $rsIBlocks->Fetch())
		$arIBlockFilter[] = $arIBlock["ID"];
}

unset($arParams["IBLOCK_TYPE"]);
$arParams["PARENT_SECTION"] = intval($arParams["PARENT_SECTION"]);
$arParams["IBLOCKS"] = $arIBlockFilter;

if(!empty($arIBlockFilter) && $this->StartResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))
{
	if(!CModule::IncludeModule("iblock"))
	{
		$this->AbortResultCache();
		ShowError(GetMessage("IBLOCK_MODULE_NOT_INSTALLED"));
		return;
	}
	//SELECT
	$arSelect = array(
		"ID",
		"IBLOCK_ID",
		"CODE",
		"IBLOCK_SECTION_ID",
		"NAME",
		"PREVIEW_PICTURE",
		"DATE_ACTIVE_FROM",
		"PROPERTY_AUTHOR",
		"DETAIL_PAGE_URL"
	);
	//WHERE
	$arFilter = array(
		"IBLOCK_ID" => $arParams["IBLOCKS"],
		"ACTIVE_DATE" => "Y",
		"ACTIVE"=>"Y",
		"CHECK_PERMISSIONS"=>"Y",
	);
	if($arParams["PARENT_SECTION"]>0)
	{
		$arFilter["SECTION_ID"] = $arParams["PARENT_SECTION"];
		$arFilter["INCLUDE_SUBSECTIONS"] = "Y";
	}
	//ORDER BY
	$arSort = array(
		"RAND"=>"ASC",
	);

	$numToDisplay = (int) $arParams['NUM_TO_DISPLAY'];
	$iterator = 0;
	//EXECUTE
	$arResult["ITEMS"] = array();
	$elementID = (int) $arParams['ELEMENT_ID'];

	$rsElement = CIBlockElement::GetList($arSort, $arFilter, false, false, $arSelect);
	$rsElement->SetUrlTemplates($arParams["DETAIL_URL"]);

	while($obElement = $rsElement->GetNextElement())
	{

		if ($iterator >= $numToDisplay) break;

		$arItem = $obElement->GetFields();

		if ($elementID != (int) $arItem['ID']){

			$picture = $arItem['PREVIEW_PICTURE'];
			$arFileTmp = CFile::ResizeImageGet(
				$picture,
				array('width' => 490, 'height' => 353),        
				BX_RESIZE_IMAGE_EXACT,
				true
			);
		
			if($arFileTmp['src'])
				$arFileTmp['src'] = \CUtil::GetAdditionalFileURL($arFileTmp['src'], true);
		
			$arItem['PREVIEW_PICTURE'] = array_change_key_case($arFileTmp, CASE_UPPER);
		
			$rsUser = CUser::GetByID($arItem["PROPERTY_AUTHOR_VALUE"]);
			$arUser = $rsUser->Fetch();
		
			$arItem['AUTHOR'] = $arUser;
		
			$arResult["ITEMS"][] = $arItem;
		
			$iterator++;

		}
	}

	$this->SetResultCacheKeys(array());
	$this->IncludeComponentTemplate();
}
?>
