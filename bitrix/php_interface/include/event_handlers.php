<?

AddEventHandler("iblock", "OnBeforeIBlockElementDelete", Array("CIBlockHandler", "OnBeforeIBlockElementDeleteHandler"));

class CIBlockHandler
{
    function OnBeforeIBlockElementDeleteHandler($ID)
    {   

        $res = CIBlockElement::GetByID($ID);
        if($arFields = $res->GetNext()){
            if ($arFields['IBLOCK_ID'] = 1){
                $ID = (int) $arFields['ID'];

                $arSelect = Array("ID", "IBLOCK_ID", "PROPERTY_LINKED_ELEMENT");
                $arFilter = Array('IBLOCK_ID' => 10);
                $res = CIBlockElement::GetList(Array(), $arFilter, false, false, $arSelect);
                $arResult = Array();
                while($ob = $res->GetNextElement()){ 
                    $arComment = $ob->GetFields();  
                    if (($arComment['PROPERTY_LINKED_ELEMENT_VALUE'] == $ID)) {
                        $COMMENT_ID = (int) $arComment['ID'];
                        if(!CIBlockElement::Delete($COMMENT_ID)){
                            global $APPLICATION;
                            $APPLICATION->throwException("Метод Delete не сработал");
                            return false;
                        }
                    }
                }
            }
        }else{
            global $APPLICATION;
            $APPLICATION->throwException("Элемента с таким ID не найдено!");
            return false;
        }

    }
}
?>