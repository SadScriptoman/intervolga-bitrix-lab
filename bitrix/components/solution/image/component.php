<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arResult['PICTURE'] = [];
$arResult['PICTURE']['SRC'] = $arParams['PICTURE_SRC'];
$arResult['PICTURE']['ALT'] = $arParams['PICTURE_ALT'];
$arResult['PICTURE']['CLASS'] = $arParams['PICTURE_CLASS'];
$this->IncludeComponentTemplate();

?>