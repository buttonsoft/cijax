<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : kang disman
* Email  : kang.disman@gmail.com
*/

class Kategori_m extends CI_Model {

	public $table = "kategori";
	public $primary = "id_kat";

	public function kategori_list() {
		$this->db->order_by($this->primary, 'desc');
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function save_kategori($kategori) {
		$data = array('kategori' => $kategori);
		$this->db->insert($this->table, $data);
	}

	public function get_kategori_by_id($id) {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where($this->primary, $id);
		$query = $this->db->get();

		if ($query->num_rows() > 0) {
			foreach ($query->result() as $data) {
				$query = array(
					'id_kat' => $data->id_kat,
					'kategori' => $data->kategori
				 );
			}
		}
		
		return $query;
	}

	public function update_kategori($id, $kategori) {
		$data = array(
			'id_kat' => $id,
			'kategori' => $kategori
			 );
		$this->db->where($this->primary, $id);
		$this->db->update($this->table, $data);
	}

	public function delete_kategori($id) {
		$this->db->where($this->primary, $id);
		$this->db->delete($this->table);
	}

}
