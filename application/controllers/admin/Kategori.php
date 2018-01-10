<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : kang disman
* Email  : kang.disman@gmail.com
*/

class Kategori extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('kategori_m');
		$this->load->library('form_validation');
	}

	public function index() {
		$data['title'] = "Kategori";
		$data['content'] = "v_kategori";
  		$this->load->view('template', $data);
	}

	public function list_kategori() {
		$data = $this->kategori_m->kategori_list();
		echo json_encode($data);
	}

	public function get_kategori() {
		$id = $this->input->get('id_kat');
		$data = $this->kategori_m->get_kategori_by_id($id);
		echo json_encode($data);
	}

	public function save_kategori() {
		$kategori = $this->input->post('kategori');
		$data = $this->kategori_m->save_kategori($kategori);
		echo json_encode($data);
	}

	public function update_kategori() {
		$id = $this->input->post('id_kat');
		$kategori = $this->input->post('kategori');
		$data = $this->kategori_m->update_kategori($id, $kategori);
		echo json_encode($data);
	}

	public function delete_kategori() {
		$id = $this->input->post('id_kat');
		$data = $this->kategori_m->delete_kategori($id);
		echo json_encode($data);
	}

}
