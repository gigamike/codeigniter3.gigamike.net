<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PrivacyAndPolicy extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
    $this->load->view('privacy-and-policy');
    $this->load->view('templates/footer');
	}
}
