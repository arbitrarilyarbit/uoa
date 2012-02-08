<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Public_Controller {

	public function __construct() {
  		parent::__construct();
  		$this->load->model('user/user_m');
 	}

 	public function index() {
		echo 'Welcome to UOA';
	}
}