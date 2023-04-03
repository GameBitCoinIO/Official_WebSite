		<div class="contact_info">
			<div class="container">
				<ul class="clearfix">
					<li>
						<i class="pe-7s-map-marker"></i>
						<h4><?php echo $view['lang']['contacts_001'] ?></h4>
						<span><?php echo $view['lang']['contacts_002'] ?></span>
					</li>
					<li>
						<i class="pe-7s-mail-open-file"></i>
						<h4><?php echo $view['lang']['contacts_003'] ?></h4>
						<span><?php echo $view['lang']['contacts_004'] ?></span>

					</li>
					<li>
						<i class="pe-7s-phone"></i>
						<h4><?php echo $view['lang']['contacts_005'] ?></h4>
						<span><?php echo $view['lang']['contacts_006'] ?></span>
					</li>
				</ul>
			</div>
		</div>
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
						<form method="post" id="contactform" autocomplete="off">
							<input type="hidden" name="<?= $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="name_contact" name="name_contact">
										<label class="input_label">
											<span class="input__label-content"><?php echo $view['lang']['contacts_008'] ?></span>
										</label>
									</span>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="email" id="email_contact" name="email_contact">
										<label class="input_label">
											<span class="input__label-content"><?php echo $view['lang']['contacts_009'] ?></span>
										</label>
									</span>
								</div>
								<div class="col-md-6">
									<span class="input">
										<input class="input_field" type="text" id="phone_contact" name="phone_contact">
										<label class="input_label">
											<span class="input__label-content"><?php echo $view['lang']['contacts_010'] ?></span>
										</label>
									</span>
								</div>
								<div class="col-md-12">
									<span class="input">
									<textarea class="input_field" id="message_contact" name="message_contact" style="height:150px;"></textarea>
									<label class="input_label">
										<span class="input__label-content"><?php echo $view['lang']['contacts_011'] ?></span>
									</label>
									</span>
								</div>

							</div>
							<!-- /row -->

							<span class="input">
									<input class="input_field" type="text" id="verify_contact" name="verify_contact">
									<label class="input_label">
									<span class="input__label-content"><?php echo $view['lang']['contacts_01'] ?></span>
									</label>
							</span>
							<p class="add_top_30"><input type="submit" value="Submit" class="btn_1 rounded" id="submit-contact"></p>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
