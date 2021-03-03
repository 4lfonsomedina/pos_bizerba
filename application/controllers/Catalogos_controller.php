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
		$this->load->view('catalogos/productos',$data);
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
	function departamentos(){
		$data['departamentos'] = $this->Catalogos_model->get_departamentos();
		$this->load->view('cabecera');
		$this->load->view('catalogos/departamentos',$data);
		$this->load->view('pie');
	}
	function alta_departamento(){
		$this->Catalogos_model->alta_departamento($_POST);
		Redirect('Catalogos_controller/departamentos');
	}
	function borrar_departamento(){
		$this->Catalogos_model->borrar_departamento($_POST['id_departamento']);
	}
	function editar_departamento(){
		$this->Catalogos_model->editar_departamento($_POST);
		Redirect('Catalogos_controller/departamentos');
	}
	function cajeros(){
		$data['cajeros'] = $this->Catalogos_model->get_cajeros();
		$this->load->view('cabecera');
		$this->load->view('catalogos/cajeros',$data);
		$this->load->view('pie');
	}
	function alta_cajero(){
		$this->Catalogos_model->alta_cajero($_POST);
		Redirect('Catalogos_controller/cajeros');
	}
	function borrar_cajero(){
		$this->Catalogos_model->borrar_cajero($_POST['id_usuario']);
	}
	function editar_cajero(){
		$this->Catalogos_model->editar_cajero($_POST);
		Redirect('Catalogos_controller/cajeros');
	}

}

/* End of file Catalogos_controller.php */
/* Location: ./application/controllers/Catalogos_controller.php */