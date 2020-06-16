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
<!-- Project Slider -->
<div class="projects-slider">
	<?foreach($arResult["ITEMS"] as $arItem):?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		
		<div class="flickity-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
    	    <article class="project project-slide hover-shrink"> 
    	        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="project__url"> 
    	            <figure class="project__img-holder hover-shrink--shrink"> 
    	                <img 
							alt="<?=$arItem["PICTURE"]["ALT"]?>" 
							src="<?=$arItem["PICTURE"]["SRC"]?>" 
							title="<?=$arItem["PICTURE"]["TITLE"]?>"
							class="project__img hover-shrink--zoom"
						> 
    	            </figure> 
    	        </a>
			    <div class="project__description-wrap">
			    	<div class="project__description">
			    		<h3 class="project__title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"];?></a></h3>
    	                <a href='<?=$arItem["IBLOCK_SECTION_URL"]?>' class="project__category"><?=$arItem["IBLOCK_SECTION_NAME"]?></a>
			    	</div>
			    </div>
    	    </article>
		</div>
	<?endforeach;?>
</div>
<!-- end slick-works-slider -->

