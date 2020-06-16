<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if (is_array($arResult['PICTURE'])):?>
	<img class='<?=$arResult['PICTURE']['CLASS']?>' src="<?=$arResult['PICTURE']['SRC']?>" alt="<?=$arResult['PICTURE']['ALT']?>">
<?else:?>
	<div>
		<?=GetMessage('PICTURE_NOT_FOUND')?>
	</div>
<?endif;?>