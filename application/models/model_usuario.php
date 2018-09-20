<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Usuario extends CI_Model {

	public function verifica($nome, $senha){

		$this->db->where("usuario", $nome);
		$this->db->where("senha",$senha);
		$usuario = $this->db->get("usuario")->row_array();
		return $usuario;
	}
}