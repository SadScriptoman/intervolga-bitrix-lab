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
$maxItems = (int) $arParams['DISPLAY_NUM'];
?>

<div class="row">
	<?foreach($arResult["ITEMS"] as $key => $arItem):?>
		<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="col-lg-<?=12/$maxItems?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="animate animate--animated">
				<div class="animate-container">
					<div class="team">
						<img alt="team 1" src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" class="team__img">
						<h4 class="team__name"><?=$arItem['NAME']?></h4>
						<span class="team__position"><?=$arItem['DISPLAY_PROPERTIES']['POST']['VALUE']?></span>
						<?if (count($arItem['DISPLAY_PROPERTIES']) > 1):?>
							<div class="socials socials--rounded mt-16">
								<?foreach($arItem['DISPLAY_PROPERTIES'] as $propKey => $arProp):
									$value = $arProp['VALUE'];
									if ($value){
										switch($propKey){
											case 'VK':?>
												<a href="<?=$value?>" class="social social-vkontakte" aria-label="vkontakte" title="Вконтакте" target="_blank"><i class="ui-vkontakte"></i></a> 
											<?break;
											case 'FB':?>
												<a href="<?=$value?>" class="social social-facebook" aria-label="facebook" title="Facebook" target="_blank"><i class="ui-facebook"></i></a> 
											<?break;
											case 'TW':?>
												<a href="<?=$value?>" class="social social-twitter" aria-label="twitter" title="Twitter" target="_blank"><i class="ui-twitter"></i></a> 
											<?break;
										}
									}
								endforeach;?>
							</div>
						<?endif;?>
					</div>
				</div>
			</div>
		</div>
	<?endforeach;?>
</div>

