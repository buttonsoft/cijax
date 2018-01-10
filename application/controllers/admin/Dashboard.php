<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : kang disman
* Email  : kang.disman@gmail.com
*/

class Dashboard extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = "Dashboard";
		$data['content'] = "v_dashboard";
		$this->load->view('template', $data);
	}

}