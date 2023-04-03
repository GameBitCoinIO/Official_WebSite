<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Process extends CB_Controller {

	function __construct()
	{
		parent::__construct();
 
	}


	function contact()
	{
		$this->load->helper('form');
		$this->load->library(array('form_validation'));
		

		$name_contact = $this->db->escape_str($this->security->xss_clean($_POST['name_contact']));
		$email_contact = $this->db->escape_str($this->security->xss_clean($_POST['email_contact']));

		$phone_contact = $this->db->escape_str($this->security->xss_clean($_POST['phone_contact']));
		$message_contact = $this->db->escape_str($this->security->xss_clean($_POST['message_contact']));
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

		if ($is) {
			
			// Success message
			echo "<div id='success_page' style='padding:25px 0'>";
			echo "<strong >Email Sent.</strong><br>";
			echo "Thank you <strong>$name_contact</strong>,<br> your message has been submitted. We will contact you shortly.";
			echo "</div>";

		} else {

			echo 'ERROR!';

}
		
	}


}
