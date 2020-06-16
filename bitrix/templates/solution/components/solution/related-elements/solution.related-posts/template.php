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
?>
<!-- Related Posts -->
<section class="section-wrap bg-light pb-72">
	<div class="container">
		<div class="title-row text-center">
			<h2 class="section-title">Вам может также понравится</h2>
		</div>
		<div class="row">
			<?foreach($arResult['ITEMS'] as $arItem):?>
				<div class="col-lg-4">
					<div class="animate">
						<div class="animate-container">
							<article class="entry" itemscope itemtype="http://schema.org/Article">
								<div class="entry__header hover-shrink">
									<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="entry__img-url hover-shrink--shrink">
										<img src="<?=$arItem["PREVIEW_PICTURE"]['SRC']?>" class="entry__img hover-shrink--zoom" itemprop="image" alt="<?=$arItem["PREVIEW_PICTURE"]['ALT']?>">
									</a>
								</div>
								<div class="entry__body">
									<div class="entry__meta">
										<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="<?=$arItem["DATE_ACTIVE_FROM"]?>"><?=$arItem["DATE_ACTIVE_FROM"]?></span>                 
									</div>                
									<h4 class="entry__title title-underline">
										<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" itemprop="headline"><?=$arItem["NAME"]?></a>
									</h4>
									<div class="entry__meta">
										<span class="entry__meta-item entry__meta-author">
											<span class="entry__meta-author-name" itemprop="author"><?=$arItem["AUTHOR"]['NAME'].' '.$arItem["AUTHOR"]['LAST_NAME']?></span>
										</span>
									</div>                 
								</div>
							</article>
						</div>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</section> <!-- end related posts -->