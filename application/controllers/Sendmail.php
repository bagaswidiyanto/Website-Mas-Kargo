<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sendmail extends CI_Controller
{

	public function index()
	{

		$this->load->library('email');

		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$this->db->query("INSERT INTO tbl_bantuan (name,email,phone,subject,message) VALUES ('" . $name . "','" . $email . "','" . $phone . "','" . $subject . "','" . $message . "') ");

		$setting = $this->db->get('tbl_email', 1)->row();

		$this->email->from($email, $name);
		$this->email->to($setting->emailTo);
		$this->email->cc($setting->emailCc);
		$this->email->bcc($setting->emailBcc);

		$this->email->subject($setting->emailSubject);
		$this->email->message('Resi : ' . $subject . '<br/>Name : ' . $name . '<br/> Contact : ' . $phone . '<br/> Message : ' . $message);

		$this->email->send();

		echo $this->email->print_debugger();
	}
}