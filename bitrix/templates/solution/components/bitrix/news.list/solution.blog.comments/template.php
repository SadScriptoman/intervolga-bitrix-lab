<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$count = count($arResult["ITEMS"]);
?>
<?if ($count > 0):?>
	<h5 class="entry__comments-title">Комментариев:&nbsp;&nbsp;<?=$count?></h5>
	<ul class="comment-list">
		<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<li class="comment" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<article class="comment-body">				
					<div class="comment-avatar vcard">
						<?if(is_array($arItem["PREVIEW_PICTURE"])):?>
							<img alt="" src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" class="avatar avatar-46 photo">
						<?elseif (is_array($arItem["DISPLAY_PROPERTIES"]['LINKED_USER_AVATAR'])):?>
							<img alt="" src="<?=$arItem["DISPLAY_PROPERTIES"]['LINKED_USER_AVATAR']['VALUE']?>" class="avatar avatar-46 photo">
						<?else:?>
							<img alt="" src="/bitrix/components/bitrix/blog/templates/.default/images/noavatar.gif" class="avatar avatar-46 photo">
						<?endif;?>
					</div>
						
					<div class="comment-text">
						<h6 class="comment-author"><?=$arItem["NAME"]?></h6>
						<div class="comment-metadata">
							<span class="comment-date">
								<?$d = new DateTime($arItem["DISPLAY_ACTIVE_FROM"]);?>
								<time datetime="<?=$d->format('Y-m-d\TH:i:s.u')?>"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></time>
								<?unset($d);?>
							</span>
						</div>
						<div class="comment-content">
							<p>
								<?=$arItem["PREVIEW_TEXT"];?>
							</p>
						</div>
						<!--div class="reply"><a rel="nofollow" class="comment-reply-link" href="#" aria-label="Ответить">Ответить</a></div-->
					</div>
				</article>
			</li>
		<?endforeach;?>
	</ul>
	<?=$arResult["NAV_STRING"]?>
<?endif;?>

