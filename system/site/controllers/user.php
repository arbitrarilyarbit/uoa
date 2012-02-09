<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Public_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('user/user_m');
		$this->lang->load('global');
	}

	public function index() {
		$this->lang->load('index');

		$data = array();

		$data = array_merge((array) $data, $this->lang->language);

		// Load the view file
		$this->load->view('user/global', array(
			'page_output' => $this->parser->parse('user/main', $data, TRUE)
		));
	}

	public function step_1() {
		$this->lang->load('step_1');

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
			redirect('user/step_2');
		}

		$data = array();
		
		$data = array_merge((array) $data, $this->lang->language);

		// Load the view file
		$this->load->view('user/global', array(
			'page_output' => $this->parser->parse('user/step_1', $data, TRUE)
		));
	}

	public function step_2() {
		$this->lang->load('step_2');

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
			redirect('user/step_3');
		}

		$data = array();
		
		$data = array_merge((array) $data, $this->lang->language);

		// Load the view file
		$this->load->view('user/global', array(
			'page_output' => $this->parser->parse('user/step_2', $data, TRUE)
		));
	}

	public function step_3() {
		$this->lang->load('step_3');

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
			redirect('user/step_4');
		}

		$data = array();

		$data = array_merge((array) $data, $this->lang->language);

		// Load the view file
		$this->load->view('user/global', array(
			'page_output' => $this->parser->parse('user/step_3', $data, TRUE)
		));
	}

	public function step_4() {
		$this->lang->load('step_4');

		// Set rules
		$this->form_validation->set_rules(array(
			array(
				'field' => 'pic',
				'label'	=> 'Photograph',
				'rules'	=> 'trim|required'
			)
		));

		// If the form validation passed
		if ( $this->form_validation->run() ) {
			redirect('user/review');
		}

		$data = array();

		$data = array_merge((array) $data, $this->lang->language);

		// Load the view file
		$this->load->view('user/global', array(
			'page_output' => $this->parser->parse('user/step_4', $data, TRUE)
		));
	}

	public function review() {
		$this->lang->load('review');

		$data = array();

		$data = array_merge((array) $data, $this->lang->language);

		// Load the view file
		$this->load->view('user/global', array(
			'page_output' => $this->parser->parse('user/review', $data, TRUE)
		));
	}

	public function complete() {
		$this->lang->load('complete');

		$data = array();

		$data = array_merge((array) $data, $this->lang->language);

		// Load the view file
		$this->load->view('user/global', array(
			'page_output' => $this->parser->parse('user/complete', $data, TRUE)
		));
	}

}