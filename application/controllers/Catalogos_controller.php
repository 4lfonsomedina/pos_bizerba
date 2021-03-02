<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogos_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('id_usuario')){ Redirect('Welcome');}
		$this->load->model('Catalogos_model');
	}
	function productos(){
		$data['productos'] = $this->Catalogos_model->get_productos();
		$data['unidades'] = $this->Catalogos_model->get_unidades();
		$data['departamentos'] = $this->Catalogos_model->get_departamentos();
		$this->load->view('cabecera');
		$this->load->view('contenido/productos',$data);
		$this->load->view('pie');
	}
	function alta_producto(){
		$this->Catalogos_model->alta_producto($_POST);
		Redirect('Catalogos_controller/productos');
	}
	function borrar_producto(){
		$this->Catalogos_model->borrar_producto($_POST['id_producto']);
	}
	function editar_producto(){
		$this->Catalogos_model->editar_producto($_POST);
		Redirect('Catalogos_controller/productos');
	}

}

/* End of file Catalogos_controller.php */
/* Location: ./application/controllers/Catalogos_controller.php */