<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Controller extends CI_Controller {

	private $app_title = 'Users App';

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('user_model');
		$this->setInitialLanguage();
	}

	public function setInitialLanguage()
	{
		$currentLanguage = $this->session->userdata('language');

		if($currentLanguage == null) {
			// load by default spanish language
			$this->lang->load('spanish_lang', 'spanish');
		}
		$this->lang->load($currentLanguage.'_lang', $currentLanguage);
	}

	// Recibe por POST los datos del registro y los guarda en la BBDD
	public function create() {
		
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$email = $this->input->post('email', true);

		if(!empty($username) && !empty($password) && !empty($email)) {
			$data = array(
				'username' => $username,
				'password' => $password,
				'email' => $email
			);
	
			if($this->user_model->saveUserOnDB($data)) {
				redirect('users/');
			}
		}
		else {
			$data['heading'] = 'Error';
			$data['message'] = 'Los datos de usuario no pueden estar vacíos';
			$this->load->view('errors/html/error_db', $data);
		}
	}

	// Busca un usuario por ID y devuelve un JSON del usuario
	public function findUser($id) {

		$user = $this->user_model->findOne($id);
		echo json_encode($user);

	}

	public function deleteUser($id) {
		if($this->user_model->deleteUserFromDB($id)) {
			redirect('users/');
		}
	}

	public function deleteAllUsers() {
		$this->user_model->deleteAllUsers();
		
	}

	// Devuelve la vista del registro de usuarios
	public function createUser() {

		$data['app_title'] = $this->app_title;
		$data['title'] = 'Create user';
		$this->load->library('form_validation');
		$this->load->view('templates/header', $data);
		$this->load->view('create-user', $data);
		$this->load->view('templates/footer');
	}

	// Devuelve la vista de la modificación de un usuario por ID
	public function modifyUser($id) {
		if($id != null) {
			$data['app_title'] = $this->app_title;
			$data['title'] = 'Modify user';
			$this->load->library('form_validation');
	
			$data['user'] = $this->user_model->findOne($id);
	
			$this->load->view('templates/header', $data);
			$this->load->view('modify-user', $data);
			$this->load->view('templates/footer');
		}
	}

	// Recibe los datos de modificación por POST y actualiza el usuario en la BBDD
	public function modify($id) {

		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$email = $this->input->post('email', true);

		if(!empty($username) && !empty($password) && !empty($email)) {

			$data = array(
				'username' => $username,
				'password' => $password,
				'email' => $email
			);
	
			if($this->user_model->updateUser($id, $data)) {
				redirect('users/');
			}
		}
		else {
			$data['heading'] = 'Error';
			$data['message'] = 'Los datos de usuario no pueden estar vacíos';
			$this->load->view('errors/html/error_db', $data);
		}
	}
	
	// Devuelve la vista de la tabla de usuarios registrados
	public function index() {

		$data['app_title'] = $this->app_title;
		$data['header'] = 'Users list';
		$data['users'] = $this->user_model->getAll();
	
		$this->load->view('templates/header', $data);
		$this->load->view('user-list', $data);
		$this->load->view('templates/footer');
	}
}
