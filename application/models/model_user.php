<?php
	class Model_User extends CI_Model 
	{
		public function verifica($user, $senha) {
			$this->db
				->where("USUARIO", $user)
				->where("SENHA", $senha);

			$resultado = $this->db
				->get("usuario")
				->row_array();

			return $resultado;
		}
	}	
?>