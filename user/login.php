<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Войти");
?>
<div class="full-page">
    <?if (!$USER->IsAuthorized()):?>
	    <div class='container'>
	    	<h1 class='mb-32 text-center'>
        		Войти в аккаунт
	    	</h1>
	    	<div class='d-flex justify-content-center'>
	    		<div class="half-sized">
                    <?$APPLICATION->IncludeComponent(
	    				"bitrix:system.auth.form",
	    				"solution.auth-form",
	    				Array(
	    					"FORGOT_PASSWORD_URL" => "/user/index.php?forgot_password=yes",
	    					"PROFILE_URL" => "/user/profile.php",
	    					"REGISTER_URL" => "/user/register.php",
	    					"SHOW_ERRORS" => "Y"
	    				)
	    			);?>
	    		</div>
	    	</div>
        </div>
    <?else:?>
        <h1 class='mt-32 mb-32 text-center'>
        	Вы успешно авторизовались!
        </h1>
        <?
	        LocalRedirect('/');
        ?>
    <?endif;?>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>