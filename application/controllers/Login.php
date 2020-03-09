<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
		public function __construct() {
		    parent::__construct();
	  }

		/*
		* https://techarise.com/login-with-remember-me-using-codeigniter-mysql/
		*/
		public function index()
		{
			$this->load->view('templates/header');
			$this->load->view('login');
			$this->load->view('templates/footer');
		}
}
