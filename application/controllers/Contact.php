<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
		public function __construct() {
				parent::__construct();

				$this->load->library('email');
				$this->load->library('form_validation');
				$this->load->library('session');
				$this->load->helper('url');
		}

		public function index()
		{
				$data = [];

				$this->form_validation->set_rules('recaptcha', 'Recaptcha validation', 'required|callback_validate_recaptcha');
				$this->form_validation->set_rules('name', 'Name', 'required');
				$this->form_validation->set_rules('email', 'Email', 'required');
				$this->form_validation->set_rules('subject', 'Subject', 'required');
				$this->form_validation->set_rules('text', 'Message', 'required');
				if ($this->form_validation->run() == FALSE){
					$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		    }else{
					$this->email->from($this->input->post('email'));
					$this->email->to($this->config->item('email'));
					$this->email->subject($this->input->post('subject'));
					$message = "Name: " . $this->input->post('name');
					$message = "Phone: " . $this->input->post('phone');
					$message .= "Message: " . $this->input->post('text');
					$this->email->message($message);

					$this->email->send();

					$_SESSION['success'] = true;
					$this->session->mark_as_flash('success');
					redirect('contact');
				}

				$data['success'] = $this->session->flashdata('success');

				$this->load->view('templates/header');
		    $this->load->view('contact', $data);
		    $this->load->view('templates/footer');
		}

		public function validate_recaptcha() {
				$captcha = $this->input->post('recaptcha');
		    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $this->config->item('google_recaptcha_secret') . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
		    if ($response . 'success' == false) {
		    	return FALSE;
		    } else {
		    	return TRUE;
		    }
		}
}
