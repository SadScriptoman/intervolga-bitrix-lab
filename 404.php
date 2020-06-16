<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Не найдено");?>

<div class='container pt-72 pb-72 text-center'>
	<h1 style='font-size: 256px;'>
		<i id="o-puzzle-1" class="o-puzzle-1 icon-preview"></i>
	</h1>
	<h1>Такой страницы не существует!</h1>
	<h4><a href='/'>Вернуться на главную</a></h4>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>