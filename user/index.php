<?
define("NEED_AUTH", true);
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Авторизация");?>
<div class='container mt-72 mb-72'>

<?
if (isset($_REQUEST["backurl"]) && strlen($_REQUEST["backurl"])>0) 
	LocalRedirect($backurl);
?>

<p>Вы зарегистрированы и успешно авторизовались.</p>
 
<p><a href="<?=SITE_DIR?>">Вернуться на главную страницу</a></p>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
