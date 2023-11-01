<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="게임비트코인,필링럭키,gamebit,gamebitcoin">
    <meta name="author" content="SangJ">
	<meta property="og:type" content="website"> 
	<meta property="og:title" content="게임비트코인">
	<meta property="og:description" content="게임비트코인,필링럭키,gamebit,gamebitcoin">
	<meta property="og:image" content="http://gamebitcoin.io/assets/img/Symbol-GB_Green.png">
	<meta property="og:url" content="http://gamebitcoin.io/">

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
    <link href="/../assets/css/style.css?ver=2022081101" rel="stylesheet">
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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-JS81D4Q25K">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-JS81D4Q25K');
</script>	
</head>

<header class="header menu_2">
	<div id="preloader11"><div data-loader="circle-side"></div></div><!-- /Preload -->
	<div id="logo">
		<a href="/"><img src="/../assets/img/logo.png" width="192"  data-retina="true" alt=""></a>
	</div>


	<ul id="top_menu" >
		<li style='margin-top : 20px;'> <a href="/main/change_lang/korean"  >KOR</a></li>
		<li style=''> <a href="/main/change_lang/english" >ENG</a></li>
	</ul>
	<ul id="top_menu" >
		<?php if ($this->member->is_member()) { ?>

					<li style='margin-top : 14px;font-size : 20px;'><a href="<?php echo site_url('login/logout?url=' . urlencode(current_full_url())); ?>" ><i class="icon-logout-2"></i></a></li>
					<li style="display:none;"><i class="fa fa-user"></i><a href="<?php echo site_url('mypage'); ?>" title="마이페이지">마이페이지</a></li>
				<?php } else { ?>
					<li style='margin-top : 14px;'><a href="<?php echo site_url('login?url=' . urlencode(current_full_url())); ?>" class="login">Login</a></li>
					<li style="display:none;"><i class="fa fa-user"></i><a href="<?php echo site_url('register'); ?>" title="회원가입">회원가입</a></li>
				<?php } ?>

		<li style="display:none;"><a href="#0" class="search-overlay-menu-btn">Search</a></li>
		<li class="hidden_tablet" style="display:none;" ><a href="#0" class="btn_1 rounded">Join Platform</a></li>
	</ul>
	<!-- /top_menu -->
	<a href="#menu" class="btn_mobile">
		<div class="hamburger hamburger--spin" id="hamburger">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
	</a>
	<nav id="menu" class="main-menu">
		<ul>
			<li><span><a href="/">Home</a></span>
				<!--
				<ul>
					<li><a href="index.html">With Sign up form</a></li>
					<li><a href="index-2.html">With Video Background</a></li>
					<li><a href="index-3.html">With Layer Slider</a></li>
					<li><a href="index-4.html">With Cookie bar (EU law)</a></li>
				</ul>
				-->
			</li>
			<li><span><a href="/page/about">GameBit</a></span></li>
			<li><span><a href="/page/tokeninfo">Token</a></span></li>
			<li><span><a href="/page/servicesingle">Game</a></span>
				<!--
				<ul>
					<li><a href="services.html">Services</a></li>
					<li><a href="service-single.html">Service single</a></li>
					<li><a href="service-single-2.html">Service single 2</a></li>
				</ul>
				-->
			</li>
			<li><span><a href="/board/news">News</a></span></li>
			<?php 
				$idiom = $this->session->get_userdata();
				$language = $idiom['language'];
				if ($language =='english') $file_name = '/../assets/WhitePaperbyGamebit(en).pdf';
				else $file_name = '/../assets/WhitePaperbyGamebit(ko).pdf';

			?>
			<li><span><a href="<?php echo $file_name; ?>" download > White Paper</a></span></li>
			<li><span><a href="/page/help">Help</a></span></li>
			<!--
			<li><span><a href="#0">Other Pages</a></span>
				<ul>
					<li><a href="media-gallery.html">Media Gallery</a></li>
					<li><a href="contacts.html">Contacts</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="register.html">Register</a></li>
					<li><a href="404.html">404 page</a></li>
					<li><a href="faq.html">Faq</a></li>
					<li><a href="help.html">Help</a></li>
					<li><a href="coming_soon/index.html">Coming soon</a></li>
					<li><a href="icon-pack-1.html">Icon Pack 1</a></li>
					<li><a href="icon-pack-2.html">Icon Pack 2</a></li>
					<li><a href="icon-pack-3.html">Icon Pack 3</a></li>
					<li><a href="icon-pack-4.html">Icon Pack 4</a></li>
				</ul>
			</li>
			-->
			<!-- <li><span><a href="#0">Buy template</a></span></li> -->
		</ul>
	</nav>
	<!-- Search Menu -->
	<div class="search-overlay-menu">
		<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
		<form role="search" id="searchform" method="get">
			<input value="" name="q" type="search" placeholder="Search..." />
			<button type="submit"><i class="icon_search"></i>
			</button>
		</form>
	</div><!-- End Search Menu -->
