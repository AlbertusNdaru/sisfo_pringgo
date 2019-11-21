<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != 'login' || $this->session->userdata('level') != 'administrator'){
			redirect(base_url());
		}
		$this->load->model('Models_Admin');
		$this->load->model('Models_Umat');
		$this->load->model('Models_Meta');
	}

	public function index() {
		$data = array(
            'daftaradmin'         => $this->Models_Admin->daftaradmin(),
            'daftaradministrator' => $this->Models_Admin->daftaradministrator(),
            'daftarlingkungan'    => $this->Models_Admin->daftarlingkungan(),
            'list_lingkungan'     => $this->Models_Meta->list_lingkungan(),
            'title_page'          => 'Admin Area'
		);
		$this->load->view('header', $data);
		if($this->input->post('tambah-admin')) {
			$this->Models_Admin->tambahadmin();
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses menambahkan data admin.\', \'success\');});</script>');
			redirect(base_url('admin'));
		}
		if($this->input->post('perbarui-admin')) {
			$id = $this->input->post('adminid');
			$this->Models_Admin->perbaruiadmin($id);
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses memperbarui data admin.\', \'success\');});</script>');
			redirect(base_url('admin'));
		}
		if($this->input->post('hapus-admin')) {
			$id = $this->input->post('adminid');
			$username = $this->input->post('adminusername');
			$this->Models_Admin->hapusadmin($id, $username);
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses menghapus data admin.\', \'success\');});</script>');
			redirect(base_url('admin'));
		}
		$this->load->view('admin/index', $data);
		$this->load->view('footer');
	}

}