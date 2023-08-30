<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

	private $app_title = 'Users App';

	public function __construct() {
		parent::__construct();
		$this->load->model('user_model');
	}

	public function create() {
		
		$this->load->helper('url');

		$data = array(
			'username' => $this->input->post('username', true),
			'password' => $this->input->post('password', true),
			'email' => $this->input->post('email', true)
		);

		if($this->user_model->saveUserOnDB($data)) {
			redirect('User_controller');
		}

		echo 'Error while creating user';

	}

	public function formCreateUser() {

		$data['app_title'] = $this->app_title;
		$data['title'] = 'Create user';

		$this->load->helper('url');
		$this->load->library('form_validation');

		$this->load->view('templates/header', $data);
		$this->load->view('create-user', $data);
		$this->load->view('templates/footer');
	}
	
	public function index()
	{

		$data['app_title'] = $this->app_title;
		$data['header'] = 'User list';
		$data['users'] = $this->user_model->getAll();

		$this->load->helper('url');
		
		$this->load->view('templates/header', $data);
		$this->load->view('user-list', $data);
		$this->load->view('templates/footer');
	}
}
