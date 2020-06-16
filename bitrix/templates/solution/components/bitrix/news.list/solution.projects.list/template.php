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
<!-- Projects -->
<section class="section-projects pt-96">
    <div class="container-fluid p-0">

        <!-- Filter -->
		
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="project-filter">	
					<a href="#" class="filter active" data-filter="*">Все проекты</a>
					<?foreach($arResult["SECTIONS"] as $arSection):?>
                    	<a href="#" class="filter" data-filter=".<?=$arSection['CODE']?>"><?=$arSection['NAME']?></a>
					<?endforeach;?>
                </div>
            </div>
        </div> <!-- end filter -->

        <div id="project-grid" class="project-grid project-grid--2-col">

			<?foreach($arResult["ITEMS"] as $arItem):?>
				
				<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

            	<article class="grid-item project hover-shrink <?=$arItem['IBLOCK_SECTION_CODE']?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="project__url">
            	        <figure class="project__img-holder hover-shrink--shrink">
            	            <img src="<?=$arItem["PICTURE"]["SRC"]?>" class="project__img hover-shrink--zoom"
							alt="<?=$arItem["PICTURE"]["ALT"]?>">
            	        </figure>
            	    </a>
            	    <div class="project__description-wrap">
            	        <div class="project__description">
            	            <h3 class="project__title"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a></h3>
            	            <a href='<?=$arItem["IBLOCK_SECTION_URL"]?>' class="project__category"><?=$arItem["IBLOCK_SECTION_NAME"]?></a>
            	        </div>
            	    </div>
            	</article>
			<?endforeach;?>

        </div> <!-- end project grid -->
		
       	<div class="text-center mt-72">
		   	<?=$arResult["NAV_STRING"]?>   	
		</div>

    </div>
</section> <!-- end projects -->

