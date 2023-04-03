<style>

.popup { 
		display:none;
		position: fixed;
		top :0;
		left :0;
		background-color: #333;
		width : 100%;
		height : 100%;
		z-index : 100000;
		opacity: 1;
	}

	.playvideo {
		left : 50%;
		transform: translate(-50%, -50%);
		position: fixed;
		z-index: 100001;
		opacity: 1;
	}

	.cakevideo { width : 350px; top : 10%;}
	.pinkvideo { width : 350px; top : 10%; }	
	.deathvideo { width : 600px; top : 30%; }
	.ctvideo { width : 700px; top : 30%; }
</style>
<body>

	<div id="page">
	<!-- /header -->
	
	<main>
		<div id="popup_1" class='popup' onclick="offPopup(1)">
			<div class="playvideo pinkvideo ">
				<video autoplay loop muted playsinline ><source src="/../assets/video/video_2022-05-19_16-54-20.mp4" type="video/mp4"></video>
			</div>
		</div>
		<div id="popup_2" class='popup' onclick="offPopup(2)">
			<div class="playvideo cakevideo">
				<video autoplay loop muted playsinline><source src="/../assets/video/video_2022-05-19_16-54-24.mp4" type="video/mp4"></video>
			</div>
		</div>

		<div id="popup_3" class='popup' onclick="offPopup(3)">
			<div class="playvideo deathvideo">
				<video autoplay loop muted playsinline><source src="/../assets/video/video_2022-05-19_16-54-27.mp4" type="video/mp4"></video>
			</div>
		</div>

		<div id="popup_4" class='popup' onclick="offPopup(4)">
			<div class="playvideo ctvideo">
				<video autoplay loop muted playsinline><source src="/../assets/video/video_2022-05-19_18-08-58.mp4" type="video/mp4"></video>
			</div>
		</div>
		<!--/hero_in-->

		<div class="container margin_default">
			<div class="main_title_2">
				<span><em></em></span>
				<h2><?php echo $view['lang']['game_001'] ?></h2>
				<p><?php echo $view['lang']['game_002'] ?></p>
			</div>
			<div class="row">
        	<div class="col-md-6">
				<div class="box_service_single_2">
					<figure><img src="/../assets/img/shootingStar_800x400.png" alt="" class="img-fluid" onclick="onPopup(2)"></figure>
					<h4>Cake Invader</h4>
					<p><?php echo $view['lang']['game_003'] ?>
						<br />
					<a href='http://cakeinvader.gamebitcoin.io' target="_blank" class='btn btn-primary'><?php echo $view['lang']['game_007'] ?></a>

					</p>
					
				</div>
      		</div>
            <div class="col-md-6">
            	<div class="box_service_single_2">
                	<figure><img src="/../assets/img/CTRacerM_800x400.png" alt="" class="img-fluid"  onclick="onPopup(4)"></figure>
                	<h4>CTRacer M</h4>
                    <p><?php echo $view['lang']['game_004'] ?></p>
                </div>
            </div>
        </div><!--/row--> 
        <div class="row">
        	<div class="col-md-6">
            	<div class="box_service_single_2">
                	<figure><img src="/../assets/img/pinkdo_800x400.png" alt="" class="img-fluid" onclick="onPopup(1)"></figure>
					<h4>Pink Do</h4>
                    <p><?php echo $view['lang']['game_005'] ?>
					<br />
						<a href='http://moles.gamebitcoin.io/' target="_blank" class='btn btn-primary'><?php echo $view['lang']['game_007'] ?></a>
					</p>
              </div>
            </div>
            <div class="col-md-6">
            	<div class="box_service_single_2">
                	<figure><img src="/../assets/img/touchofdeath_800x400.png" alt="" class="img-fluid" onclick="onPopup(3)"></figure>
                	<h4>Touch of Death</h4>
                    <p><?php echo $view['lang']['game_006'] ?> 
					<br />
					<a href='http://touchofdeath.gamebitcoin.io' target="_blank" class='btn btn-primary'><?php echo $view['lang']['game_007'] ?></a>

					</p>
                </div>
            </div>
        </div><!--/row-->
		</div>
		<!-- /container -->
