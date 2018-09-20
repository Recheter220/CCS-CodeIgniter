<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curriculum extends CI_Controller {

	public function novo()
	{
		$nome=$this->input->post("nome");
		$sexo=$this->input->post("sex");
		$dt_nasc=$this->input->post("dt_nasc");
		$email=$this->input->post("email");
		$cep=$this->input->post("cep");
		$senha=$this->input->post("senha");

		$config['upload_path'] = './assests/img';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			
			$this->load->view('upload_form', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$this->load->view('upload_success', $data);
		}
		

	}
}