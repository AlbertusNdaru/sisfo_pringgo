<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
		}
	}

	public function index() {
		$data = array(
            'username' => $this->session->userdata('username'),
            'title_page' => 'Laporan'
		);
		$this->load->view('header', $data);
		$this->load->view('laporan/index', $data);
		$this->load->view('footer');
	}

}