</header>
<!-- /header -->

<body>
	
	<div id="page">
	<?php $page_title = html_escape(element('page_title', $layout)); ?>
	<main>
		<? if ($page_title !='main') { ?>
		<section id="hero_in" class="general">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span><?php echo $page_title ?> </h1>
				</div>
			</div>
		</section>
		<?php } ?>
		<!--/hero_in-->
		<div <? if ($page_title !='main') { echo 'class="container margin_default"'; } ?> >

		<?php if (isset($yield))echo $yield; ?>
		</div>

		</main>
<!--/main-->
	
</div>
<!-- page -->

<!-- COMMON SCRIPTS -->

</body>


<!-- COMMON SCRIPTS -->
    <script src="/../assets/js/common_scripts.js"></script>
    <script src="/../assets/js/main.js?ver=2002081101"></script>
	<script src="/../assets/validate.js"></script>

<footer class="revealed">
	<div class="container margin_default">
		<div class="row">
			<div class="col-lg-5 col-md-12 p-r-5">
				<p><img src="/../assets/img/logo.png" width="192" height="42" data-retina="true" alt=""></p>
				<p><?php echo $view['lang_tail']['tail_001'] ?></p>
				<div class="follow_us">
					<ul>
						<li><?php echo $view['lang_tail']['tail_002'] ?></li>
						<li><a target='_blank' href="https://www.facebook.com/GameBitcoin_info-104020478990530"><i class="ti-facebook"></i></a></li>
						<li><a target='_blank' href="https://twitter.com/gamebit_info"><i class="ti-twitter-alt"></i></a></li>
						<li><a target='_blank' href="https://t.me/GameBit_News"><i class="icon-chat"></i></a></li>
						<li><a target='_blank' href="https://t.me/GameBit_News"><i class="icon-youtube-play"></i></a></li>
						<li><a target='_blank' href="https://www.instagram.com/gamebit_info/"><i class="ti-instagram"></i></a></li>
						<li><a target='_blank' href="https://medium.com/@gamebitcoin_info"><img style='filter:invert(100%);opacity:0.7;color:#fff' width="30" src="/../assets/css/icon_fonts/brands/medium.svg" /></a></li>
						<li><a target='_blank' href="https://discord.com/invite/MJXptRwYNR"><img style='filter:invert(100%);opacity:0.7;color:#fff' width="30" src="/../assets/css/icon_fonts/brands/discord.svg" /></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 ml-lg-auto">
				<h5><?php echo $view['lang_tail']['tail_003'] ?></h5>
				<ul class="links">
					<li><a href="/page/about">About</a></li>
					<li><a href="/page/servicesingle">Game</a></li>
					<li><a href="/page/help">Help</a></li>
					<li><a href="/page/contacts">Contacts</a></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6">
				<h5><?php echo $view['lang_tail']['tail_004'] ?></h5>
				<ul class="contacts">
					<!--
					<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
					-->
					<li><i class="ti-mobile"></i>&nbsp;&nbsp; 02-552-8860</li>
					<li><a href="mailto:info@gamebitcoin.io"><i class="ti-email"></i> info@gamebitcoin.io</a></li>
				</ul>
				<div id="newsletter">
				<h6>Newsletter</h6>
				<div id="message-newsletter"></div>
				<form method="post" action="/../assets/newsletter.php" name="newsletter_form" id="newsletter_form">
					<div class="form-group">
						<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
						<input type="submit" value="Submit" id="submit-newsletter">
					</div>
				</form>
				</div>
			</div>
		</div>
		<!--/row-->
		<hr>
		<div class="row">
			<div class="col-md-8">
			<ul id="additional_links">
			<li><?php echo $view['lang_tail']['tail_010'] ?></li>

			<li><?php echo $view['lang_tail']['tail_009'] ?></li>
			</ul>

				<ul id="additional_links">
					<li><a href="/../assets/WhitePaperbyGamebit(ko).pdf" download ><?php echo $view['lang_tail']['tail_005'] ?> <?php echo $view['lang_tail']['tail_011'] ?></a></li>
					<li><a href="/../assets/WhitePaperbyGamebit(en).pdf" download ><?php echo $view['lang_tail']['tail_005'] ?> <?php echo $view['lang_tail']['tail_012'] ?></a></li>
					<li style='display:none;'><a href="#0"><?php echo $view['lang_tail']['tail_006'] ?></a></li>
					<li><a href="/document/provision"><?php echo $view['lang_tail']['tail_007'] ?></a></li>
					<li><a href="/document/privacy"><?php echo $view['lang_tail']['tail_008'] ?></a></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div id="copy"><?php echo $view['lang_tail']['tail_013'] ?></div>
			</div>
		</div>
	</div>
</footer>

</html>

				