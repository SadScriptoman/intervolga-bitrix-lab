<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Отправить проект");
?>
<div class="full-page">
	<div class='container'>
		<h1 class='mb-32 text-center'>
    		Отправьте нам свой проект 
		</h1>
		<div class='d-flex justify-content-center'>
			<div class="half-sized">
				<?$APPLICATION->IncludeComponent(
					"bitrix:form.result.new", 
					"solution.feedback-form", 
					array(
						"CACHE_TIME" => "3600",
						"CACHE_TYPE" => "A",
						"CHAIN_ITEM_LINK" => "",
						"CHAIN_ITEM_TEXT" => "",
						"COMPONENT_TEMPLATE" => "solution.feedback-form",
						"EDIT_URL" => "",
						"IGNORE_CUSTOM_TEMPLATE" => "N",
						"LIST_URL" => "",
						"SEF_MODE" => "N",
						"SUCCESS_URL" => "success.php",
						"USE_EXTENDED_ERRORS" => "N",
						"WEB_FORM_ID" => "1",
						"VARIABLE_ALIASES" => array(
							"WEB_FORM_ID" => "WEB_FORM_ID",
							"RESULT_ID" => "RESULT_ID",
						)
					),
					false
				);?>
			</div>
		</div>
	</div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>