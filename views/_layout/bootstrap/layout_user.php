<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="DIGITAL COIN Cryptocurrency Market and Trading Site Template">
    <meta name="author" content="SangJ">
	<meta name="naver-site-verification" content="9f8fe808a622092573d543c7019089b7435164dc" />
    <title>GameBit | NFT Game Platform</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="/../assets/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="/../assets/img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="/../assets/img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="/../assets/img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="/../assets/img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="/../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/../assets/css/style.css" rel="stylesheet">
	<link href="/../assets/css/vendors.css" rel="stylesheet">
	<link href="/../assets/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="/../assets/css/custom.css" rel="stylesheet">
	
	<!-- Modernizr -->
	<script src="/../assets/js/modernizr.js"></script>
	<script  src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.13.0/jquery-ui.min.js"></script>
	<script type="text/javascript">
	// 자바스크립트에서 사용하는 전역변수 선언
	var cb_url = "<?php echo trim(site_url(), '/'); ?>";
	var cb_cookie_domain = "<?php echo config_item('cookie_domain'); ?>";
	var cb_charset = "<?php echo config_item('charset'); ?>";
	var cb_time_ymd = "<?php echo cdate('Y-m-d'); ?>";
	var cb_time_ymdhis = "<?php echo cdate('Y-m-d H:i:s'); ?>";
	var layout_skin_path = "<?php echo element('layout_skin_path', $layout); ?>";
	var view_skin_path = "<?php echo element('view_skin_path', $layout); ?>";
	var is_member = "<?php echo $this->member->is_member() ? '1' : ''; ?>";
	var is_admin = "<?php echo $this->member->is_admin(); ?>";
	var cb_admin_url = <?php echo $this->member->is_admin() === 'super' ? 'cb_url + "/' . config_item('uri_segment_admin') . '"' : '""'; ?>;
	var cb_board = "<?php echo isset($view) ? element('board_key', $view) : ''; ?>";
	var cb_board_url = <?php echo ( isset($view) && element('board_key', $view)) ? 'cb_url + "/' . config_item('uri_segment_board') . '/' . element('board_key', $view) . '"' : '""'; ?>;
	var cb_device_type = "<?php echo $this->cbconfig->get_device_type() === 'mobile' ? 'mobile' : 'desktop' ?>";
	var cb_csrf_hash = "<?php echo $this->security->get_csrf_hash(); ?>";
	var cookie_prefix = "<?php echo config_item('cookie_prefix'); ?>";
	</script>


	<!-- Modernizr -->
	<script src="/../assets/js/modernizr.js"></script>
	
	<script type="text/javascript" src="<?php echo base_url('assets/js/common.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.validate.extension.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/sideview.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/js/js.cookie.js'); ?>"></script>

	
</head>


<!-- /header -->


	
		<!--/hero_in-->

		<?php if (isset($yield))echo $yield; ?>


<!--/main-->
	

<!-- page -->

<!-- COMMON SCRIPTS -->




<!-- COMMON SCRIPTS -->
    <script src="/../assets/js/common_scripts.js"></script>
    <script src="/../assets/js/main.js"></script>
	<script src="/../assets/validate.js"></script>
	


</html>

				