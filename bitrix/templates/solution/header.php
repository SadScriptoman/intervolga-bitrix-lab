<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html>
<html lang="ru-RU">

<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <?$APPLICATION->ShowHead();?>
    <title>
        <?$APPLICATION->ShowTitle(false)?>
    </title>

	<?

        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/style.min.css");
        $APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/custom.css");

        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.min.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/bootstrap.min.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/plugins.js");
        $APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/scripts.js");
    ?>

    <link href='//fonts.googleapis.com/css?family=DM+Sans:400,400i,500,700' rel='stylesheet'>

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?=SITE_TEMPLATE_PATH?>/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=SITE_TEMPLATE_PATH?>/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=SITE_TEMPLATE_PATH?>/img/apple-touch-icon-114x114.png">

</head>

<body class='<?=$APPLICATION->ShowProperty("body-class", "")?>' <?=$APPLICATION->ShowProperty("body-params", "")?> id="home" itemscope
    itemtype="http://schema.org/WebPage">

    <?if($GLOBALS["USER"]->IsAuthorized()):?>
        <?$APPLICATION->ShowPanel();?>
    <?endif;?>

	<!-- Preloader -->
	<div class="loader-mask">
		<div class="loader">
			"Загрузка..."
		</div>
    </div>

	<!-- Header -->
	<header class="nav <?=$APPLICATION->ShowProperty("header-class", "nav--pattern")?>" itemtype="http://schema.org/WPHeader" itemscope>

		<div class="nav__holder nav--sticky nav--align-center">
			<div class="container-fluid container-semi-fluid">
				<div class="flex-parent">

					<div class="nav__header clearfix">
						<!-- Logo -->
						<div class="logo-wrap local-scroll">
							<a href="/#intro" class="logo__url">
								<img class="logo" src="<?=SITE_TEMPLATE_PATH?>/img/logo/logo.png"
									srcset="<?=SITE_TEMPLATE_PATH?>/img/logo/logo.png 1x, <?=SITE_TEMPLATE_PATH?>/img/logo/logo@2x.png 2x" alt="logo"
									itemtype="http://schema.org/Organization" itemscope>
							</a>
						</div>

						<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-toggle="collapse"
							data-target="#navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
							<span class="nav__icon-toggle-bar"></span>
						</button>
					</div> <!-- end nav-header -->

					<?$APPLICATION->IncludeComponent(
						"bitrix:menu", 
						"solution.menu", 
						array(
							"ALLOW_MULTI_SELECT" => "N",
							"CHILD_MENU_TYPE" => "left",
							"COMPONENT_TEMPLATE" => "solution.menu",
							"DELAY" => "N",
							"MAX_LEVEL" => "2",
							"MENU_CACHE_GET_VARS" => array(
							),
							"MENU_CACHE_TIME" => "3600",
							"MENU_CACHE_TYPE" => "A",
							"MENU_CACHE_USE_GROUPS" => "Y",
							"ROOT_MENU_TYPE" => "top",
							"USE_EXT" => "Y"
						),
						false
					);?>

					<?$APPLICATION->AddViewContent("mobile-socials", '

						<!-- Mobile Socials -->
						<div class="nav__mobile-socials d-lg-none">
							<div class="socials">
								<div>
									<a href="#" class="social social-vkontakte" aria-label="vkontakte" title="Вконтакте"
									target="_blank"><i class="ui-vkontakte"></i></a>
									<a href="https://github.com/SadScriptoman/intervolga-bitrix-template"
									class="social social-github" aria-label="github" title="GitHub" target="_blank"><i
									class="ui-github"></i></a>
								</div>');
									if ($USER->IsAuthorized()){
										$APPLICATION->AddViewContent("mobile-auth", '
										<div><a class="white" href="/user/profile.php">['.$USER->GetLogin().']</a>
										<a class="white" href="'.$APPLICATION->GetCurPageParam("logout=yes", array(
											 "login",
											 "logout",
											 "register",
											 "forgot_password",
											 "change_password")).'">
											&nbsp;Выйти
										</a></div>');
									}else{
										$APPLICATION->AddViewContent("mobile-auth", '<a href="/user/login.php">
											<span>Войти</span>
										</a>');
									}
									
					$APPLICATION->AddViewContent("mobile-socials-bottom", '</div></div>');
					?>

					<!-- Socials -->
					<div class="nav__socials flex-child d-none d-lg-block">
						<div class="socials d-flex right">
							<a href="#" class="social social-vkontakte" aria-label="vkontakte" title="Вконтакте"
								target="_blank"><i class="ui-vkontakte"></i></a>
							<a href="https://github.com/SadScriptoman/intervolga-bitrix-template"
								class="social social-github" aria-label="github" title="GitHub" target="_blank">
								<i class="ui-github"></i>
							</a>
							<?if ($USER->IsAuthorized()):?>

								<a class="white" href="/user/profile.php">[<?=$USER->GetLogin()?>]</a>
								<a class="white" href="<?=$APPLICATION->GetCurPageParam("logout=yes", array(
									 "login",
									 "logout",
									 "register",
									 "forgot_password",
									 "change_password"));?>">

									&nbsp;Выйти
								</a>
								
							<?else:?>
								<a href="/user/login.php">
									<span>Войти</span>
								</a>
							<?endif;?>
						</div>
					</div>

				</div> <!-- end flex-parent -->
			</div> <!-- end container -->

		</div>
    </header> <!-- end navigation -->
    
    <main class="main-wrap">
	    <div class="content-wrap" style='background-color: white'>