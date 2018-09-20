<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vaga extends CI_Controller {

	public function index()
	{
		$this->load->view('Menu');
		$this->load->view('VAGAS');
	}
}