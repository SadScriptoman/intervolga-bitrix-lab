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
$rsUser = CUser::GetByID($arResult["DISPLAY_PROPERTIES"]['AUTHOR']['VALUE']);
$arUser = $rsUser->Fetch();
$curPage = getCurPageURL();
?>
<!-- Page Title -->
<section class="blog-page-title bg-overlay bg-overlay--light-68" style="background-image: url(<?=$arResult["DETAIL_PICTURE"]["SRC"]?>);">
	<div class="container">
		
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="blog-page-title__holder">
					<h1 class="blog-page-title__title"><?=$arResult["NAME"]?></h1>
					<div class="entry__meta">							
						<span class="entry__meta-item entry__meta-author">
							<span class="entry__meta-author-name" itemprop="author"><?=$arUser["NAME"].' '.$arUser["LAST_NAME"]?></span>
						</span>
						<span class="entry__meta-item entry__meta-date" itemprop="datePublished" content="<?=$arResult["DISPLAY_ACTIVE_FROM"]?>"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></span>
					</div>
				</div>						
			</div>						
		</div>
	</div>
</section> <!-- end page title -->

<!-- Blog -->
<section class="section-blog-single angle angle--top pb-96">
	<div class="container">

		<div class="row justify-content-center">
			<div class="col-lg-8 blog__content mb-32">
				<article class="entry single-post__entry">
					<div class="entry__article-wrap">
						<div class="entry__share">
							<div class="sticky-col">
								<div class="socials socials--rounded socials--large socials--colored entry__share-socials">
									<a class="social social-vkontakte entry__share-social"
										href="https://vk.com/share.php?url=<?=$curPage?>" target="_blank"><i class="ui-vkontakte"></i>
									</a>
									<a class="social social-twitter entry__share-social"
										href="https://twitter.com/share?url=<?=$curPage?>" target="_blank"><i class="ui-twitter"></i>
									</a>
									<a class="social social-facebook entry__share-social"
										href="http://www.facebook.com/sharer.php?s=100&p[url]=<?=$curPage?>" target="_blank"><i class="ui-facebook"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="entry__article">
							<?=$arResult['DETAIL_TEXT']?>
						</div>
					</div>
				</article>
				<!-- Author -->
				<div class="entry-author">
					<figure itemscope="" itemprop="image" class="entry-author__img-holder">
						<?if ($arUser['PERSONAL_PHOTO']){
							echo CFile::ShowImage($arUser['PERSONAL_PHOTO'], 0, 0, 'class="avatar avatar-64 photo entry-author__img"', '', true);
						}?>
					</figure>
					<div class="entry-author__info">
						<h3 class="entry-author__name" rel="author">
							<a href="#">
								<span class="entry-author__name"><?=$arUser["NAME"].' '.$arUser["LAST_NAME"]?></span>
							</a>
						</h3>
						<p class="entry-author__description"><?=$arUser['PERSONAL_PROFESSION']?></p>
					</div>
				</div> <!-- end author -->

				<div id="comments" class="entry__comments">
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"solution.blog.comments",
						Array(
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"ADD_SECTIONS_CHAIN" => "Y",
							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "Y",
							"CACHE_TIME" => "36000000",
							"CACHE_TYPE" => "N",
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_DATE" => "Y",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"DISPLAY_TOP_PAGER" => "N",
							"FIELD_CODE" => array("",""),
							"FILTER_NAME" => "",
							"HIDE_LINK_WHEN_NO_DETAIL" => "N",
							"IBLOCK_ID" => "10",
							"IBLOCK_TYPE" => "comments",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
							"INCLUDE_SUBSECTIONS" => "Y",
							"LINKED_ELEMENT" => $arResult['ID'],
							"MESSAGE_404" => "",
							"NEWS_COUNT" => "20",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Новости",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"PROPERTY_CODE" => array("LINKED_IBLOCK_ID","LINKED_USER","LINKED_USER_AVATAR", 'LINKED_ELEMENT', ''),
							"SET_BROWSER_TITLE" => "N",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "N",
							"SHOW_404" => "N",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_BY2" => "SORT",
							"SORT_ORDER1" => "DESC",
							"SORT_ORDER2" => "ASC",
							"STRICT_SECTION_CHECK" => "N"
						)
					);?>
					
					<?if(!@file_exists($_SERVER["DOCUMENT_ROOT"].'/blog/comment_add_form.php') ) {
					    echo 'Файл /blog/comment_add_form.php отсутствует!';
					} else {
						include_once $_SERVER["DOCUMENT_ROOT"].'/blog/comment_add_form.php';
					}?>

				</div> <!-- end comments -->

			</div> <!-- end blog content -->
		</div>
	</div>
</section> <!-- end blog -->

<?$APPLICATION->IncludeComponent(
	"solution:related-elements",
	"solution.related-posts",
	Array(
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "180",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => "solution.related-posts",
		"DETAIL_URL" => "",
		"ELEMENT_ID" => $arResult["ID"],
		"IBLOCKS" => array(0=>"1",),
		"IBLOCK_TYPE" => "news",
		"NUM_TO_DISPLAY" => "3",
		"PARENT_SECTION" => ""
	)
);?>

<!-- Prev / Next post -->
<nav class="entry-navigation" itemscope="" itemtype="http://schema.org/SiteNavigationElement">
	<div class="entry-navigation__row clearfix">
		<?if(is_array($arResult["TOLEFT"])):?> 
			<div class="entry-navigation__col entry-navigation--left <?if(!is_array($arResult["TORIGHT"])):?>entry-navigation__col--full-width entry-navigation--center<?endif;?>">
				<div class="entry-navigation__img" style="background-image: url(<?=$arResult["TOLEFT"]["PREVIEW_PICTURE"]?>)"></div>
				<a href="<?=$arResult["TOLEFT"]["URL"]?>" class="entry-navigation__url"></a>
				<div class="entry-navigation__body">
					<span class="entry-navigation__label">Предыдущая статья</span>
					<h6 class="entry-navigation__title"><?=$arResult["TOLEFT"]["NAME"]?> </h6>
				</div>
			</div>
		<?endif?>
		<?if(is_array($arResult["TORIGHT"])):?> 
		<div class="entry-navigation__col entry-navigation--right <?if(!is_array($arResult["TOLEFT"])):?>entry-navigation__col--full-width entry-navigation--center<?endif;?> bg-overlay">
				<div class="entry-navigation__img" style="background-image: url(<?=$arResult["TORIGHT"]["PREVIEW_PICTURE"]?>)"></div>
				<a href="<?=$arResult["TORIGHT"]["URL"]?>" class="entry-navigation__url"></a>
				<div class="entry-navigation__body">
					<span class="entry-navigation__label">Следующая статья</span>
					<h6 class="entry-navigation__title"><?=$arResult["TORIGHT"]["NAME"]?></h6>
				</div>
			</div>
		<?endif?>
	</div> <!-- .entry-navigation__row -->
</nav>
<!-- end prev / next post -->