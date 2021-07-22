<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id_usuario')){ Redirect('Welcome');}
		$this->load->model('Empresa_model');
	}

	public function index(){
		$data['empresa']=$this->Empresa_model->get_empresa();
		$this->load->view('cabecera');
		$this->load->view('empresa/empresa',$data);
		$this->load->view('pie');
	}
	function guardar(){
		$this->Empresa_model->update_empresa($_POST);
		Redirect('Empresa_controller');
	}

}

/* End of file Empresa_controller.php */
/* Location: ./application/controllers/Empresa_controller.php */