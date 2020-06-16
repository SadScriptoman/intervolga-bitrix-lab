<?CModule::IncludeModule('iblock');
$LINKED_IBLOCK_ID = 1;
include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
$cpt = new CCaptcha();
$captchaPass = COption::GetOptionString("main", "captcha_password", "");
if(strlen($captchaPass) <= 0)
{
    $captchaPass = randString(10);
    COption::SetOptionString("main", "captcha_password", $captchaPass);
}
$cpt->SetCodeCrypt($captchaPass);
?>

<!-- Comment Form -->
<div class="comment-respond">
	<h5 class="comment-respond__title">Написать комментарий</h5>
	<form name="add_my_ankete" action="/blog/comment_add_handler.php" method="POST" enctype="multipart/form-data" id="commentform" class="comment-form" novalidate="">
        <input name="linkedIblockID" type="hidden" value="<?=$LINKED_IBLOCK_ID?>" required="required">
        <input name="linkedElement" type="hidden" value="<?=$arResult['ID']?>" required="required">
        <?if (!$USER->IsAuthorized()):?>
            <div class="row row-16">
		    	<div class="col-lg-6">
		    		<label for="author">Имя<abbr>*</abbr></label>
		    		<input id="author" name="authorName" type="text" value="Гость"
		    			required="required">
		    	</div>
		    	<div class="col-lg-6">
		    		<label for="comment-email">Email<abbr>*</abbr></label>
		    		<input id="comment-email" name="email" type="text" value=""
		    			required="required">
		    	</div>
            </div>
            <label for="comment">Комментарий<abbr>*</abbr></label>
            <textarea id="comment" class="form-control" name="comment" rows="6"
            required="required"></textarea>
            <input name="captcha_code" value="<?=htmlspecialchars($cpt->GetCodeCrypt());?>" type="hidden">
            <label for="captcha_word">Защита от роботов<abbr>*</abbr></label>
            <div class='row'> 
                <div class="col-lg-8">
                    <input id="captcha_word" name="captcha_word" type="text">                
                </div>
                <div class="col-lg-4 mb-16">
                    <img class='captcha-full' src="/bitrix/tools/captcha.php?captcha_code=<?=htmlspecialchars($cpt->GetCodeCrypt());?>">
                </div>
            </div>
        <?else:?>
            <input name="authorID" type="hidden" value="<?=$USER->GetID()?>" required="required">
            <input name="authorName" type="hidden" value="<?=$USER->GetFirstName().' '.$USER->GetLastName()?>" required="required">
            <input name="email" type="hidden" value="<?=$USER->GetEmail()?>" required="required">
            <textarea id="comment" class="form-control" name="comment" rows="6"
            required="required"></textarea>
        <?endif;?>
		
		<p class="form-submit">
			<input name="submit" type="submit" id="submit"
				class="btn btn--lg btn--color" value="Отправить"> <input
				type="hidden" name="comment_post_ID" value="220" id="comment_post_ID">
		</p>
	</form>
</div><!-- end comment form -->