<!--
		<div class="bg_content">
			<div class="mask">
				<div class="container margin_default">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="content_center">
								<h3>The Strategy</h3>
								<p class="lead">Augue honestatis vis no, ius quot mazim forensibus in, per sale virtute legimus ne.</p>
								<p>Illud singulis indoctum ad sed, sed falli aliquip dolorem an. Tempor nonumes torquatos ne nec, an eum case cetero dissentiunt. Alterum bonorum mentitum an mel, eam dictas adipisci ad, omnes civibus sententiae no eos.</p>
							</div>
						</div>
						<div class="col-lg-6">

							<div class="barWrapper">
								<span class="progressText">Marketing Strategy</span>
								<div class="progress">
								  <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
								</div>
							</div>
							

							<div class="barWrapper">
								<span class="progressText">Target success</span>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 95%;" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
								</div>
							</div>
							

							<div class="barWrapper">
								<span class="progressText">Consumer increase</span>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
								</div>
							</div>
							

							<div class="barWrapper">
								<span class="progressText">Marketing campaigns</span>
								<div class="progress">
									<div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
								</div>
							</div>
							

						</div>
					</div>
					
				</div>
				
			</div>
			
		</div>
		
		
		<div class="bg_color_1">
        	<div class="container margin_default">
            	<div class="row justify-content-between">
                	<div class="col-lg-5">
                    	<h3 class="main_title_left">Request a Quote</h3>
                        <p class="lead">Usu habeo equidem sanctus no. Suas summo id sed, erat erant oporteat cu pri. In eum omnes molestie. Sed ad debet scaevola, ne mel lorem legendos.</p>
                        <ul class="list_features">
							<li>
								<i class="icon_genius"></i>
								<h4>Suas summo id sed erat erant oporteat</h4>
								<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
							</li>
							<li>
								<i class="icon_desktop"></i>
								<h4>Illud singulis indoctum ad sed</h4>
								<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
							</li>
							<li>
								<i class="icon_piechart"></i>
								<h4>Alterum bonorum mentitum an mel</h4>
								<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
							</li>
							<li>
								<i class="icon_archive_alt"></i>
								<h4>Illud singulis indoctum ad sed</h4>
								<p>Ut unum diceret eos, mel cu velit principes, ut quo inani dolorem mediocritatem. Mea in justo posidonium necessitatibus.</p>
							</li>
						</ul>
                    </div>
                    <div class="col-lg-6">
               			<div id="quote_wp">
                        	<h4>Fill out the form</h4>
							<p>Mussum ipsum cacilds, vidis litro abertis.</p>
							<div id="message-quote"></div>
                                <form method="post" action="/../assets/quote.php" id="quoteform">
                                    <div class="row">
                                        <div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="name_quote" name="name_quote">
												<label class="input_label">
													<span class="input__label-content">First name</span>
												</label>
											</span>
                                        </div>
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="lastname_quote" name="lastname_quote">
												<label class="input_label">
													<span class="input__label-content">Last name</span>
												</label>
											</span>
                                        </div>
                                    </div>
                                    <div class="row">
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="email" id="email_quote" name="email_quote">
												<label class="input_label">
													<span class="input__label-content">Email</span>
												</label>
											</span>
                                        </div>
										<div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="phone_quote" name="phone_quote">
												<label class="input_label">
													<span class="input__label-content">Phone number</span>
												</label>
											</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
											<span class="input">
												<input class="input_field" type="text" id="url_quote" name="url_quote">
												<label class="input_label">
													<span class="input__label-content">Site Link</span>
												</label>
											</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
											<span class="input">
												<textarea class="input_field" id="message_quote" name="message_quote" style="height:150px;"></textarea>
												<label class="input_label">
													<span class="input__label-content">Your message</span>
												</label>
											</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
											<span class="input">
												<input class="input_field" type="text" id="verify_quote" name="verify_quote">
												<label class="input_label">
													<span class="input__label-content">Are you human? 3 + 1 =</span>
												</label>
											</span>
                                            <input type="submit" value="Submit" class="btn_1 rounded" id="submit-quote">
                                        </div>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
	</main>
	<!--/main-->
	
	</div>
	<!-- page -->
	
	<script>
	function onPopup(num ){
		$('#popup_' + num).show();
	}

	function offPopup(num ){
		$('#popup_' + num).hide();
	}
	</script>

</body>
</html>