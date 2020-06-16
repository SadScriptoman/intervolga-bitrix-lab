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
<?if ((count($arResult["ITEMS"]) >= $maxItems) || ($maxItems == 0)):?>
	<div class="row">
		<?foreach($arResult["ITEMS"] as $key => $arItem):
			$rsUser = CUser::GetByID($arItem["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']);
			$arUser = $rsUser->Fetch();
			if (($key > $maxItems) && ($maxItems > 0)) break;?>
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="animate">
					<div class="animate-container">
			            <article class="entry" itemscope="" itemtype="http://schema.org/Article">
						    <div class="entry__header hover-shrink">
			                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="entry__img-url hover-shrink--shrink"> 
									<img src="<?=$arItem["PICTURE"]["SRC"]?>" class="entry__img hover-shrink--zoom" itemprop="image" alt="<?=$arItem["PICTURE"]["ALT"]?>"> 
								</a>
						    </div>
						    <div class="entry__body">
						    	<div class="entry__meta">
									<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="<?=$arItem["DISPLAY_ACTIVE_FROM"]?>"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></span> 
						    	</div>
						    	<h4 class="entry__title title-underline"> 
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" itemprop="headline"><?=$arItem["NAME"]?></a> 
								</h4>
						    	<div class="entry__meta">
			                    	<span class="entry__meta-item entry__meta-author">
										<span class="entry__meta-author-name" itemprop="author"><?=$arUser["NAME"].' '.$arUser["LAST_NAME"]?></span> 
									</span>
						    	</div>
						    </div>
			            </article>
					</div>
				</div>
			</div>
		<?endforeach;?>
	</div>
	<div class="text-center mt-72">
		<?=$arResult["NAV_STRING"]?>   	
	</div>
<?else:?>
	<div>
		Количество элементов инфоблока не должно быть меньше <?=$maxItems?>!
	</div>
<?endif;?>
