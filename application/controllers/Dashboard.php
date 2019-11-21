<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
		}
		$this->load->model('Models_Meta');
		$this->load->model('Models_Umat');
		$this->load->model('Models_Laporan');
	}

	public function index() {
		$data = array(
			'list_profesi' => $this->Models_Meta->list_pekerjaan(),
            'jumlah_pekerjaan_umat_lingkungan' => $this->Models_Laporan->jumlah_pekerjaan_umat_lingkungan(),
            'jumlah_kk_lingkungan' => $this->Models_Laporan->jumlah_kk_lingkungan(),
            'jumlah_umat_lingkungan' => $this->Models_Laporan->jumlah_umat_lingkungan(),
            'jumlah_umat_perempuan_lingkungan' => $this->Models_Laporan->jumlah_umat_perempuan_lingkungan(),
            'jumlah_umat_laki_lingkungan' => $this->Models_Laporan->jumlah_umat_laki_lingkungan(),
            'title_page' => 'Dashboard'
		);
		$this->load->view('header', $data);
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
	}

}