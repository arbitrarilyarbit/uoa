<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apply extends Public_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->library('form_validation');
		$this->load->model('apply/apply_m');
		$this->lang->load('global');
	}

	public function index() {
		$this->lang->load('index');

		$data['page_output'] = $this->load->view('apply/main', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
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
			redirect('apply/step_2');
		}

		$data['page_output'] = $this->load->view('apply/step_1', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
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
			redirect('apply/step_3');
		}

		$data['page_output'] = $this->load->view('apply/step_2', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
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
			redirect('apply/step_4');
		}

		$data['page_output'] = $this->load->view('apply/step_3', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
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
			redirect('apply/review');
		}

		$data['page_output'] = $this->load->view('apply/step_4', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function review() {
		$this->lang->load('review');

		$data['page_output'] = $this->load->view('apply/review', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

	public function complete() {
		$this->lang->load('complete');

		$data['page_output'] = $this->load->view('apply/complete', $this->lang->language, TRUE);

		// Load the view file
		$this->load->view('apply/global', $data);
	}

}