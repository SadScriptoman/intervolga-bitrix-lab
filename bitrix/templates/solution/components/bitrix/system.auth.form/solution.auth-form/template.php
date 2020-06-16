<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

CJSCore::Init();

?>
<form id="login-form" class="contact-form name="system_auth_form<?=$arResult["RND"]?>" method="post" target="_top" action="<?=$arResult["AUTH_URL"]?>">
	<?if($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR']):?>
		<div class="form-group text-danger text-center">
			<?ShowMessage($arResult['ERROR_MESSAGE']);?>
		</div>
	<?endif;?>
	<?if($arResult["BACKURL"] <> ''):?>
		<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<?endif?>
	<?foreach ($arResult["POST"] as $key => $value):?>
		<input type="hidden" name="<?=$key?>" value="<?=$value?>" />
	<?endforeach?>
	<input type="hidden" name="AUTH_FORM" value="Y" />
	<input type="hidden" name="TYPE" value="AUTH" />
	<div class="form-group">
		<label for="login"><?=GetMessage('AUTH_LOGIN')?><abbr>*</abbr></label>
		<input type="text" name="USER_LOGIN" id="login" required="" maxlength="255" value="<?= \htmlspecialcharsbx($arResult['LAST_LOGIN']);?>">
	</div>
	<div class="form-group">
		<label for="password"><?=GetMessage('AUTH_PASSWORD')?><abbr>*</abbr></label>
		<input type="password" name="USER_PASSWORD" id="password" required="" maxlength="255" autocomplete='off'>
	</div>
	<?if ($arResult['STORE_PASSWORD'] == 'Y'):?>
		<div class="gdpr-checkbox">
			<label class="gdpr-checkbox__label">
				<input class="gdpr-checkbox__input" name="USER_REMEMBER" type="checkbox" value="Y">
				<span class="gdpr-checkbox__text"><?=GetMessage('AUTH_REMEMBER_ME')?></a>
				</span>
			</label>
		</div>
	<?endif?>
	<div class="text-center">
		<input id="login-form__submit" name="<?=$arResult['FIELDS']['action'];?>" type="submit" class="btn btn--lg btn--color" value="<?=GetMessage('AUTH_LOGIN_BUTTON')?>">
	</div>
</form>


<?if ($arResult['AUTH_FORGOT_PASSWORD_URL']):?>
	<div class='text-center'>
		<noindex>
			<a href="<?=$arResult['AUTH_FORGOT_PASSWORD_URL'];?>" rel="nofollow">
				<?=GetMessage('AUTH_FORGOT_PASSWORD_2')?>
			</a>
		</noindex>
	</div>
<?endif;?>


<?if ($arResult['AUTH_REGISTER_URL']):?>
	<div class="text-center">
		<noindex>
			<a href="<?=$arResult['AUTH_REGISTER_URL'];?>" rel="nofollow">
				<?=GetMessage('AUTH_REGISTER')?>
			</a>
		</noindex>
</div>
<?endif;?>

<script type="text/javascript">
	<?if ($arResult['LAST_LOGIN'] != ''):?>
		try{
			document.USER_PASSWORD.focus();
		}catch(e){}
	<?else:?>
		try{
			document.USER_LOGIN.focus();
		}catch(e){}
	<?endif?>
</script>