<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->model("model_busca", 'cidade');
		$dados['cidades'] = $this->cidade->buscacidade();
		$this->load->model("model_busca");
		$dados['vagas']=$this->model_busca->buscavagas();
		$this->load->view('Menu');
		$this->load->view('HOME',$dados);
		$this->load->view('RODAPE_MENU', $dados);

		// $this->output->enable_profiler(TRUE);
	}

}