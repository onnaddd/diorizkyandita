<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Design extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Coba');
	}

	public function index()
	{

		$data['title'] = 'design Page';
		$result ['data'] = $this->Coba->tampilData();
		$result ['about'] = $this->Coba->tampilDataHome();
		$this->load->view('template/header');
		$this->load->view('user/design', $result);
		$this->load->view('template/footer');
	}
}
