<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Author : kang disman
* Email  : kang.disman@gmail.com
*/

class Produk extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$data['title'] = "Produk";
		$data['content'] = "v_produk";
  		$this->load->view('template', $data);
	}

	public function list_produk() {
		$data = $this->kategori_m->list_produk();
		echo json_encode($data);
	}

	public function get_produk() {
		$id = $this->input->get('id');
		$data = $this->kategori_m->get_produk_by_id($id);
		echo json_encode($data);
	}

	public function save_produk() {
		$kategori = $this->input->post('kategori');
		$data = $this->kategori_m->save_produk($kategori);
		echo json_encode($data);
	}

	public function update_produk() {
		$id = $this->input->post('id');
		$kategori = $this->input->post('kategori');
		$data = $this->kategori_m->update_produk($id, $kategori);
		echo json_encode($data);
	}

	public function delete_produk() {
		$id = $this->input->post('id');
		$data = $this->kategori_m->delete_produk($id);
		echo json_encode($data);
	}

}
