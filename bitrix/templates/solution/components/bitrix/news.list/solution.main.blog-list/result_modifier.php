<?


foreach($arResult["ITEMS"] as $key=> &$arItem){  


    $arItem['PICTURE'] = array();
    $picture = $arItem['DETAIL_PICTURE'] ? $arItem['DETAIL_PICTURE'] : $arItem['PREVIEW_PICTURE'];
    $arFileTmp = CFile::ResizeImageGet(
        $picture,
        array('width' => 490, 'height' => 353),        
        BX_RESIZE_IMAGE_EXACT,
        true
    );

    if($arFileTmp['src'])
        $arFileTmp['src'] = \CUtil::GetAdditionalFileURL($arFileTmp['src'], true);

    $arItem['PICTURE'] = array_change_key_case($arFileTmp, CASE_UPPER);
    
}


?>