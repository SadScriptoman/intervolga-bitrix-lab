<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("IBLOCK_NAME"),
	"DESCRIPTION" => GetMessage("IBLOCK_DESC"),
	"PATH" => array(
		"ID" => "solution",
		"SORT" => 1000,
		"NAME" => GetMessage("IBLOCK_CHILD_NAME")
	),
);

?>