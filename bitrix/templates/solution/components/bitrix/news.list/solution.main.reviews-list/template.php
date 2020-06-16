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
<!-- Testimonials --> 
<?if (count($arResult["ITEMS"]) >= $maxItems):?>
	<div class="row row-80">
		<?foreach($arResult["ITEMS"] as $arItem):?>
    		<div class="col-lg-6">
    			<div class="animate">
    				<div class="animate-container">
						<?
							$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
							$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
    					<div class="testimonial mb-md-40" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
    							<img alt="testimonial_1" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="testimonial__img">
							<?endif;?>
							<div class="testimonial__body">
    							<p class="testimonial__text">
									<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
										<?=$arItem["PREVIEW_TEXT"];?>
									<?endif;?>
								</p>
							 	<span class="testimonial__name"><?=$arItem["NAME"];?></span> 
								<span class="testimonial__company"><?=$arItem["DISPLAY_PROPERTIES"]['COMPANY']['VALUE']?></span>
    						</div>
    					</div>
    				</div>
    			</div>
			</div>
		<?endforeach;?>
	</div>
<?else:?>
	<div>
		Количество элементов инфоблока не должно быть меньше <?=$maxItems?>!
	</div>
<?endif;?>