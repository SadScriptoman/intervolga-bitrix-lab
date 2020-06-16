<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @global CMain $APPLICATION
 * @global CUser $USER
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 */

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
	die();

if($arResult["SHOW_SMS_FIELD"] == true)
{
	CJSCore::Init('phone_auth');
}
?>
<?if($USER->IsAuthorized()):?>
	<section class="page-title index-title">
    	<div class="container relative">
			<h1 class="page-title__title"><?echo GetMessage("MAIN_REGISTER_AUTH")?></h1>
			<a href='/'><p class="page-title__subtitle">На главную</p></a>
		</div>
	</section>
<?else:?>
	<div class="container pt-72 pb-72 d-flex justify-content-center">
		<div class='half-sized'>
			<h1>
				<?=GetMessage("AUTH_REGISTER")?>
			</h1>
			<?if (count($arResult["ERRORS"]) > 0):
				foreach ($arResult["ERRORS"] as $key => $error)
					if (intval($key) == 0 && $key !== 0) 
						$arResult["ERRORS"][$key] = str_replace("#FIELD_NAME#", "&quot;".GetMessage("REGISTER_FIELD_".$key)."&quot;", $error);
				ShowError(implode("<br />", $arResult["ERRORS"]));
			elseif($arResult["USE_EMAIL_CONFIRMATION"] === "Y"):?>
				<p><?echo GetMessage("REGISTER_EMAIL_WILL_BE_SENT")?></p>
			<?endif?>
			<form method="post" action="<?=POST_FORM_ACTION_URI?>" name="regform" enctype="multipart/form-data">
				<?if($arResult["BACKURL"] <> ''):
					?>
						<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
					<?
				endif;
			
				foreach ($arResult["SHOW_FIELDS"] as $FIELD):?>
					<div class="form-group">
						<?switch ($FIELD){
							case "EMAIL":?>
								<label for="email"><?=GetMessage('REGISTER_FIELD_EMAIL')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="email" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="email" required="" >
								<?break;
							case "LOGIN":?>
								<label for="login"><?=GetMessage('REGISTER_FIELD_LOGIN')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="login" required="" >
								<?break;
							case "PASSWORD":?>
								<label for="password"><?=GetMessage('REGISTER_FIELD_PASSWORD')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="password" required="" minlength=6 maxlength="255" autocomplete='off'>
								<?break;
							case "CONFIRM_PASSWORD":?>
								<label for="rep-password"><?=GetMessage('REGISTER_FIELD_CONFIRM_PASSWORD')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="password" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="rep-password" required="" minlength=6 maxlength="255" autocomplete='off'>
								<?break;
							case "LAST_NAME":?>
								<label for="lastname"><?=GetMessage('REGISTER_FIELD_LAST_NAME')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="lastname" required="" >
								<?break;
							case "NAME":?>
								<label for="name"><?=GetMessage('REGISTER_FIELD_NAME')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="name" required="" >
								<?break;
							case "SECOND_NAME":?>
								<label for="secondname"><?=GetMessage('REGISTER_FIELD_SECOND_NAME')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="text" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="secondname" required="" >
								<?break;
							case "PERSONAL_BIRTHDAY":?>
				    			<label for="birthday"><?=GetMessage('REGISTER_FIELD_PERSONAL_BIRTHDAY')?><?if ($arResult["REQUIRED_FIELDS_FLAGS"][$FIELD] == "Y"):?><abbr>*</abbr><?endif?></label>
								<input type="date" name="REGISTER[<?=$FIELD?>]" value="<?=$arResult["VALUES"][$FIELD]?>" id="birthday" required="" >
								<?break;
							case "PERSONAL_GENDER":?>
				    			<label for="gender"><?=GetMessage('REGISTER_FIELD_PERSONAL_GENDER')?></label>
								<select id="gender" name="REGISTER[<?=$FIELD?>]">
									<option value=""><?=GetMessage("USER_DONT_KNOW")?></option>
									<option value="M"<?=$arResult["VALUES"][$FIELD] == "M" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_MALE")?></option>
									<option value="F"<?=$arResult["VALUES"][$FIELD] == "F" ? " selected=\"selected\"" : ""?>><?=GetMessage("USER_FEMALE")?></option>
								</select>
								<?break;
						}?>
					</div>
				<?endforeach;
				if ($arResult["USE_CAPTCHA"] == "Y"):?>
					<label for="captcha"><?=GetMessage('REGISTER_CAPTCHA_TITLE')?></label>
					<input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
					<img id = 'captcha' src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
					<div>
						<div><?=GetMessage("REGISTER_CAPTCHA_PROMT")?>:<span class="starrequired">*</span></div>
						<div><input type="text" name="captcha_word" maxlength="50" value="" autocomplete="off" /></div>
					</div>
				<?endif;?>
				<div class='text-center'>
					<?=$arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?>
					<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>
				</div>
				<div class='text-center'>
					<input type="submit" class="btn btn--lg btn--color" value="<?=GetMessage("main_register_sms_send")?>">
				</div>
			</form>
		</div>
	</div>
<?endif?>