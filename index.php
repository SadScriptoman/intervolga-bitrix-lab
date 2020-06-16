<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Solution");
$APPLICATION->SetPageProperty("body-params", 'data-spy="scroll" data-offset="60" data-target=".nav__holder"');
?>
<section id="intro" class="page-title index-title bg-pattern">
    <div class="container relative">
    	<div class="animate">
    		<div class="animate-container">
    			<h1 class="page-title__title white">
    				<?$APPLICATION->IncludeComponent(
                		"bitrix:main.include",
                		".default",
                		Array(
                			"AREA_FILE_SHOW" => "file",
                			"AREA_FILE_SUFFIX" => "inc",
                			"COMPONENT_TEMPLATE" => ".default",
                			"EDIT_TEMPLATE" => "",
                			"PATH" => "/include/motto.php"
                		)
                	);?></h1>
                <div class="page-title__subtitle white">
                	<?$APPLICATION->IncludeComponent(
                		"bitrix:main.include",
                		".default",
                		Array(
                			"AREA_FILE_SHOW" => "file",
                			"AREA_FILE_SUFFIX" => "inc",
                			"COMPONENT_TEMPLATE" => ".default",
                			"EDIT_TEMPLATE" => "",
                			"PATH" => "/include/subtitle.php"
                		)
                	);?>
    			</div>
    		</div>
    	</div>
    </div>
    <div class="local-scroll">
        <a href="#services" class="scroll-down"> <i class="ui-arrow-scroll-down"></i> </a>
    </div>
</section> 
<!-- end page title --> 
<!-- Service Boxes --> 
<section id="services" class="pb-72 angle angle--top">
    <div class="container">
    	<div class="row">
    		<div class="col-lg-5">
    			<div class="title-row animate">
    				<div class="animate-container">
    					<h3 class="section-subtitle section-subtitle--line">
							<?$APPLICATION->IncludeComponent(
                				"bitrix:main.include",
                				".default",
                				Array(
                					"AREA_FILE_SHOW" => "file",
                					"AREA_FILE_SUFFIX" => "inc",
                					"COMPONENT_TEMPLATE" => ".default",
                					"EDIT_TEMPLATE" => "",
                					"PATH" => "/include/service-subtitle.php"
                				)
                			);?>
						</h3>
    					<h2 class="section-title">
							<?$APPLICATION->IncludeComponent(
                				"bitrix:main.include",
                				".default",
                				Array(
                					"AREA_FILE_SHOW" => "file",
                					"AREA_FILE_SUFFIX" => "inc",
                					"COMPONENT_TEMPLATE" => ".default",
                					"EDIT_TEMPLATE" => "",
                					"PATH" => "/include/about-service-name.php"
                				)
							);?>
						</h2>
    					<p class="section-description">
							<?$APPLICATION->IncludeComponent(
                				"bitrix:main.include",
                				".default",
                				Array(
                					"AREA_FILE_SHOW" => "file",
                					"AREA_FILE_SUFFIX" => "inc",
                					"COMPONENT_TEMPLATE" => ".default",
                					"EDIT_TEMPLATE" => "",
                					"PATH" => "/include/about-service-desc.php"
                				)
							);?>
    					</p>
    				</div>
    			</div>
    		</div>
    		<div class="col-lg-6 offset-lg-1">
    			<div class="animate">
    				<div class="animate-container">
    					<div class="row">
    						<div class="col-lg-6">
    							<div class="service">
                                    <i class="service__icon o-edit-window-1"></i>
    								<h4 class="service__title">Создание фирменного стиля</h4>
    								<p class="service__text">
    									 Фирменный стиль заставит обратить на вас внимание и внушить доверие клиентам.
    								</p>
    							</div>
    						</div>
    						<div class="col-lg-6">
    							<div class="service">
                                    <i class="service__icon o-source-code-1"></i>
    								<h4 class="service__title">Создание лендинга</h4>
    								<p class="service__text">
    									 Если проект объемный, то это необходимо для продвижения в сети. Сейчас сложно найти серьезный старатап без лендинга.
    								</p>
    							</div>
    						</div>
    					</div>
    					<div class="row">
    						<div class="col-lg-6">
    							<div class="service">
                                    <i class="service__icon o-strategy-1"></i>
    								<h4 class="service__title">Разработка маркетинговой стратегии</h4>
    								<p class="service__text">
    									 Вам в любом случае надо заработать на вашем проекте. Большинство идейных ребят даже не задумываются об этом, но это важная часть стартапа.
    								</p>
    							</div>
    						</div>
    						<div class="col-lg-6">
    							<div class="service">
                                    <i class="service__icon o-call-contact-1"></i>
    								<h4 class="service__title">Поддержка</h4>
    								<p class="service__text">
    									 Мы предоставляем поддержку наших проектов и после компании по продвижению. Это включает консультацию по маркетингу и эксплуатации лендинга (если он был создан нами).
    								</p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</section> <!-- end service boxes --> 
