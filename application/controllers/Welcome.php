<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuario_model');
	}
	function index(){
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	function validar(){
		$empleado = $this->Usuario_model->datos_empleado($_POST['usuario'],$_POST['clave']);

		if($empleado==NULL){
			Redirect('Welcome?e');
		}else{
			$this->session->set_userdata($empleado);
			Redirect('Home_controller');
		}
	}
}
