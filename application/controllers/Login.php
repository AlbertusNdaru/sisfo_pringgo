<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if($this->session->userdata('status') === 'login'){
			redirect(base_url('dashboard'));
		}
		$this->load->model('Models_Login');
	}

	public function index() {
		$this->load->view('login');
		if($this->input->post('submit')) {
			$username      = $this->input->post('username');
			$password      = $this->input->post('password');
			$googlecaptcha = $this->input->post('g-recaptcha-response');
			$ipaddress     = $this->input->ip_address();

			//Verify Google Captcha
			$url = 'https://www.google.com/recaptcha/api/siteverify?secret=6Lcu3bIUAAAAAHUKzrIqxSuW5cIHa8-m3QnKm_mj&response='.$googlecaptcha.'&remoteip='.$ipaddress;
			$header = array(
				'content-type: application/json'
			);
			$result = curl_api_get($url, $header);

			$check_googlecaptcha = json_decode($result, true);

			$data_user = $this->Models_Login->data_user($username);
			$cek_user = $this->Models_Login->cek_user($username);

			if($cek_user == TRUE && password_verify($password, $data_user->password) == true) {
				$data_session = array(
					'username'   => $data_user->username,
					'lingkungan' => $data_user->kodelingkungan,
					'level'      => $data_user->level,
					'status'     => 'login'
				);
				$this->session->set_userdata($data_session);
				redirect(base_url('dashboard'));
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong username or password! Please try again!</div>');
				redirect(base_url());
			}
		}
	}
}
