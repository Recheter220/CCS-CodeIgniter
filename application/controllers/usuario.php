<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function logar()
	{
	
		$this->load->model("model_usuario");
		$nome=$this->input->post("nome");
		$senha=md5($this->input->post("senha"));
		$dados['usuario']= $this->model_usuario->verifica($nome, $senha);
		
		if ($dados['usuario'])
		{
			$this->load->model("model_busca", 'cidade');
			$dados['cidades'] = $this->cidade->buscacidade();
			$this->session->set_userdata($dados['usuario']);
			$this->load->view('Menu');
			$this->load->view('VAGAS', $dados);
		}	
		else
		{
			$this->load->view('Menu');
			$this->load->view('CADASTRO');
		}
			
		
	}
}