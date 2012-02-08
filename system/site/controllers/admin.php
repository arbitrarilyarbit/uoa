<?php defined('BASEPATH') OR exit('No direct script access allowed');

//include_once (APPPATH . 'core/Admin_Controller.php');

class Admin extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/admin_m');
 	}

 	public function index() {
		$this->data['title'] = 'Welcome Admin';
		$data = $this->data;
		$this->load->view('admin/dashboard', $data);
	}

 	public function login() {
 		$this->data['title'] = 'Login';
		$this->load->model('auth/ion_auth_model');
		$data = $this->data;
		$this->load->view('admin/login', $data);
 	}
}