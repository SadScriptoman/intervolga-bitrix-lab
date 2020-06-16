<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(!$arResult["NavShowAlways"])
{
   if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
      return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");

?>

<div class="pagination d-flex justify-content-center">                
	<nav class="pagination__nav clearfix" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
	
        <?if($arResult["bDescPageNumbering"] === true):?>
        
            <?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
                <?if($arResult["bSavePage"]):?>
                    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" class="pagination__page"><i class="ui-arrow-left"></i></a>
                <?else:?>
                    <?if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
                        <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="pagination__page"><i class="ui-arrow-left"></i></a>            
                    <?else:?>
                        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="pagination__page"><i class="ui-arrow-left"></i></a>            
                    <?endif?>
                <?endif?>
            <?else:?>
                <a href="" class="pagination__page pagination__page--disabled"><i class="ui-arrow-left"></i></a>            
            <?endif?>
            
            <?while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
                <?$NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>
                <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                    <a href="#" class="pagination__page pagination__page--active"><?=$NavRecordGroupPrint?></a>
                <?elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
                    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="pagination__page"><?=$NavRecordGroupPrint?></a>

                <?else:?>
                    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" class="pagination__page"><?=$NavRecordGroupPrint?></a>
                <?endif?>
                <?$arResult["nStartPage"]--?>
            <?endwhile?>
                
            <?if ($arResult["NavPageNomer"] > 1):?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="pagination__page"><i class="ui-arrow-right"></i></a>
            <?else:?>
                <a href="#" class="pagination__page pagination__page--disabled"><i class="ui-arrow-right"></i></a>
            <?endif?> 
            
            
        <?else:?>
        
            <?if ($arResult["NavPageNomer"] > 1):?>
                <?if($arResult["bSavePage"]):?>
                    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="pagination__page"><i class="ui-arrow-left"></i></a>
                <?else:?>
                   <?if ($arResult["NavPageNomer"] > 2):?>
                        <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>" class="pagination__page"><i class="ui-arrow-left"></i></a>
                   <?else:?>
                        <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="pagination__page"><i class="ui-arrow-left"></i></a>
                   <?endif?>
                <?endif?>
            <?else:?>
                <a href="#" class="pagination__page pagination__page--disabled"><i class="ui-arrow-left"></i></a>
            <?endif?>
            
            <?while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>
                <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                    <a href="#" class="pagination__page pagination__page--active"><?=$arResult["nStartPage"]?></a>
                <?elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
                    <a href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>" class="pagination__page"><?=$arResult["nStartPage"]?></a>
                <?else:?>
                    <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>" class="pagination__page"><?=$arResult["nStartPage"]?></a>
                <?endif?>
                <?$arResult["nStartPage"]++?>
            <?endwhile?>
                
            <?if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
                <a href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>" class="pagination__page"><i class="ui-arrow-right"></i></a>
            <?else:?>
                <a href="#" class="pagination__page pagination__page--disabled"><i class="ui-arrow-right"></i></a>
            <?endif?>
            
        <?endif?>
            
    </nav>
</div>