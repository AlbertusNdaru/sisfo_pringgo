<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Umat extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') != 'login'){
			redirect(base_url());
		}
		$this->load->helper('tgl_indo');
		$this->load->model('Models_Meta');
		$this->load->model('Models_Umat');
		$this->load->model('Models_Admin');
	}
	
	// function _remap() {
	// 	$nomor_keluarga = $this->uri->segment(2);
	// 	$id = $this->uri->segment(3);
    //     switch($nomor_keluarga){
    //     	case null;
    //     	case false;
    //     	case '';
    //     	case 'index': $this->index();
    //     	break;
    //     	// case 'pdf': $this->pdf();
    //     	// break;
    //     	case 'kkdariumat': $this->Models_Umat->tambahkeluargadariumat($id);
    //     	break;
    //     	case 'hapusumat': $this->Models_Umat->hapusumat($id);
    //     	break;
    //     	default: $this->detail_keluarga($nomor_keluarga);
    //     }
	// }
	
	public function getUmt()
	{
		$page        = $_GET['start'] ;
		$size        = isset($_GET['length'])? $_GET['length'] : 10 ;
		$search      = isset($_GET['search']['value'])? $_GET['search']['value']: null ;
		$order       = $_GET['order'][0]['column'];
		$dir         = $_GET['order'][0]['dir'];
		$ret['data'] = $this->Models_Umat->daftarUmat($page, $size, $search, $order, $dir);
		if ($search ==  null ) { $filtered = count($this->Models_Umat->semua_data_umat()); } else { $filtered= count($ret['data']);};
		$ret['draw'] = $_GET['draw'];
		$ret['recordsTotal'] = count($this->Models_Umat->semua_data_umat());
		$ret['recordsFiltered'] = $filtered;
		// echo $dir;
		echo json_encode($ret);
		// echo json_encode($_GET);
		
	}

		public function getKepalaKeluarga()
	{
		$page        = $_GET['start'] > 0 ? $_GET['start'] : 1 ;
		$size        = isset($_GET['length'])? $_GET['length'] : 10 ;
		$search      = isset($_GET['search']['value'])? $_GET['search']['value']: null ;
		$order       = $_GET['order'][0]['column'];
		$dir         = $_GET['order'][0]['dir'];
		$ret['data'] = $this->Models_Umat->daftarKepalaKeluarga($page, $size, $search, $order, $dir);
		if ($search ==  null ) { $filtered = count($this->Models_Umat->daftarkeluarga()); } else { $filtered= count($ret['data']);};
		$ret['draw'] = $_GET['draw'];
		$ret['recordsTotal'] = count($this->Models_Umat->daftarkeluarga());
		$ret['recordsFiltered'] = $filtered;
		// echo $dir;
		echo json_encode($ret);
		// echo json_encode($_GET);
		
	}

	public function index() {
		$data = array(
			'status_kawin'             => $this->Models_Meta->list_status_kawin(),
			'jenis_kk'                 => $this->Models_Meta->list_jenis_kk(),
			'hubkk'                    => $this->Models_Meta->list_hubungan_kk(),
			'ekonomi'                  => $this->Models_Meta->list_ekonomi(),
			'daftarkeluarga'           => $this->Models_Umat->daftarkeluarga(),
			'nomorkeluargaterakhir'    => $this->Models_Umat->nomorkeluargaterakhir(),
			'semua_data_umat'          => $this->Models_Umat->semua_data_umat(),
			'daftarnamakepalakeluarga' => $this->Models_Umat->daftarnamakepalakeluarga(),
            'title_page'      => 'Umat'
		);
		$this->load->view('header', $data);
		if($this->input->post('tambah-keluarga')) {
			$this->Models_Umat->tambahkeluarga();
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses menambahkan data keluarga baru.\', \'success\');});</script>');
			redirect(base_url('umat'));
		}
		if($this->input->post('hapus-keluarga')) {
			$keluarga = $this->input->post('keluarga');
			$this->Models_Umat->hapuskeluarga($keluarga);
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses menghapus data keluarga.\', \'success\');});</script>');
			redirect(base_url('umat'));
		}
		$this->load->view('umat/index', $data);
		$this->load->view('footer');
	}

	public function detail_keluarga($nomor_keluarga) {
		$data = array(
			'agama'               => $this->Models_Meta->list_jenis_agama(),
			'status_kawin'        => $this->Models_Meta->list_status_kawin(),
			'jenis_kk'            => $this->Models_Meta->list_jenis_kk(),
			'ekonomi'             => $this->Models_Meta->list_ekonomi(),
			'hubkk'               => $this->Models_Meta->list_hubungan_kk(),
			'jenkel'              => $this->Models_Meta->list_jenis_kelamin(),
			'pendidikan'          => $this->Models_Meta->list_pendidikan(),
			'profesi'             => $this->Models_Meta->list_pekerjaan(),
			'goldar'              => $this->Models_Meta->list_golongan_darah(),
			'datakeluarga'        => $this->Models_Umat->datakeluarga($nomor_keluarga),
			'anggotakeluarga'     => $this->Models_Umat->anggotakeluarga($nomor_keluarga),
            'title_page' => 'Detail Keluarga'
		);
		if (empty($data['datakeluarga'])) {
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Gagal!\', \'Maaf, data keluarga tidak ditemukan.\', \'error\');});</script>');
			redirect(base_url('umat'));
		}
		$this->load->view('header', $data);
		if($this->input->post('tambah-anggota')) {
			$this->Models_Umat->tambahanggota();
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses menambahkan anggota keluarga baru.\', \'success\');});</script>');
			redirect(base_url('umat/'.$nomor_keluarga));
		}
		if($this->input->post('perbarui-anggota')) {
			$id = $this->input->post('id-anggota-keluarga');
			$keluarga = $this->input->post('keluarga');
			$this->Models_Umat->perbaruianggota($id, $keluarga);
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses memperbaharui data umat.\', \'success\');});</script>');
			redirect(base_url('umat/'.$nomor_keluarga));
		}
		if($this->input->post('perbarui-keluarga')) {
			$keluarga = $this->input->post('np');
			$this->Models_Umat->perbaruikeluarga($keluarga);
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses memperbaharui data keluarga.\', \'success\');});</script>');
			redirect(base_url('umat/'.$nomor_keluarga));
		}
		if($this->input->post('hapus-umat')) {
			$id = $this->input->post('umat');
			$keluarga = $this->input->post('keluarga');
			$this->Models_Umat->hapusanggota($id, $keluarga);
			$this->session->set_flashdata('message', '<script>$(document).ready(function () {swal(\'Berhasil!\', \'Sukses menghapus data anggota keluarga.\', \'success\');});</script>');
			redirect(base_url('umat/'.$nomor_keluarga));
		}
		$this->load->view('umat/detail-keluarga', $data);
		$this->load->view('footer');
	}

	// public function pdf() {
	// 	$data = array(
	// 		'daftarkeluarga' => $this->Models_Umat->daftarkeluarga(),
 //            'title_page' => 'Data Keluarga Lingkungan'
	// 	);
	// 	// $this->load->view('umat/pdf-list-keluarga', $data);
	// 	$this->pdf->load_view('umat/pdf-list-keluarga', $data);
	// 	$this->pdf->setPaper('A4', 'portrait');
 //        $this->pdf->render();
 //        $this->pdf->stream('list-keluarga.pdf');
	// }

}