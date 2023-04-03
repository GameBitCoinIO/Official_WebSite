<body id="register_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="/"><img src="/../assets/img/logo.png" width="192" height="42" data-retina="true" alt=""></a>
			</figure>
			<?php
			echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
			echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
			$attributes = array('class' => 'form-horizontal', 'name' => 'fregisterform', 'id' => 'fregisterform');
			echo form_open_multipart(current_full_url(), $attributes);
			?>

			<div class="form-group">

				<?php foreach (element('html_content', $view) as $key => $value) {
					
				?>

					<span class="input">
					<?php echo element('input', $value); ?>
						<label class="input_label">
							<label class="input__label-content" for="<?php echo element('field_name', $value); ?>"><?php echo element('display_name', $value); ?></label>
							<?php if (element('description', $value)) { ?>
								
							<?php } ?>
						</label>
					</span>

				<?php
				}
				?>
				<div id="pass-info" class="clearfix"></div>
			</div>
				
			

			<?php
				
				if ($this->cbconfig->item('use_member_photo') && $this->cbconfig->item('member_photo_width') > 0 && $this->cbconfig->item('member_photo_height') > 0) {
				?>
					<div class="form-group">
						<label class="col-lg-3 control-label" for="mem_photo">프로필사진</label>
						<div class="col-lg-8">
							<input type="file" name="mem_photo" id="mem_photo" />
							<p class="help-block">가로길이 : <?php echo number_format($this->cbconfig->item('member_photo_width')); ?>px, 세로길이 : <?php echo number_format($this->cbconfig->item('member_photo_height')); ?>px 에 최적화되어있습니다, gif, jpg, png 파일 업로드가 가능합니다</p>
						</div>
					</div>
				<?php
				}
				if ($this->cbconfig->item('use_member_icon') && $this->cbconfig->item('member_icon_width') > 0 && $this->cbconfig->item('member_icon_height') > 0) {
				?>
					<div class="form-group hide">
						<label class="col-lg-3 control-label" for="mem_icon">회원아이콘</label>
						<div class="col-lg-8">
							<input type="file" name="mem_icon" id="mem_icon" />
							<p class="help-block">가로길이 : <?php echo number_format($this->cbconfig->item('member_icon_width')); ?>px, 세로길이 : <?php echo number_format($this->cbconfig->item('member_icon_height')); ?>px 에 최적화되어있습니다, gif, jpg, png 파일 업로드가 가능합니다</p>
						</div>
					</div>
				<?php
				}
				?>
				<div class="form-group hide">
					<label class="col-lg-3 control-label" for="mem_open_profile">정보공개</label>
					<div class="col-lg-8">
						<div class="checkbox">
							<label for="mem_open_profile">
								<input type="hidden" name="mem_open_profile" id="mem_open_profile" value="0" <?php echo set_checkbox('mem_open_profile', '1', true); ?> />
								다른분들이 나의 정보를 볼 수 있도록 합니다.
							</label>
							<?php
							if (element('open_profile_description', $view)) {
							?>
								<p class="help-block"><?php echo element('open_profile_description', $view); ?></p>
							<?php
							}
							?>
						</div>
					</div>
				</div>
				<?php
				if ($this->cbconfig->item('use_note')) {
				?>
					<div class="form-group hide">
						<label class="col-lg-3 control-label">쪽지기능사용</label>
						<div class="col-lg-8">
							<div class="checkbox">
								<label for="mem_use_note">
									<input type="hidden" name="mem_use_note" id="mem_use_note" value="0" <?php echo set_checkbox('mem_use_note', '1', true); ?> />
									쪽지를 주고 받을 수 있습니다.
								</label>
								<?php if (element('use_note_description', $view)) { ?>
									<p class="help-block"><?php echo element('use_note_description', $view); ?></p>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php
				}
				?>
				<div class="form-group hide">
					<label class="col-lg-3 control-label">이메일 수신여부</label>
					<div class="col-lg-8">
						<div class="checkbox">
							<label for="mem_receive_email" >
								<input type="hidden" name="mem_receive_email" id="mem_receive_email" value="0" <?php echo set_checkbox('mem_receive_email', '1', true); ?> /> 수신
							</label>
						</div>
					</div>
				</div>
				<div class="form-group hide">
					<label class="col-lg-3 control-label">SMS 문자 수신</label>
					<div class="col-lg-8	">
						<div class="checkbox">
							<label for="mem_receive_sms">
								<input type="hidden" name="mem_receive_sms" id="mem_receive_sms" value="0" <?php echo set_checkbox('mem_receive_sms', '1', true); ?> /> 수신
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-lg-9 col-lg-offset-3">
						<button type="submit"  class="btn_1 rounded full-width add_top_30">Register</button>
						<div class="text-center add_top_10">Already have an acccount? <strong><a href="/user/login">Sign In</a></strong></div>
					</div>
				</div>
			<?php echo form_close(); ?>

			<div class="copy">© 2022 GameBit</div>
		</aside>
	</div>
	<!-- /login -->
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="/../assets/js/pw_strenght.js"></script>
	<?php if ($this->cbconfig->item('use_recaptcha')) {
		$this->managelayout->add_js(base_url('assets/js/recaptcha.js'));
	} else {
		$this->managelayout->add_js(base_url('assets/js/captcha.js'));
	}
	?>


<?php
$this->managelayout->add_css(base_url('assets/css/datepicker3.css'));
$this->managelayout->add_js('http://dmaps.daum.net/map_js_init/postcode.v2.js');
$this->managelayout->add_js(base_url('assets/js/bootstrap-datepicker.js'));
$this->managelayout->add_js(base_url('assets/js/bootstrap-datepicker.kr.js'));
$this->managelayout->add_js(base_url('assets/js/member_register.js'));
if ($this->cbconfig->item('use_recaptcha')) {
	$this->managelayout->add_js(base_url('assets/js/recaptcha.js'));
} else {
	$this->managelayout->add_js(base_url('assets/js/captcha.js'));
}
?>

<script type="text/javascript">
//<![CDATA[
$('.datepicker').datepicker({
	format: 'yyyy-mm-dd',
	language: 'kr',
	autoclose: true,
	todayHighlight: true
});
$(function() {
	$('#fregisterform').validate({
		onkeyup: false,
		onclick: false,
		rules: {
			mem_userid: {required :true, minlength:3, maxlength:20, is_userid_available:true},
			mem_email: {required :true, email:true, is_email_available:true},
			mem_password: {required :true, is_password_available:true},
			mem_password_re : {required: true, equalTo : '#mem_password' },
			mem_nickname: {required :true, is_nickname_available:true}
			<?php if ($this->cbconfig->item('use_recaptcha')) { ?>
				, recaptcha : {recaptchaKey:true}
			<?php } else { ?>
				, captcha_key : {required: true, captchaKey:true}
			<?php } ?>
		},
		messages: {
			recaptcha: '',
			captcha_key: '자동등록방지용 코드가 올바르지 않습니다.'
		}
	});
});
//]]>
</script>
