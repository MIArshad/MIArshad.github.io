<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('html');
		$this->load->helper('url');

	}

	public function index()
	{
		$this->load->view('home');
	}

	public function SendEmail()
	{
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$subject = $this->input->post('subject');
		$message = $this->input->post('message');

		$dump = base_url();

		var_dump($dump);

		$content="From: $name \n Email: $email \n Message: $message";
		$recipient = "ismaelarshad@gmail.com";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $content, $mailheader) or die("Error!");
	}
}
