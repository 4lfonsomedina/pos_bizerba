<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalogos_model extends CI_Model {
	function get_productos(){
		$this->db->select('productos.*,unidades.unidad as unidad2,departamentos.departamento as departamento2');
		$this->db->join('unidades','productos.um=unidades.id_unidad');
		$this->db->join('departamentos','productos.departamento=departamentos.id_departamento');
		return $this->db->get('productos')->result();
	}
	function get_unidades(){
		return $this->db->get('unidades')->result();
	}
	function get_departamentos(){
		return $this->db->get('departamentos')->result();
	}
	function get_cajeros(){
		return $this->db->get('usuarios')->result();
	}
	function alta_producto($data){
		$this->db->insert('productos',$data);
	}
	function borrar_producto($id_producto){
		$this->db->where('id_producto',$id_producto);
		$this->db->delete("productos");
	}
	function editar_producto($data){
		$this->db->where('id_producto',$data['id_producto']);
		unset($data['id_producto']);
		$this->db->update('productos',$data);
	}
	function alta_departamento($data){
		$this->db->insert('departamentos',$data);
	}
	function borrar_departamento($id_departamento){
		$this->db->where('id_departamento',$id_departamento);
		$this->db->delete("departamentos");
	}
	function editar_departamento($data){
		$this->db->where('id_departamento',$data['id_departamento']);
		unset($data['id_departamento']);
		$this->db->update('departamentos',$data);
	}
	function alta_cajero($data){
		$this->db->insert('usuarios',$data);
	}
	function borrar_cajero($id_usuario){
		$this->db->where('id_usuario',$id_usuario);
		$this->db->delete("usuarios");
	}
	function editar_cajero($data){
		$this->db->where('id_usuario',$data['id_usuario']);
		unset($data['id_usuario']);
		$this->db->update('usuarios',$data);
	}
}

/* End of file Catalogos_model.php */
/* Location: ./application/models/Catalogos_model.php */