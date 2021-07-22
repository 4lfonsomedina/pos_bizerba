<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_controller extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id_usuario')){ Redirect('Welcome');}
		$this->load->model('Empresa_model');
		$this->load->model('Ventas_model');
	}

	function pos(){
		if(!$this->Ventas_model->get_caja_abierta()){ Redirect('Ventas_controller/apertura');}
		$this->load->view('cabecera');
		$this->load->view('ventas/pos');
		$this->load->view('pie');
	}

	function apertura(){
		if($this->Ventas_model->get_caja_abierta()){ Redirect('Ventas_controller/pos');}
		$data['empresa'] = $this->Empresa_model->get_empresa();
		$this->load->view('cabecera');
		$this->load->view('ventas/apertura',$data);
		$this->load->view('pie');
	}

	function realizar_apertura(){
		$this->Ventas_model->abrir_caja($_POST);
		$this->Empresa_model->update_empresa(Array("fondo"=>$_POST['fonso'],"tipo_cambio"=>$_POST['tipo_cambio']));
		Redirect('Ventas_controller/pos');
	}

	function cierre(){
		$data['caja']=$this->Ventas_model->get_caja_abierta();
		if(!$data['caja']){ Redirect('Ventas_controller/pos');}
		$this->load->view('cabecera');
		$this->load->view('ventas/cierre',$data);
		$this->load->view('pie');
	}

}

/* End of file Ventas_controller.php */
/* Location: ./application/controllers/Ventas_controller.php */