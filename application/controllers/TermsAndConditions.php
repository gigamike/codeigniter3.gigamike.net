<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TermsAndConditions extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
    $this->load->view('terms-and-conditions');
    $this->load->view('templates/footer');
	}
}