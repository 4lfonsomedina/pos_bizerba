<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id_usuario')){ Redirect('Welcome');}
	}

	public function index(){
		$this->load->view('cabecera');
		//$this->load->view('catalogos/cajeros',$data);
		$this->load->view('pie');
	}

}

/* End of file Home_comtroller.php */
/* Location: ./application/controllers/Home_comtroller.php */