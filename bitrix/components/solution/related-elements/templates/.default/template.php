<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?foreach($arResult['ITEMS'] as $arItem):?>
<div>
	<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
		<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
				border="0"
				src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
				alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
				title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
				/></a><br />
	<?endif?>
	<h3><?=$arItem["NAME"]?></h3>
	<p><?=$arItem["AUTHOR"]['NAME'].' '.$arItem["AUTHOR"]['LAST_NAME']?></p>
	<p><?=$arItem["DATE_ACTIVE_FROM"]?></p>
</div>
<?
endforeach;
?>