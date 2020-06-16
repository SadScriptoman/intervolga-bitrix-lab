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

$curPage = getCurPageURL();
?>


<!-- Project Hero -->
<div class="project__hero bg-overlay bg-overlay--light">
	<figure class="project__hero-img-holder" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);">
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="" class="d-none">
	</figure>
	<div class="container">
		<div class="project__hero-info">
			<h1 class="project__hero-title"><?=$arResult["NAME"]?></h1>
			<?if ($arResult["DISPLAY_PROPERTIES"]['HERO_DESCRIPTION']):?>
				<p class="project__hero-description"><?=$arResult["DISPLAY_PROPERTIES"]['HERO_DESCRIPTION']?></p>
			<?endif;?>
		</div>
	</div>
</div> <!-- end project hero --> 
<!-- Project Info -->
<section class="section-project-info pb-96">
	<div class="container">
		<div class="row">
			<aside class="col-lg-4">
				<div class="project__info">
					<ul class="project__info-list">
						<li class="project__info-list-item">
							<span class="project__info-list-label">Клиент</span>
							<span class="project__info-list-title"><?=$arResult["DISPLAY_PROPERTIES"]['COMPANY']['VALUE']?></span>
						</li>
						<li class="project__info-list-item">
							<span class="project__info-list-label">Категория</span>
							<a href='<?=$arResult["IBLOCK_SECTION_URL"]?>' class="project__info-list-title"><?=$arResult["IBLOCK_SECTION_NAME"]?></a>
						</li>
						<li class="project__info-list-item">
							<span class="project__info-list-label">Время сбора</span>
							<span class="project__info-list-title"><?=$arResult["DISPLAY_PROPERTIES"]['DURATION']['VALUE']?> дней</span>
						</li>
						<li class="project__info-list-item">
							<span class="project__info-list-label">Цель</span>
							<span class="project__info-list-title"><?=CCurrencyLang::CurrencyFormat( (int) $arResult["DISPLAY_PROPERTIES"]['TARGET']['VALUE'], 'RUB', true);?></span>
						</li>
						<li class="project__info-list-item">
							<span class="project__info-list-label">Поделиться</span>
							<div class="socials">
								<a class="social social-vkontakte"
									href="https://vk.com/share.php?url=<?=$curPage?>" aria-label="vkontakte" title="Вконтакте" target="_blank"><i class="ui-vkontakte"></i>
								</a>
								<a class="social social-twitter"
									href="https://twitter.com/share?url=<?=$curPage?>" aria-label="twitter" title="Twitter" target="_blank"><i class="ui-twitter"></i>
								</a>
								<a class="social social-facebook"
									href="http://www.facebook.com/sharer.php?s=100&p[url]=<?=$curPage?>" aria-label="facebook" title="Facebook" target="_blank"><i class="ui-facebook"></i>
								</a>
							</div>
						</li>
					</ul>							
				</div>
			</aside>
			<div class="col-lg-8">
				<?if ($arResult["PREVIEW_TEXT"]):?>
					<?=$arResult["PREVIEW_TEXT"]?>
				<?else:?>
					<?=$arResult["DETAIL_TEXT"]?>
				<?endif;?>
			</div>
		</div>
	</div>
</section> <!-- end project info -->
<?if ($arResult["PREVIEW_TEXT"]):?>
	<?=$arResult["DETAIL_TEXT"]?>
<?endif;?>