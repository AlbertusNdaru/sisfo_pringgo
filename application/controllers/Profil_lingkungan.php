<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_lingkungan extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
		}
	}

	public function index() {
		$data = array(
            'username' => $this->session->userdata('username'),
            'title_page' => 'Profil Lingkungan'
		);
		$this->load->view('header', $data);
		$this->load->view('profil-lingkungan', $data);
		$this->load->view('footer');
	}

}