<!-- Results --> 
<section class="section-results bg-gradient-bottom" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/results/results-min.jpg');">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-4 results-col">
    			<div class="results">
    				<div class="results__counter">
                        <span class="results__number" data-from="0" data-to="22">22</span>
    				</div>
    				<p class="results__text">
    					 Старатапа в работе сейчас.
    				</p>
    			</div>
    		</div>
    		<div class="col-lg-4 results-col">
    			<div class="results">
    				<div class="results__counter">
                        <span class="results__number" data-from="0" data-to="129">129</span>
    				</div>
    				<p class="results__text">
    					 Успешных стартапов.
    				</p>
    			</div>
    		</div>
    		<div class="col-lg-4 results-col">
    			<div class="results">
    				<div class="results__counter">
                        <span class="results__number" data-from="0" data-to="291">291</span> <span class="results__suffix">M</span>
    				</div>
    				<p class="results__text">
    					Рублей было собрано нашими стартапами.
    				</p>
    			</div>
    		</div>
    	</div>
    </div>
</section> 
<!-- end results --> 
<!-- About --> 
<section class="section-about pb-72 bg-light" id="about">
<div class="about">
	<div class="about__holder">
		<?$APPLICATION->IncludeComponent(
        	"solution:video",
        	"",
        	Array(
        		"AJAX_MODE" => "N",
        		"AJAX_OPTION_ADDITIONAL" => "",
        		"AJAX_OPTION_HISTORY" => "N",
        		"AJAX_OPTION_JUMP" => "N",
        		"AJAX_OPTION_STYLE" => "Y",
        		"CACHE_GROUPS" => "Y",
        		"CACHE_TIME" => "36000000",
        		"CACHE_TYPE" => "A",
        		"ELEMENT_ID" => "33",
        		"IBLOCK_ID" => "5",
        		"IBLOCK_TYPE" => "content",
        		"LINK" => "не задано",
        		"MESSAGE_404" => "",
        		"SET_STATUS_404" => "N",
        		"SHOW_404" => "N"
        	)
        );?>
		<div class="about__info">
			<div class="animate">
				<div class="animate-container">
					<div class="title-row mb-40">
						<h3 class="section-subtitle section-subtitle--line">
							<?$APPLICATION->IncludeComponent(
                				"bitrix:main.include",
                				".default",
                				Array(
                					"AREA_FILE_SHOW" => "file",
                					"AREA_FILE_SUFFIX" => "inc",
                					"COMPONENT_TEMPLATE" => ".default",
                					"EDIT_TEMPLATE" => "",
                					"PATH" => "/include/about-us-subtitle.php"
                				)
                			);?>
						</h3>
						<h2 class="section-title">
							<?$APPLICATION->IncludeComponent(
                				"bitrix:main.include",
                				".default",
                				Array(
                					"AREA_FILE_SHOW" => "file",
                					"AREA_FILE_SUFFIX" => "inc",
                					"COMPONENT_TEMPLATE" => ".default",
                					"EDIT_TEMPLATE" => "",
                					"PATH" => "/include/about-us-title.php"
                				)
							);?></h2>
						<p class="section-description">
							<?$APPLICATION->IncludeComponent(
                				"bitrix:main.include",
                				".default",
                				Array(
                					"AREA_FILE_SHOW" => "file",
                					"AREA_FILE_SUFFIX" => "inc",
                					"COMPONENT_TEMPLATE" => ".default",
                					"EDIT_TEMPLATE" => "",
                					"PATH" => "/include/about-us-desc.php"
                				)
							);?>
						</p>
					</div>
					 <!-- Accordion -->
					<div id="accordion-1">
						<div class="accordion">
							<div class="accordion__panel">
								<div class="accordion__heading" id="heading-1">
                                    <a data-toggle="collapse" href="#collapse-1" class="accordion__link accordion--is-open" aria-expanded="true" aria-controls="collapse-1"> <span class="accordion__toggle"></span>
									    <h4 class="accordion__title">Кто мы</h4>
                                    </a>
								</div>
								<div id="collapse-1" class="collapse show" data-parent="#accordion-1" role="tabpanel" aria-labelledby="heading-1">
									<div class="accordion__body">
										<p>
											 Мы группа программистов, дизайнеров и просто творчески мыслящих людей, которые уже прошли через дебри краудфайндинга. Мы знаем всю кухню досконально.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion__panel">
								<div class="accordion__heading" id="heading-2">
                                    <a data-toggle="collapse" href="#collapse-2" class="accordion__link" aria-expanded="true" aria-controls="collapse-2"> <span class="accordion__toggle"></span>
									    <h4 class="accordion__title">Наша философия</h4>
                                    </a>
								</div>
								<div id="collapse-2" class="collapse" data-parent="#accordion-1" role="tabpanel" aria-labelledby="heading-2">
									<div class="accordion__body">
										<p>
											 --
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="accordion">
							<div class="accordion__panel">
								<div class="accordion__heading" id="heading-3">
                                    <a data-toggle="collapse" href="#collapse-3" class="accordion__link" aria-expanded="true" aria-controls="collapse-3"> <span class="accordion__toggle"></span>
									    <h4 class="accordion__title">Как мы работаем</h4>
                                    </a>
								</div>
								<div id="collapse-3" class="collapse" data-parent="#accordion-1" role="tabpanel" aria-labelledby="heading-3">
									<div class="accordion__body">
										<p>
											 Обычно мы работаем по предоплате в зависимости от сложности проекта. Обычно наша помощь стоит около 100тыс. рублей за комплексное Digital-продвижение.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <!-- end accordion -->
				</div>
			</div>
		</div>
		 <!-- end about__info -->
	</div>
