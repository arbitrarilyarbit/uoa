<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends Public_Controller {

	private $languages	= array ('english', 'hindi');

	public function __construct() {
		parent::__construct();

		// Set the language
		$this->_set_language();

		$this->load->library('form_validation');
		//$this->load->model('apply/apply_m');
	}

	public function index() {

		$data['page_output'] = $this->load->view('apply/main', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function step_1() {

		// Set rules
		$this->form_validation->set_rules(array(
			array(
				'field' => 'first_name',
				'label'	=> 'First Name',
				'rules'	=> 'trim|required'
			)
		));

		// If the form validation passed
		if ( $this->form_validation->run() ) {
			redirect('apply/step_2');
		}

		$data['page_output'] = $this->load->view('apply/step_1', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function step_2() {

		// Set rules
		$this->form_validation->set_rules(array(
			array(
				'field' => 'cgpa',
				'label'	=> 'CGPA',
				'rules'	=> 'trim|required'
			)
		));

		// If the form validation passed
		if ( $this->form_validation->run() ) {
			redirect('apply/step_3');
		}

		$data['page_output'] = $this->load->view('apply/step_2', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function step_3() {

		// Set rules
		$this->form_validation->set_rules(array(
			array(
				'field' => 'achv',
				'label'	=> 'Achievements',
				'rules'	=> 'trim|required'
			)
		));

		// If the form validation passed
		if ( $this->form_validation->run() ) {
			redirect('apply/step_4');
		}

		$data['page_output'] = $this->load->view('apply/step_3', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function step_4() {

		// Set rules
		$this->form_validation->set_rules(array(
			array(
				'field' => 'pic',
				'label'	=> 'Photograph',
				'rules'	=> 'trim'
			)
		));

		// If the form validation passed
		if ( $this->form_validation->run() ) {
			$this->_fileUpload();
			redirect('apply/review');
		}

		$data['page_output'] = $this->load->view('apply/step_4', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function review() {

		$data['page_output'] = $this->load->view('apply/review', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function complete() {

		$data['page_output'] = $this->load->view('apply/complete', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function change($language) {
		if (in_array($language, $this->languages)) {
			$this->session->set_userdata('language', $language);
		}

		redirect('apply');
	}

	private function _set_language() {

		if (in_array($this->session->userdata('language'), $this->languages)) {
			$this->config->set_item('language', $this->session->userdata('language'));
		}

		// let's load the language file belonging to the page i.e. method
		$lang_file = $this->config->item('language') . '/' . $this->router->fetch_method() . '_lang';
		if (is_file(realpath(dirname(__FILE__) . '/../language/' . $lang_file . EXT))) {
			$this->lang->load($this->router->fetch_method());
		}

		$this->lang->load('global');
	}

	private function _fileUpload() {
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '300';
		$config['max_width'] = '400';
		$config['max_height'] = '300';
		$config['encrypt_name'] = TRUE;

		/*if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
			$this->load->library('upload', $config);
			$this->upload->do_upload('userfile');
		}*/

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload()) {
			$error = array('error' => $this->upload->display_errors());
		} else {
			$data = array('upload_data' => $this->upload->data());
		}
	}
}