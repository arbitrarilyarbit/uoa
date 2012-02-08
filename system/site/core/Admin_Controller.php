<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	public function __construct() {
		parent::__construct();

		// Load the user model and get user data
		$this->load->library('ion_auth');
		ci()->current_user = $this->current_user = $this->ion_auth->get_user();

		// Show error and exit if the user does not have sufficient permissions
		if (!self::_check_access()) {
			$this->session->set_flashdata('error', 'Access Denied');
			redirect();
		}

		// If the setting is enabled redirect request to HTTPS
		if (strtolower(substr(current_url(), 4, 1)) != 's')	{
			redirect(str_replace('http:', 'https:', current_url()).'?session='.session_id());
		}
	}

	private function _check_access() {
		// These pages get past permission checks
		$ignored_pages = array('admin/login', 'admin/logout');

		// Check if the current page is to be ignored
		$current_page = $this->uri->segment(1, '') . '/' . $this->uri->segment(2, 'index');

		// Dont need to log in, this is an open page
		if (in_array($current_page, $ignored_pages)) {
			return true;
		} else if (!$this->current_user) {
			redirect('admin/login');
		} else if ($this->current_user->group === 'admin') {// Admins can go straight in
			return true;
		}

		return false;
	}

}