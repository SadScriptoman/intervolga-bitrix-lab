<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<?if (is_array($arResult['PICTURE'])):?>
	<!-- Project Image Full -->
	<section class="section-project-image-full pt-0">
		<div class="project__image-full">					
			<div class="animate">
				<div class="animate-container">
					<img class='<?=$arResult['PICTURE']['CLASS']?>' src="<?=$arResult['PICTURE']['SRC']?>" alt="<?=$arResult['PICTURE']['ALT']?>">
				</div>
			</div>
		</div>
	</section> <!-- end project image full -->
<?else:?>
	<div>
		<?=GetMessage('PICTURE_NOT_FOUND')?>
	</div>
<?endif;?>