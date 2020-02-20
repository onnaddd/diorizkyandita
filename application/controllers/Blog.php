<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_controller{
    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
    }
    public function index(){
        $data['title'] = 'Blog Page';
        $this->load->view('template/header');
        $this->load->view('user/blog');
        $this->load->view('template/footer');
    }

}