</div>
</section> <!-- end about --> 
<!-- Works --> 
<section class="section-works bg-light pt-72" id="works">
    <div class="container">
    	<div class="row justify-content-center">
    		<div class="col-lg-6">
    			<div class="title-row text-center">
    				<h2 class="section-title">
						<?$APPLICATION->IncludeComponent(
                			"bitrix:main.include",
                			".default",
                			Array(
                				"AREA_FILE_SHOW" => "file",
                				"AREA_FILE_SUFFIX" => "inc",
                				"COMPONENT_TEMPLATE" => ".default",
                				"EDIT_TEMPLATE" => "",
                				"PATH" => "/include/works-title.php"
                			)
                		);?>
					</h2>
    			</div>
    		</div>
    	</div>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "solution.main.project-list", Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "N",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "N",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "N",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "9",	// Код информационного блока
		"IBLOCK_TYPE" => "projects",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "5",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Проекты",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"COMPONENT_TEMPLATE" => ".default"
	),false);?>
    <div class="text-center mt-40">
        <a href="/projects/" class="btn btn--lg btn--stroke">Больше</a>
    </div>
</section> <!-- end works --> 
<!-- Team --> 
<section id='team' class="section-team">
    <div class="container">
    	<div class="title-row">
    		<h3 class="section-subtitle section-subtitle--line">
				<?$APPLICATION->IncludeComponent(
                	"bitrix:main.include",
                	".default",
                	Array(
                		"AREA_FILE_SHOW" => "file",
                		"AREA_FILE_SUFFIX" => "inc",
                		"COMPONENT_TEMPLATE" => ".default",
                		"EDIT_TEMPLATE" => "",
                		"PATH" => "/include/team-subtitle.php"
                	)
                );?>
			</h3>
    		<h2 class="section-title">
				<?$APPLICATION->IncludeComponent(
                	"bitrix:main.include",
                	".default",
                	Array(
                		"AREA_FILE_SHOW" => "file",
                		"AREA_FILE_SUFFIX" => "inc",
                		"COMPONENT_TEMPLATE" => ".default",
                		"EDIT_TEMPLATE" => "",
                		"PATH" => "/include/team-title.php"
                	)
                );?>
			</h2>
		</div>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"solution.main.team-list", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_NUM" => "3",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
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
		"PROPERTY_CODE" => array(
			0 => "FB",
			1 => "TW",
			2 => "VK",
			3 => "POST",
			4 => "",
		),
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
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "solution.main.team-list"
	),
	false
);?>
	</div>
