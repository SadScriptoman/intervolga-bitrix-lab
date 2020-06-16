<?

function RemoveCommentsWithoutPostAgent()
{
    if (CModule::IncludeModule('iblock')) {
        $arSelect = Array("ID", "IBLOCK_ID");
        $arFilter = Array("IBLOCK_ID"=>10, "PROPERTY_LINKED_ELEMENT"=>false);
        $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
        while($arItem = $res->GetNext())
        {
            $DB->StartTransaction();
            if(!CIBlockElement::Delete($arItem["ID"]))
            {
                CEventLog::Add(array(
                    "SEVERITY" => "ERROR",
                    "AUDIT_TYPE_ID" => "Удаление лишних комментариев",
                    "MODULE_ID" => "iblock",
                    "ITEM_ID" => $arItem["ID"],
                    "DESCRIPTION" => "Агент RemoveCommentsWithoutPostAgent не смог удалить комментарий!",
                ));                    
                $DB->Rollback();
            }
            else{
                CEventLog::Add(array(
                    "SEVERITY" => "DEBUG",
                    "AUDIT_TYPE_ID" => "Удаление лишних комментариев",
                    "MODULE_ID" => "iblock",
                    "ITEM_ID" => $arItem["ID"],
                    "DESCRIPTION" => "Агент RemoveCommentsWithoutPostAgent удалил комментарий!",
                ));                         
                $DB->Commit();
            }
        }
    }else{
        CEventLog::Add(array(
            "SEVERITY" => "ERROR",
            "AUDIT_TYPE_ID" => "Удаление лишних комментариев",
            "MODULE_ID" => "iblock",
            "DESCRIPTION" => "Агент RemoveCommentsWithoutPostAgent не смог подключить модуль инфобоков!",
        ));         
    }
    return __FUNCTION__ . "();";
}
