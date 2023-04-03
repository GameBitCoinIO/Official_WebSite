<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Main class
 *
 * Copyright (c) CIBoard <www.ciboard.co.kr>
 *
 * @author CIBoard (develop@ciboard.co.kr)
 */

/**
 * 메인 페이지를 담당하는 controller 입니다.
 */
class Page extends CB_Controller
{

	/**
	 * 모델을 로딩합니다
	 */
	protected $models = array('Board');

	/**
	 * 헬퍼를 로딩합니다
	 */
	protected $helpers = array('form', 'array');


	function __construct() {
		
		parent::__construct();
	
	}

	
	/**
	 * 전체 메인 페이지입니다
	 */
	public function about()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		$idiom = $this->session->get_userdata();
		$language = $idiom['language'];
		if ($language =='' || $language == null) $language = 'english';
		$this->lang->load("about", $language);
		$lang = $this->lang->language;

		$view['view']['lang'] = $lang;
		
		$this->lang->load("tail", $language);
		$tail_lang = $this->lang->language;
		$view['view']['lang_tail'] = $tail_lang;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = 'About GameBit';
		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'about',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}

	public function servicesingle()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		$idiom = $this->session->get_userdata();
		$language = $idiom['language'];
		if ($language =='' || $language == null) $language = 'english';
		$this->lang->load("game", $language);
		$lang = $this->lang->language;

		$view['view']['lang'] = $lang;

		$this->lang->load("tail", $language);
		$tail_lang = $this->lang->language;
		$view['view']['lang_tail'] = $tail_lang;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = 'GAMES';
		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'service-single',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}

	public function whitepaper()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		$idiom = $this->session->get_userdata();
		$language = $idiom['language'];
		if ($language =='' || $language == null) $language = 'english';
		$this->lang->load("whitepaper", $language);
		$lang = $this->lang->language;

		$view['view']['lang'] = $lang;
		
		$this->lang->load("tail", $language);
		$tail_lang = $this->lang->language;
		$view['view']['lang_tail'] = $tail_lang;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = 'White Paper';
		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'whitepaper',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}

	public function contacts()
	{
		$is = false;
		if ($_POST['email_contact'] !='') 
		{
			$name_contact = $_POST['name_contact'];
			$email_contact = $_POST['email_contact'];

			$phone_contact = $_POST['phone_contact'];
			$message_contact = $_POST['message_contact'];
			$subject = "http://gamebitcoin.io/의 contact메일이 도착했습니다.";
			$content = "
				이름 : ".$name_contact."
				메일 : ".$email_contact."
				폰 :   ".$phone_contact."
				메시지 :  ".$message_contact."
			";
			//name, email, telephone, message
			//메일 전송
			$this->load->library('email');

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.w.gamebitcoin.io';
			$config['smtp_port'] = '587';
			$config['smtp_user'] = 'info@gamebitcoin.io';
			$config['smtp_pass'] = 'best21ck@#';

			$this->email->initialize($config);


			$this->email->from('info@gamebitcoin.io', 'Admin');
			$this->email->to($email_contact);

			$this->email->subject($subject);
			$this->email->message($content);
			
			$is = $this->email->send();
		}
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);
		
		$this->load->helper('form');
		
		$view = array();
		$view['view'] = array();

		$idiom = $this->session->get_userdata();
		$language = $idiom['language'];
		if ($language =='' || $language == null) $language = 'english';
		$this->lang->load("contacts", $language);
		$lang = $this->lang->language;

		$view['view']['lang'] = $lang;
		
		$this->lang->load("tail", $language);
		$tail_lang = $this->lang->language;
		$view['view']['lang_tail'] = $tail_lang;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = 'Contact Us';
		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'contacts',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
			'is' => $is
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());

		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));

	}

	public function help()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		$idiom = $this->session->get_userdata();
		$language = $idiom['language'];
		if ($language =='' || $language == null) $language = 'english';
		$this->lang->load("help", $language);
		$lang = $this->lang->language;

		$view['view']['lang'] = $lang;

		$this->lang->load("tail", $language);
		$tail_lang = $this->lang->language;
		$view['view']['lang_tail'] = $tail_lang;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = 'How we can help?';
		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'help',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}

	public function tokeninfo()
	{
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);

		$view = array();
		$view['view'] = array();

		$idiom = $this->session->get_userdata();
		$language = $idiom['language'];
		if ($language =='' || $language == null) $language = 'english';
		$this->lang->load("about", $language);
		$lang = $this->lang->language;

		$view['view']['lang'] = $lang;
		
		$this->lang->load("tail", $language);
		$tail_lang = $this->lang->language;
		$view['view']['lang_tail'] = $tail_lang;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = 'About Token';
		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'tokeninfo',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());
		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));
	}

	public function buytoken()
	{
		$is = false;
		if ($_POST['email_contact'] !='') 
		{
			$name_contact = $_POST['name_contact'];
			$email_contact = $_POST['email_contact'];

			$phone_contact = $_POST['phone_contact'];
			$message_contact = $_POST['message_contact'];
			$subject = "토큰 구매 문의 메일입니다.";
			$content = "
				이름 : ".$name_contact."
				메일 : ".$email_contact."
				메시지 :  ".$message_contact."
			";
			//name, email, telephone, message
			//메일 전송
			$this->load->library('email');

			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'mail.w.gamebitcoin.io';
			$config['smtp_port'] = '587';
			$config['smtp_user'] = 'info@gamebitcoin.io';
			$config['smtp_pass'] = 'best21ck@#';

			$this->email->initialize($config);


			$this->email->from('info@gamebitcoin.io', 'Admin');
			$this->email->to('info@gamebitcoin.io', 'Admin'); 

			$this->email->subject($subject);
			$this->email->message($content);
			
			$is = $this->email->send();
		}
		// 이벤트 라이브러리를 로딩합니다
		$eventname = 'event_main_index';
		$this->load->event($eventname);
		
		$this->load->helper('form');
		
		$view = array();
		$view['view'] = array();

		$idiom = $this->session->get_userdata();
		$language = $idiom['language'];
		if ($language =='' || $language == null) $language = 'english';
		$this->lang->load("contacts", $language);
		$lang = $this->lang->language;

		$view['view']['lang'] = $lang;
		
		$this->lang->load("tail", $language);
		$tail_lang = $this->lang->language;
		$view['view']['lang_tail'] = $tail_lang;

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before'] = Events::trigger('before', $eventname);

		$where = array(
			'brd_search' => 1,
		);
		$board_id = $this->Board_model->get_board_list($where);
		$board_list = array();
		if ($board_id && is_array($board_id)) {
			foreach ($board_id as $key => $val) {
				$board_list[] = $this->board->item_all(element('brd_id', $val));
			}
		}
		$view['view']['board_list'] = $board_list;
		$view['view']['canonical'] = site_url();

		// 이벤트가 존재하면 실행합니다
		$view['view']['event']['before_layout'] = Events::trigger('before_layout', $eventname);

		/**
		 * 레이아웃을 정의합니다
		 */
		$page_title = 'Block Deal';
		$meta_description = $this->cbconfig->item('site_meta_description_main');
		$meta_keywords = $this->cbconfig->item('site_meta_keywords_main');
		$meta_author = $this->cbconfig->item('site_meta_author_main');
		$page_name = $this->cbconfig->item('site_page_name_main');

		

		$layoutconfig = array(
			'path' => 'main',
			'layout' => 'layout',
			'skin' => 'buytoken',
			'layout_dir' => $this->cbconfig->item('layout_main'),
			'mobile_layout_dir' => $this->cbconfig->item('mobile_layout_main'),
			'use_sidebar' => $this->cbconfig->item('sidebar_main'),
			'use_mobile_sidebar' => $this->cbconfig->item('mobile_sidebar_main'),
			'skin_dir' => $this->cbconfig->item('skin_main'),
			'mobile_skin_dir' => $this->cbconfig->item('mobile_skin_main'),
			'page_title' => $page_title,
			'meta_description' => $meta_description,
			'meta_keywords' => $meta_keywords,
			'meta_author' => $meta_author,
			'page_name' => $page_name,
			'is' => $is
		);
		$view['layout'] = $this->managelayout->front($layoutconfig, $this->cbconfig->get_device_view_type());

		$this->data = $view;
		$this->layout = element('layout_skin_file', element('layout', $view));
		$this->view = element('view_skin_file', element('layout', $view));

	}
}

