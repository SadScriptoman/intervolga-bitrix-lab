<?
$dbResSect = CIBlockSection::GetList(
   Array("SORT"=>"ASC"),
   Array("IBLOCK_ID"=>$arParams['IBLOCK_ID'])
);
//Получаем разделы и собираем в массив
while($sectRes = $dbResSect->GetNext())
{
    $arSections[] = $sectRes;
}

$arResult["SECTIONS"] =  $arSections;

foreach($arSections as $arSection){   
    foreach($arResult["ITEMS"] as $key=> &$arItem){  
        if($arItem['IBLOCK_SECTION_ID'] == $arSection['ID']){
            $arItem['IBLOCK_SECTION_NAME'] = $arSection['NAME'];
            $arItem['IBLOCK_SECTION_CODE'] = $arSection['CODE'];
            $arItem['IBLOCK_SECTION_URL'] = $arSection['SECTION_PAGE_URL'];
            $arItem['PICTURE'] = array();

            $picture = $arItem['DETAIL_PICTURE'] ? $arItem['DETAIL_PICTURE'] : $arItem['PREVIEW_PICTURE'];
            $arFileTmp = CFile::ResizeImageGet(
                $picture,
                array('width' => 544, 'height' => 392),
                BX_RESIZE_IMAGE_EXACT,
                true
            );
        
            if($arFileTmp['src'])
                $arFileTmp['src'] = \CUtil::GetAdditionalFileURL($arFileTmp['src'], true);
        
            $arItem['PICTURE'] = array_change_key_case($arFileTmp, CASE_UPPER);
        
        } 
    }
}


?>