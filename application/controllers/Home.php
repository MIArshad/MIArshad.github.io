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

	public function returnUsers()
	{
		$userArray = array('Firstname' => 'Stuart', 'Surname' => 'cunningham');

		header('Content-Type: application/json');

		echo json_encode($userArray);
	}

	public function sendUsers()
	{
		$newUsers = $this->input->post();
		print_r($newUsers);
	}
}
