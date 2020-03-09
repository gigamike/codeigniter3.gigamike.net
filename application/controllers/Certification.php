<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certification extends CI_Controller {

	public function __construct() {
	  parent::__construct();
	  $this->load->model('certifications_model');
		$this->load->model('certification_tags_model');
  }

	public function index()
	{
		$order = array('certifications.id');
		$data['certification_tags'] = $this->certification_tags_model->getAll();
		$data['certifications'] = $this->certifications_model->getCertificationsWithTag([], $order);

		$this->load->view('templates/header');
    $this->load->view('certification', $data);
    $this->load->view('templates/footer');
	}
}
