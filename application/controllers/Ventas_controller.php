<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_controller extends CI_Controller {

	public function pos(){
		
		$this->load->view('cabecera');
		$this->load->view('ventas/pos');
		$this->load->view('pie');
		
	}
	public function apertura(){
		
		$this->load->view('cabecera');
		$this->load->view('ventas/apertura');
		$this->load->view('pie');
		
	}

	public function cierre(){
		
		$this->load->view('cabecera');
		$this->load->view('ventas/cierre');
		$this->load->view('pie');
		
	}

}

/* End of file Ventas_controller.php */
/* Location: ./application/controllers/Ventas_controller.php */