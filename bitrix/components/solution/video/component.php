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

use Bitrix\Main\Context;
use Bitrix\Main\Type\DateTime;

/*************************************************************************
	Processing of received parameters
*************************************************************************/
if(!isset($arParams["CACHE_TIME"]))
	$arParams["CACHE_TIME"] = 36000000;

$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);

$arParams["ELEMENT_ID"] = intval($arParams["~ELEMENT_ID"]);
if($arParams["ELEMENT_ID"] > 0 && $arParams["ELEMENT_ID"]."" != $arParams["~ELEMENT_ID"])
{
	if (CModule::IncludeModule("iblock"))
	{
		\Bitrix\Iblock\Component\Tools::process404(
			trim($arParams["MESSAGE_404"]) ?: GetMessage("VIDEO_ELEMENT_NOT_FOUND")
			,true
			,$arParams["SET_STATUS_404"] === "Y"
			,$arParams["SHOW_404"] === "Y"
			,$arParams["FILE_404"]
		);
	}
	return;
}


/*************************************************************************
			Start caching
*************************************************************************/

if($this->StartResultCache(false, ($arParams["CACHE_GROUPS"]==="N"? false: $USER->GetGroups())))
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
		"NAME",
		"PREVIEW_PICTURE",
	);
	//WHERE
	$arFilter = array(
		"IBLOCK_ACTIVE" => "Y",
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"ACTIVE_DATE" => "Y",
		"ACTIVE" => "Y",
	);
	//EXECUTE
	$rsElement = CIBlockElement::GetList(
		Array("SORT"=>"ASC"),
		$arFilter,
		false,
		Array("nPageSize"=>1),
		$arSelect
	);
	if($obElement = $rsElement->GetNextElement())
	{
		$arResult = $obElement->GetFields();
		if(isset($arResult["PREVIEW_PICTURE"]))
		{
			$arResult["PREVIEW_PICTURE"] = (0 < $arResult["PREVIEW_PICTURE"] ? CFile::GetFileArray($arResult["PREVIEW_PICTURE"]) : false);
			if ($arResult["PREVIEW_PICTURE"])
			{
				$arResult["PREVIEW_PICTURE"]["ALT"] = $arResult["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_ALT"];
				if ($arResult["PREVIEW_PICTURE"]["ALT"] == "")
					$arResult["PREVIEW_PICTURE"]["ALT"] = $arResult["NAME"];
				$arResult["PREVIEW_PICTURE"]["TITLE"] = $arResult["IPROPERTY_VALUES"]["ELEMENT_PREVIEW_PICTURE_FILE_TITLE"];
				if ($arResult["PREVIEW_PICTURE"]["TITLE"] == "")
					$arResult["PREVIEW_PICTURE"]["TITLE"] = $arResult["NAME"];
			}
		}
		$this->SetResultCacheKeys(array());
		$this->IncludeComponentTemplate();
	}
	else
	{
		$this->AbortResultCache();
	}
}

?>
