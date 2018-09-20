<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Busca_vaga extends CI_Controller {

	public function index(){

		$this->load->model("model_busca");
		$vagas=$this->model_busca->buscavagas();
		
	}

	public function seleciona(){

			$this->load->model("model_busca");
			$buscatxt=$this->input->post("buscavaga");
			$deficiente=$this->input->post("vaga_deficientes");
			$cidade=$this->input->post("cidade");
			if (isset($deficiente)){
				$deficiente=1;
			}
			else
			{
				$deficiente=0;
			}
					
			if ($cidade == 0){
				$vagas_selecionadas['vaga']=$this->model_busca->seleciona($buscatxt, $deficiente);
			}
			else
			{
				$vagas_selecionadas['vaga']=$this->model_busca->selecionacomcidade($buscatxt, $deficiente, $cidade);
			}

			$vagas_selecionadas['usuario']=$this->session->userdata();
			$this->load->model("model_busca", 'cidade');
			$vagas_selecionadas['cidades'] = $this->cidade->buscacidade();
			$this->load->view('Menu');
			$this->load->view('VAGAS', $vagas_selecionadas);
			$this->load->view('VAGAS_RESULTADOS',$vagas_selecionadas['vaga']);
	}
}
