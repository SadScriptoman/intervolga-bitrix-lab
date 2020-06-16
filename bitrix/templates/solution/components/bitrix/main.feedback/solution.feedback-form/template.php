<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="alert alert-success"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form id="contact-form" class="contact-form" action="<?=POST_FORM_ACTION_URI?>" method="POST">
	<?=bitrix_sessid_post()?>

	<?if ($USER->isAuthorized()):?>
		<input type="hidden" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
		<input type="hidden" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
	<?else:?>
		<div class="row row-16">
			<div class="col-lg-6">
				<div class="form-group">
					<label for="name"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><abbr>*</abbr><?endif?></label>
					<input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" id="name" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>required=""<?endif?>>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group">
					<label for="email"><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><abbr>*</abbr><?endif?></label>
					<input type="email" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" id="email" <?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?>required=""<?endif?>>
				</div>
			</div>
		</div>
	<?endif;?>

	<label for="message"><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><abbr>*</abbr><?endif?></label>
	<textarea name="MESSAGE" id="message" rows="6"><?=$arResult["MESSAGE"]?></textarea>              

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="mf-captcha">
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
			<div class='text-center mt-32 mb-24'>
				<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" class='captcha' alt="CAPTCHA">
			</div>
			<div class="form-group">
				<label for="captcha"><?=GetMessage("MFT_CAPTCHA_CODE")?><abbr>*</abbr></label>
				<input type="text" id="captcha" name="captcha_word" size="30" maxlength="50" value="">
			</div>
		</div>
	<?endif;?>

	<input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">

	<div class="text-center">
		<input id="contact-form__submit" type="submit" name='submit' class="btn btn--lg btn--color" value="<?=GetMessage("MFT_SUBMIT")?>">
	</div>

</form>