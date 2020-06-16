<?
$arSelect = array(
    "ID",
    "NAME",
    "DETAIL_PAGE_URL",
    "DETAIL_PICTURE",
 );
$arFilter = array (
    "IBLOCK_ID" => $arResult["IBLOCK_ID"],
    //"SECTION_CODE" => $arParams["SECTION_CODE"],
    "ACTIVE" => "Y",
    "CHECK_PERMISSIONS" => "Y",
);

$arNavParams = array(
    "nPageSize" => 1,
    "nElementID" => $arResult["ID"],
);
$arItems = Array();
$rsElement = CIBlockElement::GetList(array("active_from" => "asc") , $arFilter, false, $arNavParams, $arSelect);
$rsElement->SetUrlTemplates($arParams["DETAIL_URL"]);
while($obElement = $rsElement->GetNextElement()){

    $arItem = $obElement->GetFields();

    $arItem['PREVIEW_PICTURE'] = Array();
    $picture = $arItem['DETAIL_PICTURE'];
    $arFileTmp = CFile::ResizeImageGet(
        $picture,
        array('width' => 600, 'height' => 282),        
        BX_RESIZE_IMAGE_EXACT,
        true
    );

    if($arFileTmp['src'])
        $arFileTmp['src'] = \CUtil::GetAdditionalFileURL($arFileTmp['src'], true);

    $arItem['PREVIEW_PICTURE'] = array_change_key_case($arFileTmp, CASE_UPPER);
        
    $arItems[] = $arItem;
}

if(count($arItems)==3){
    $arResult["TORIGHT"] = Array("NAME"=>$arItems[2]["NAME"], "URL"=>$arItems[2]["DETAIL_PAGE_URL"], 'PREVIEW_PICTURE'=>$arItems[2]["PREVIEW_PICTURE"]);
    $arResult["TOLEFT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"], 'PREVIEW_PICTURE'=>$arItems[0]["PREVIEW_PICTURE"]);
}
elseif(count($arItems)==2){
    if($arItems[0]["ID"]!=$arResult["ID"]){
        $arResult["TOLEFT"] = Array("NAME"=>$arItems[0]["NAME"], "URL"=>$arItems[0]["DETAIL_PAGE_URL"], 'PREVIEW_PICTURE'=>$arItems[0]["PREVIEW_PICTURE"]);
    }
    else{
        $arResult["TORIGHT"] = Array("NAME"=>$arItems[1]["NAME"], "URL"=>$arItems[1]["DETAIL_PAGE_URL"], 'PREVIEW_PICTURE'=>$arItems[1]["PREVIEW_PICTURE"]);
    }
}
?> 