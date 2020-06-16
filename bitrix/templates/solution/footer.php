		</div> <!-- end content wrap -->
		
		<footer class="footer bg-dark bg-pattern" itemtype="http://schema.org/WPFooter" itemscope>
			<div class="container">
				<div class="footer__widgets">
					<div class="row">
	
						<div class="col-lg-4 col-md-6">
							<div class="widget widget-about-us text-left text-md-center">
								<span class="widget-about-us__text">Напишите нам</span>
								<a href="mailto:<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										Array(
								   			"AREA_FILE_SHOW" => "file",
								   			"PATH" => "include/email.php",
								   			"EDIT_TEMPLATE" => ""
								   		),
								   		false,
								   		array('HIDE_ICONS' => 'Y')
									);?>"
									class="widget-about-us__email">
									<?$APPLICATION->IncludeComponent(
                						"bitrix:main.include",
                						".default",
                						Array(
                							"AREA_FILE_SHOW" => "file",
                							"AREA_FILE_SUFFIX" => "inc",
                							"COMPONENT_TEMPLATE" => ".default",
                							"EDIT_TEMPLATE" => "",
                							"PATH" => "/include/email.php"
                						)
                					);?></a>
								<a href="tel:
									<?$APPLICATION->IncludeComponent(
										"bitrix:main.include", 
										".default", 
										Array(
								   			"AREA_FILE_SHOW" => "file",
								   			"PATH" => "include/tel.php",
								   			"EDIT_TEMPLATE" => ""
								   		),
								   		false,
								   		array('HIDE_ICONS' => 'Y')
									);?>" 
								class="widget-about-us__phone">
									<?$APPLICATION->IncludeComponent(
                						"bitrix:main.include",
                						".default",
                						Array(
                							"AREA_FILE_SHOW" => "file",
                							"AREA_FILE_SUFFIX" => "inc",
                							"COMPONENT_TEMPLATE" => ".default",
                							"EDIT_TEMPLATE" => "",
                							"PATH" => "/include/tel.php"
                						)
                					);?>
								</a>
	
							</div>
						</div> <!-- end about us -->
	
	
						<div class="col-lg-4 col-md-6">
							<div class="widget text-md-center text-center">
								<h3 class="widget-cta__title white mb-32">Есть идея, которую вы бы хотели воплотить?
								</h3>
								<a href="/contact/project.php" class="btn btn--lg btn--stroke contact-form-trigger" >
									<span>Начнем проект</span>
								</a>
							</div>
						</div>
	
						<div class="col-lg-4 col-md-6 text-right text-md-center">
							<div class="widget widget-address">
								<address class="widget-address__address">
									<?$APPLICATION->IncludeComponent(
                						"bitrix:main.include",
                						".default",
                						Array(
                							"AREA_FILE_SHOW" => "file",
                							"AREA_FILE_SUFFIX" => "inc",
                							"COMPONENT_TEMPLATE" => ".default",
                							"EDIT_TEMPLATE" => "",
                							"PATH" => "/include/adress.php"
                						)
                					);?>
								</address>
								<?$APPLICATION->IncludeComponent(
									"solution:link",
									"map-link",
									Array(
										"COMPONENT_TEMPLATE" => ".default",
										"LINK" => "https://www.google.bg/maps/place/1702+Olympic+Blvd,+Santa+Monica,+CA+90404,+USA/data=!4m2!3m1!1s0x80c2bb3056a299ef:0x94f425adda595d69?sa=X&ved=0ahUKEwje-u2zobfPAhXFthQKHXdEBY4Q8gEIGTAA",
										"TEXT" => "Покажите мне на карте"
									)
								);?>
							</div>
						</div>
	
					</div>
				</div>
			</div> <!-- end container -->
	
			<div class="footer__bottom">
				<div class="container">
					<div class="copyright-wrap text-center">
						<span class="copyright">
							<?$APPLICATION->IncludeComponent(
                				"bitrix:main.include",
                				".default",
                				Array(
                					"AREA_FILE_SHOW" => "file",
                					"AREA_FILE_SUFFIX" => "inc",
                					"COMPONENT_TEMPLATE" => ".default",
                					"EDIT_TEMPLATE" => "",
                					"PATH" => "/include/copyright.php"
                				)
                			);?>
						</span>
					</div>
				</div>
			</div> <!-- end footer bottom -->
		</footer> <!-- end footer -->
	
		<div class="footer-placeholder" id="contact"></div>
	
	</main> <!-- end main wrapper -->

</body>

</html>