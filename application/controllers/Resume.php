<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_controller
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');

    }

    public function index(){
        $data['title'] = 'Home Page';
        $this->load->view('template/header');
		$this->load->view('user/resume');
		$this->load->view('template/footer');
    }
}

?>