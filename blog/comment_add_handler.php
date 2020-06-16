<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die('Скрипт должен быть запущен в битриксе');
?>
<?
if($APPLICATION->CaptchaCheckCode($_POST["captcha_word"], $_POST["captcha_code"]) || ($USER->IsAuthorized()))
{
    if (CModule::IncludeModule('iblock')) {
        $el = new CIBlockElement;

        $fields = array(
            "DATE_CREATE" => date("d.m.Y H:i:s"),
            "DATE_ACTIVE_FROM" => date("d.m.Y H:i:s"),
            "IBLOCK_ID" => 10,
            "NAME" => strip_tags($_POST['authorName']),
            "ACTIVE" => "Y",
            "PREVIEW_TEXT" => strip_tags($_REQUEST['comment']),
            "PROPERTY_VALUES" => [
                "LINKED_USER" => NULL,
                "LINKED_USER_AVATAR" => NULL,
                "LINKED_ELEMENT" => (int) $_POST['linkedElement'],
                "LINKED_IBLOCK_ID" => (int) $_POST['linkedIblockID'],
            ]
        );
        
        if ($USER->IsAuthorized()){
            $pic = CFile::GetFileArray($USER->GetParam('PERSONAL_PHOTO'));
            if (is_array($pic)){
                $fields['PROPERTY_VALUES']['LINKED_USER_AVATAR'] = $pic['SRC'];
            }
            $fields['PROPERTY_VALUES']['LINKED_USER'] = $USER->GetID();
        }
    
        if ($ID = $el->Add($fields)) {
            header('Location: '.$_SERVER['HTTP_REFERER']);
        } else {
            echo '<p>Ошибка при добавлении:<br>'.$el->LAST_ERROR.'</p>';
        }
    }
    
}else{
    die('<p>Капча введена неправильно!</p>');
}
?>