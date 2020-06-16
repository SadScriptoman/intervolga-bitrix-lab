<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):
	
	$page = $APPLICATION->GetCurPage();
	if ($page != "/") $page = false;
	?>

	<!-- Navbar -->
	<nav id="navbar-collapse" class="nav__wrap collapse navbar-collapse"
		itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">

		<ul class="nav__menu local-scroll" id="onepage-nav">
		<?
		$previousLevel = 0;
		foreach($arResult as $arItem):?>
			<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
				<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
			<?endif?>

			<?if (((!$page) && ($arItem['PARAMS']['INDEX'] != 'TRUE')) || ($arItem['PARAMS']['SHOW_ALWAYS'] == 'TRUE')):?>

				<?if ($arItem["IS_PARENT"]):?>

					<li class="nav__dropdown">
						<a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>active<?endif;?>" aria-haspopup="true"><?=$arItem["TEXT"]?></a>
						<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true"
							aria-expanded="false"></i>
						<ul class="nav__dropdown-menu">
						

				<?else:?>

					<li>
						<a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>active<?endif;?>" aria-haspopup="false"><?=$arItem["TEXT"]?></a>
					</li>
						
				<?endif?>

				<?$previousLevel = $arItem["DEPTH_LEVEL"];?>

			<?elseif (($page == '/') && ($arItem['PARAMS']['INDEX'] == 'TRUE')):?>

				<?if ($arItem["IS_PARENT"]):?>
									
					<li class="nav__dropdown">
						<a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>active<?endif;?>" aria-haspopup="true"><?=$arItem["TEXT"]?></a>
						<i class="ui-arrow-down nav__dropdown-trigger" role="button" aria-haspopup="true"
							aria-expanded="false"></i>
						<ul class="nav__dropdown-menu">
						
						
				<?else:?>
				
					<li>
						<a href="<?=$arItem["LINK"]?>" class="nav-link <?if ($arItem["SELECTED"]):?>active<?endif;?>" aria-haspopup="false"><?=$arItem["TEXT"]?></a>
					</li>
					
				<?endif?>
					
				<?$previousLevel = $arItem["DEPTH_LEVEL"];?>
			<?endif?>

		<?endforeach?>

		<?if ($previousLevel > 1)://close last item tags?>
			<?=str_repeat("</ul></li>", ($previousLevel-1) );?>
		<?endif?>


		</ul> <!-- end menu -->
		<?$APPLICATION->ShowViewContent('mobile-socials');?>
		<?$APPLICATION->ShowViewContent('mobile-auth');?>
		<?$APPLICATION->ShowViewContent('mobile-socials-bottom');?>
	</nav> <!-- end nav-wrap -->

<?endif?>