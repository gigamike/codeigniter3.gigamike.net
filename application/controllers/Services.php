<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
	public function index()
	{
		$this->load->view('templates/header');
    $this->load->view('services');
    $this->load->view('templates/footer');
	}
}
