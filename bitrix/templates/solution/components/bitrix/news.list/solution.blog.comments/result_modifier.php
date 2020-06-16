<?
$arResultItems = [];

foreach($arResult["ITEMS"] as $key => $arItem){  

    if ($arItem['PROPERTIES']['LINKED_ELEMENT']['VALUE'] != $arParams['LINKED_ELEMENT']) {
        continue;
    }

    $arItem['PICTURE'] = array();
    $picture = $arItem['DETAIL_PICTURE'] ? $arItem['DETAIL_PICTURE'] : $arItem['PREVIEW_PICTURE'];
    $arFileTmp = CFile::ResizeImageGet(
        $picture,
        array('width' => 50, 'height' => 50),        
        BX_RESIZE_IMAGE_EXACT,
        true
    );

    if($arFileTmp['src'])
        $arFileTmp['src'] = \CUtil::GetAdditionalFileURL($arFileTmp['src'], true);

    $arItem['PICTURE'] = array_change_key_case($arFileTmp, CASE_UPPER);

    $arResultItems[] = $arItem;
    
}

$arResult["ITEMS"] = $arResultItems;

?>