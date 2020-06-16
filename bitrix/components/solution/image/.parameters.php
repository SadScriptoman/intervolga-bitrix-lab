<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();


$arComponentParameters = array(
	"GROUPS" => array(
	),
	"PARAMETERS" => array(
		"PICTURE_SRC" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("PICTURE_SRC"),
			"TYPE" => "FILE",
		),
		"PICTURE_ALT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("PICTURE_ALT"),
			"TYPE" => "STRING",
		),
		"PICTURE_CLASS" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("PICTURE_CLASS"),
			"TYPE" => "STRING",
		),
	),
);
