<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct() {
	  parent::__construct();
	  $this->load->model('portfolios_model');
  }

	public function index()
	{
		$order = array('portfolios.created_at DESC');
		$data['portfolios'] = $this->portfolios_model->getPortfoliosWithTag([], $order);

		$this->load->view('templates/header');
    $this->load->view('portfolio', $data);
    $this->load->view('templates/footer');
	}
}
