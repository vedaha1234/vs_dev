<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Va_controller extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("Va_model");
         
    }

    public function index() {
        is_login();
		$data['title'] = "Dashboard";
        $this->load->view('dashboard',$data);
    }

    public function new_page() {
        $this->load->view('new');
    }
    public function error_page() {
        $this->load->view('404_error');
    }
}
