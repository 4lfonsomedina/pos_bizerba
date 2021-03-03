<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empresa_model extends CI_Model {

	function get_empresa(){
		return $this->db->get('empresa')->row();
	}
	function update_empresa($data){
		$this->db->where('id_empresa',$data['id_empresa']);
		unset($data['id_emplresa']);
		$this->db->update('empresa',$data);
	}

}

/* End of file Empresa_model.php */
/* Location: ./application/models/Empresa_model.php */