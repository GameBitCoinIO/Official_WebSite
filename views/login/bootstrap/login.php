<body id="login_bg">
	
	<nav id="menu" class="fake_menu"></nav>
	
	<!-- End Preload -->
	
	<div id="login">
		<aside>
			<figure>
				<a href="/"><img src="/../assets/img/logo.png" width="192" height="42" data-retina="true" alt=""></a>
			</figure>
			<?php if ($this->cbconfig->item('use_sociallogin')) {
				$this->managelayout->add_js(base_url('assets/js/social_login.js'));
			?>
				<div class="access_social">
					<?php if ($this->cbconfig->item('use_sociallogin_facebook')) {?>
						<a href="#0" onClick="social_connect_on('facebook');" class="social_bt facebook">Login with Facebook</a>
					<?php } ?>
					<?php if ($this->cbconfig->item('use_sociallogin_twitter')) {?>
						<a href="javascript:;" onClick="social_connect_on('twitter');" title="트위터 로그인"><img src="<?php echo base_url('assets/images/social_twitter.png'); ?>" width="22" height="22" alt="트위터 로그인" title="트위터 로그인" /></a>
					<?php } ?>
					<?php if ($this->cbconfig->item('use_sociallogin_google')) {?>
						<a href="javascript:;" onClick="social_connect_on('google');" title="구글 로그인"><img src="<?php echo base_url('assets/images/social_google.png'); ?>" width="22" height="22" alt="구글 로그인" title="구글 로그인" /></a>
						<a href="#0" onClick="social_connect_on('google');" class="social_bt google">Login with Google</a>
					<?php } ?>
					<?php if ($this->cbconfig->item('use_sociallogin_naver')) {?>
						<a href="javascript:;" onClick="social_connect_on('naver');" title="네이버 로그인"><img src="<?php echo base_url('assets/images/social_naver.png'); ?>" width="22" height="22" alt="네이버 로그인" title="네이버 로그인" /></a>
					<?php } ?>
					<?php if ($this->cbconfig->item('use_sociallogin_kakao')) {?>
						<a href="javascript:;" onClick="social_connect_on('kakao');" title="카카오 로그인"><img src="<?php echo base_url('assets/images/social_kakao.png'); ?>" width="22" height="22" alt="카카오 로그인" title="카카오 로그인" /></a>
					<?php } ?>
				</div>
			<?php } ?>
			<?php
			echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
			echo show_alert_message(element('message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
			echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
			$attributes = array('class' => 'form-horizontal', 'name' => 'flogin', 'id' => 'flogin');
			echo form_open(current_full_url(), $attributes);
			?>
			<input type="hidden" name="url" value="<?php echo html_escape($this->input->get_post('url')); ?>" />
			

			<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<span class="input">
					<input class="input_field" type="email" autocomplete="off" name="mem_userid" value="<?php echo set_value('mem_userid'); ?>" accesskey="L">
						<label class="input_label">
						<span class="input__label-content"><?php echo $view['lang']['user_001'] ?></span>
					</label>
					</span>
					<span class="input">
					<input class="input_field" type="password" autocomplete="new-password" name="mem_password">
						<label class="input_label">
						<span class="input__label-content"><?php echo $view['lang']['user_002'] ?></span>
					</label>
					</span>
					<small><a href="<?php echo site_url('findaccount'); ?>"><?php echo $view['lang']['user_003'] ?></a></small>
				</div>
				<button type="submit" class="btn_1 rounded full-width add_top_60"><?php echo $view['lang']['user_004'] ?></button>
				<div class="text-center add_top_10"><?php echo $view['lang']['user_005'] ?> <strong><a href="<?php echo site_url('register');?>">Sign up!</a></strong></div>
			</form>
			<div class="copy">© 2022 GameBit</div>
		</aside>
	</div>
	<!-- /login -->
  
</body>






<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#flogin').validate({
		rules: {
			mem_userid : { required:true, minlength:3 },
			mem_password : { required:true, minlength:4 }
		}
	});
});
$(document).on('change', "input:checkbox[name='autologin']", function() {
	if (this.checked) {
		$('.autologinalert').show(300);
	} else {
		$('.autologinalert').hide(300);
	}
});
//]]>
</script>
