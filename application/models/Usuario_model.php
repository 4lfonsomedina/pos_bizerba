<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
	function get_empleado($num_empleado){
		
	}
	function datos_empleado($usuario,$clave){
		$this->db->where('usuario',$usuario);
		$this->db->where('clave',$clave);
		return $this->db->get('usuarios')->row_array();
	}
}

/* End of file sfera_model.php */
/* Location: ./application/models/sfera_model.php */