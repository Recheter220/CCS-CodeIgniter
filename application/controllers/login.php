<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');

		// $this->output->enable_profiler(TRUE);
	}

	public function auth()
	{
		$this->load->model('model_user');
		$id = $this->input->post('user');
		$senha = md5($this->input->post('pass'));
		$user = $this->model_user->verifica($id, $senha);

		// var_dump($user);
		if ($user !== null) {
			$this->session->user = array(
				'usuario' => $user['USUARIO'],
				'id' => $user['ID']);

			$this->load->view('welcome_message');
		}
		else {
			unset($this->session->user);
			$this->load->view('senha_errada');
		}
	}
}

?>