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

foreach($arSections as $arSection){   
    if($arResult['IBLOCK_SECTION_ID'] == $arSection['ID']){
        $arResult['IBLOCK_SECTION_NAME'] = $arSection['NAME'];
        $arResult['IBLOCK_SECTION_CODE'] = $arSection['CODE'];
        $arResult['IBLOCK_SECTION_URL'] = $arSection['SECTION_PAGE_URL'];
    } 
}


?>