<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);
?>
<div class="logo-wrap local-scroll">
	<a href="/" class="logo__url">
		<?if(is_array($arResult["PICTURE"])):?>
			<img class="logo"
				src="<?=$arResult["PICTURE"]["SRC"]?>"
				alt="logo"
				itemtype="http://schema.org/Organization" 
				itemscope>
		<?endif?>
	</a>
</div>
