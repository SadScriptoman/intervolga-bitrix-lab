<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"LINK" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_LINK"),
			"TYPE" => "STRING",
		),
		"TEXT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IBLOCK_TEXT"),
			"TYPE" => "STRING",
		),
	),
);