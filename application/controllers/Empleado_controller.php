<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		if(!$this->session->userdata('id_usuario')){ Redirect('Welcome');}
	}
	function index(){
		$this->load->view('cabecera');
		//$this->load->view('welcome_message');
		$this->load->view('pie');
	}
	function mis_recibos(){
		$this->load->view('cabecera');
		$this->load->view('consultas/recibos');
		$this->load->view('pie');
	}

}

/* End of file Empleado_controller.php */
/* Location: ./application/controllers/Empleado_controller.php */