</section> <!-- end team --> 

<section class="section-testimonials section-testimonials--large-padding bg-overlay" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/img/testimonials/testimonials-min.jpg');">
    <div class="container">
    	<div class="row justify-content-center mb-40">
    		<div class="col-lg-7">
    			<div class="title-row text-center">
    				<h2 class="section-title">
						<?$APPLICATION->IncludeComponent(
                			"bitrix:main.include",
                			".default",
                			Array(
                				"AREA_FILE_SHOW" => "file",
                				"AREA_FILE_SUFFIX" => "inc",
                				"COMPONENT_TEMPLATE" => ".default",
                				"EDIT_TEMPLATE" => "",
                				"PATH" => "/include/testimonials-title.php"
                			)
                		);?>
					</h2>
    			</div>
    		</div>
		</div>
		<?$APPLICATION->IncludeComponent(
			"bitrix:news.list", 
			"solution.main.reviews-list", 
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
				"CACHE_TYPE" => "A",
				"CHECK_DATES" => "Y",
				"COMPONENT_TEMPLATE" => "solution.reviews-list",
				"DETAIL_URL" => "",
				"DISPLAY_BOTTOM_PAGER" => "Y",
				"DISPLAY_DATE" => "Y",
				"DISPLAY_NAME" => "Y",
				"DISPLAY_PICTURE" => "Y",
				"DISPLAY_PREVIEW_TEXT" => "Y",
				"DISPLAY_TOP_PAGER" => "N",
				"FIELD_CODE" => array(
					0 => "",
					1 => "",
				),
				"FILTER_NAME" => "",
				"HIDE_LINK_WHEN_NO_DETAIL" => "N",
				"IBLOCK_ID" => "6",
				"IBLOCK_TYPE" => "content",
				"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
				"INCLUDE_SUBSECTIONS" => "Y",
				"MESSAGE_404" => "",
				"NEWS_COUNT" => "2",
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
				"PROPERTY_CODE" => array(
					0 => "POST",
					1 => "COMPANY",
					2 => "",
				),
				"SET_BROWSER_TITLE" => "N",
				"SET_LAST_MODIFIED" => "N",
				"SET_META_DESCRIPTION" => "Y",
				"SET_META_KEYWORDS" => "N",
				"SET_STATUS_404" => "N",
				"SET_TITLE" => "N",
				"SHOW_404" => "N",
				"SORT_BY1" => "ACTIVE_FROM",
				"SORT_BY2" => "SORT",
				"SORT_ORDER1" => "DESC",
				"SORT_ORDER2" => "ASC",
				"STRICT_SECTION_CHECK" => "N"
			),
			false
		);?>
	</div>
</section> <!-- end testimonials --> 
<!-- From Blog --> 
<section class="section-from-blog pb-96 angle angle--top" id="blog">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="title-row text-center">
					<h2 class="section-title">
						<?$APPLICATION->IncludeComponent(
                			"bitrix:main.include",
                			".default",
                			Array(
                				"AREA_FILE_SHOW" => "file",
                				"AREA_FILE_SUFFIX" => "inc",
                				"COMPONENT_TEMPLATE" => ".default",
                				"EDIT_TEMPLATE" => "",
                				"PATH" => "/include/blog-title.php"
                			)
                		);?>
					</h2>
					<p class="section-description">
						<?$APPLICATION->IncludeComponent(
                			"bitrix:main.include",
                			".default",
                			Array(
                				"AREA_FILE_SHOW" => "file",
                				"AREA_FILE_SUFFIX" => "inc",
                				"COMPONENT_TEMPLATE" => ".default",
                				"EDIT_TEMPLATE" => "",
                				"PATH" => "/include/blog-description.php"
                			)
                		);?>
					</p>
				</div>
			</div>
		</div>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"solution.main.blog-list", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "solution.main.blog-list",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_NUM" => "3",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "3",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "AUTHOR",
			2 => "",
		),
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
	),
	false
);?>

	</div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>