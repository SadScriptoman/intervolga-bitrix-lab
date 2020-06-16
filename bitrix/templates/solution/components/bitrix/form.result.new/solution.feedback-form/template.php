<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$email = '';
$name = '';
if ($USER->IsAuthorized()){
	$email = $USER->GetEmail();
	$name = $USER->GetFirstName().' '.$USER->GetLastName();
}

?>
<?if ($arResult["isFormErrors"] == "Y"):?><?=$arResult["FORM_ERRORS_TEXT"];?><?endif;?>

<?=$arResult["FORM_HEADER"]?>

	<?foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion):
		if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden'):?>
			<input type="hidden" name="form_hidden_<?=$arQuestion["STRUCTURE"][0]["ID"];?>" value="<?=$arQuestion['VALUE']?>">
		<?else:
			switch($arQuestion['STRUCTURE'][0]['FIELD_TYPE']){
				case 'email':
					if($email):?>
						<input type="hidden" name="form_email_<?=$arQuestion["STRUCTURE"][0]["ID"];?>" value="<?=$email?>">
					<?else:?>
						<div class="row row-16">
							<div class="col-lg-6">
								<div class="form-group">
									<label for="email_<?=$arQuestion['STRUCTURE'][0]['ID']?>"><?=$arQuestion['CAPTION']?><?if($arQuestion["REQUIRED"] == 'Y'):?><abbr>*</abbr><?endif?></label>
									<input type="email" value="<?=$arQuestion['VALUE']?>" name="form_email_<?=$arQuestion['STRUCTURE'][0]['ID']?>" value="<?=$arResult["AUTHOR_EMAIL"]?>" id="email_<?=$arQuestion['STRUCTURE'][0]['ID']?>" <?if($arQuestion["REQUIRED"] == 'Y'):?>required=""<?endif?>>
								</div>
							</div>
					<?endif;?>
				<?break;
				case 'text':
					if($name):?>
						<input type="hidden" name="form_text_<?=$arQuestion["STRUCTURE"][0]["ID"];?>" value="<?=$name?>">
					<?else:?>
							<div class="col-lg-6">
								<div class="form-group">
									<label for="name_<?=$arQuestion['STRUCTURE'][0]['ID']?>"><?=$arQuestion['CAPTION']?><?if($arQuestion["REQUIRED"] == 'Y'):?><abbr>*</abbr><?endif?></label>
									<input type="text" value="<?=$arQuestion['VALUE']?$arQuestion['VALUE']:$name;?>" name="form_text_<?=$arQuestion['STRUCTURE'][0]['ID']?>" value="<?=$arResult["AUTHOR_EMAIL"]?>" id="name_<?=$arQuestion['STRUCTURE'][0]['ID']?>" <?if($arQuestion["REQUIRED"] == 'Y'):?>required=""<?endif?>>
								</div>
							</div>
						</div>
					<?endif;?>
				<?break;
				case 'textarea':?>
					<label for="textarea_<?=$arQuestion['STRUCTURE'][0]['ID']?>"><?=$arQuestion['CAPTION']?><?if($arQuestion["REQUIRED"] == 'Y'):?><abbr>*</abbr><?endif?></label>
					<textarea name="form_textarea_<?=$arQuestion['STRUCTURE'][0]['ID']?>" id="textarea_<?=$arQuestion['STRUCTURE'][0]['ID']?>" rows="<?=$arQuestion['STRUCTURE'][0]['FIELD_HEIGHT']?>" <?if($arQuestion["REQUIRED"] == 'Y'):?>required=""<?endif?>><?=$arResult["MESSAGE"]?></textarea>   
				<?break;
			}
		endif;?>
	<?endforeach;

	if($arResult["isUseCaptcha"] == "Y"):?>
		<input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>">
		<label for="captcha_word">Защита от роботов<abbr>*</abbr></label>
        <div class='row'> 
            <div class="col-lg-8">
                <input id="captcha_word" name="captcha_word" type="text" size="30" maxlength="50" value="" autocomplete='off'>                
            </div>
            <div class="col-lg-4 mb-16">
                <img class='captcha-full' src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>">
            </div>
        </div>

	<?endif;?>
	<div class="text-center">
		<input type="submit" class="btn btn--lg btn--color" name="web_form_submit" value="<?=htmlspecialcharsbx(strlen(trim($arResult["arForm"]["BUTTON"])) <= 0 ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>" />
	</div>
<?=$arResult["FORM_FOOTER"]?>
