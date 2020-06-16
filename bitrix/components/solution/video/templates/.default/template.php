<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if ($arResult['NAME']):?>
	<figure class="about__img-holder">
		<div class="animate">
			<div class="animate-container"> 
				<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="about us">
				<a href="<?=$arResult['NAME']?>" class="play-btn icon-wave single-video-lightbox mfp-iframe" data-effect="mfp-zoom-in">
				</a>
			</div>
		</div>
	</figure>
<?else:?>
	<div>
		Элемента не существует!
	</div>
<?endif;?>