<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Busca extends CI_Model {

	public function buscavagas()
	{
		$this->db->order_by("DATA_INSERCAO");
		return $this->db->limit(6)->get("vagas")->result_array();
	}

	public function buscacidade(){
		return $this->db->get("cidade")->result_array();
	}

	public function seleciona ($buscatxt, $deficiente){
		$this->db->like("descricao",$buscatxt);
		$this->db->where("deficiente",$deficiente);
		return $this->db->get("vagas")->result_array();
	}

	public function selecionacomcidade ($buscatxt, $deficiente, $cidade){
		$this->db->like("descricao",$buscatxt);
		$this->db->where("deficiente",$deficiente);
		$this->db->where("cidade_id", $cidade);
		return $this->db->get("vagas")->result_array();
	}

}