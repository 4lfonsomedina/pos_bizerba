<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

	function get_caja_abierta(){
		$r = $this->db->where('usuario',$this->session->userdata('id_usuario'))->where('estatus','A')->get('cajas');
		if($r->num_rows()>0){ return $r->row(); }
		else { return FALSE; }
	}	

	function abrir_caja($data){
		$data['hora_apertura']=date('H:i:s');
		$data['fecha_apertura']=date('Y-m-d');
		$data['usuario']=$this->session->userdata('id_usuario');
		$data['estatus']='A';
		$this->db->insert('cajas',$data);
	}

	function registrar_retiro($data){
		$data['hora']=date('H:i:s');
		$data['fecha']=date('Y-m-d');
		$data['usuario']=$this->session->userdata('id_usuario');
		$this->db->insert('retiros',$data);
	}

	function realizar_cierre($data){
		$data['hora_cierre']=date('H:i:s');
		$data['fecha_cierre']=date('Y-m-d');
		$data['estatus']='C';
		$this->db->where('id_cajas',$data['id_cajas']);
		unset($data['id_cajas']);
		$this->db->update('cajas',$data);
	}

}

/* End of file Ventas_model.php */
/* Location: ./application/models/Ventas_model.php */