		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_default">
				<div class="row justify-content-between">
					<div class="col-lg-6">
					<figure>
						<img src="/../assets/img/500x600.png" alt="" class="img-fluid">
					</figure>
				</div>
					<div class="col-lg-6">
						<h4><?php echo $view['lang']['contacts_007'] ?></h4>
						<div id="message-contact"></div>
						<form method="post" action="/process/contact" id="contactform" autocomplete="off">
							<div class="row">
							
								<div class="col-md-12">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content"><?php echo $view['lang']['contacts_008'] ?></span>
										</label>
									</span>
								</div>		
								<div class="col-md-12">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content"><?php echo $view['lang']['contacts_009'] ?></span>
										</label>
									</span>
								</div>
								<div class="col-md-12">
									<span class="input">
										<input class="input_field" type="text" id="message_contact" name="message_contact">
										<label class="input_label">
											<span class="input__label-content"><?php echo $view['lang']['contacts_011'] ?></span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
