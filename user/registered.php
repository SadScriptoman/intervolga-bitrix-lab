<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?if($USER->IsAuthorized()):
	$APPLICATION->SetTitle("Завершение регистрации");?>
	<section class="page-title index-title">
	    <div class="container relative">
			<div class="animate">
	    		<div class="animate-container">
					<h1 class="page-title__title">
						<?$APPLICATION->IncludeComponent(
	                		"bitrix:main.include",
	                		".default",
	                		Array(
	                			"AREA_FILE_SHOW" => "file",
	                			"AREA_FILE_SUFFIX" => "inc",
	                			"COMPONENT_TEMPLATE" => ".default",
	                			"EDIT_TEMPLATE" => "",
	                			"PATH" => "include/title.php"
	                		)
	                	);?>
					</h1>
					<div class="page-title__subtitle">
						<?$APPLICATION->IncludeComponent(
	                		"bitrix:main.include",
	                		".default",
	                		Array(
	                			"AREA_FILE_SHOW" => "file",
	                			"AREA_FILE_SUFFIX" => "inc",
	                			"COMPONENT_TEMPLATE" => ".default",
	                			"EDIT_TEMPLATE" => "",
	                			"PATH" => "include/subtitle.php"
	                		)
	                	);?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?else:
	$APPLICATION->SetTitle("Нет доступа");?>
	<div class='container pt-72 pb-72'>
		<a href='registartion.php'>Зарегестрируйтесь</a> или 
		<a href="#" data-toggle="modal" data-target="#login-form-modal">войдите</a>!
	</div>
<?endif;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>