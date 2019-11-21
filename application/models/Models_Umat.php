<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models_Umat extends CI_Model
{

	public function daftarkeluarga()
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->from('data_keluarga');
		return $this->db->get()->result_array();
	}

	public function daftarnamakepalakeluarga()
	{
		$kepalakeluarga = $this->daftarkeluarga();
		foreach ($kepalakeluarga as $kepala) {
			$return[$kepala['np']] = $kepala['kepalakeluarga'];
		}
		return $return;
	}

	public function nomorkeluargaterakhir()
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->from('data_keluarga');
		return $this->db->get()->result_array();
	}

	public function tambahkeluarga()
	{
		$data_keluarga = array(
			'np' => $this->input->post('np'),
			'kepalakeluarga' => $this->input->post('kepalakeluarga'),
			'lingkungan'     => $this->session->userdata('lingkungan'),
			'telp'           => $this->input->post('telp'),
			'alamat'         => $this->input->post('alamat'),
			'stskwn'         => $this->input->post('stskwn'),
			'libermat'       => $this->input->post('libermat'),
			'tmpnikah'       => $this->input->post('tmpnikah'),
			'tglnikah'       => $this->input->post('tglnikah'),
			'jenkk'          => $this->input->post('jenkk'),
			'statusekonomi' => $this->input->post('statusekonomi')
		);
		$this->db->insert('data_keluarga', $data_keluarga);
		$kepala_keluarga = array(
			'keluarga' => $this->input->post('np'),
			'nama' => $this->input->post('kepalakeluarga'),
			'hubkk' => '01'
		);
		$this->db->insert('data_umat', $kepala_keluarga);
	}

	public function tambahkeluargadariumat($id)
	{
		// Data Umat Yang Bersangkutan
		$this->db->where('id', $id);
		$this->db->from('data_umat');
		$umat = $this->db->get()->row_array();
		// Buat Kepala Keluarga
		$data_keluarga = array(
			'np' => $umat['keluarga'],
			'kepalakeluarga' => $umat['nama'],
			'lingkungan' => $umat['lingkungan']
		);
		$this->db->insert('data_keluarga', $data_keluarga);
		// Update Hubungan KK
		$kepala_keluarga = array(
			'hubkk' => '01'
		);
		$this->db->where('id', $id);
		$this->db->update('data_umat', $kepala_keluarga);
		// Redirect ke halaman keluarga
		redirect(base_url('umat/' . $umat['keluarga']));
	}

	public function perbaruikeluarga($keluarga)
	{
		$data = array(
			'kepalakeluarga' => $this->input->post('kepalakeluarga'),
			'telp'           => $this->input->post('telp'),
			'alamat'         => $this->input->post('alamat'),
			'stskwn'         => $this->input->post('stskwn'),
			'libermat'       => $this->input->post('libermat'),
			'tmpnikah'       => $this->input->post('tmpnikah'),
			'tglnikah'       => $this->input->post('tglnikah'),
			'jenkk'          => $this->input->post('jenkk'),
			'statusekonomi'  => $this->input->post('statusekonomi')
		);
		$this->db->where('np', $keluarga);
		$this->db->update('data_keluarga', $data);
	}

	public function hapuskeluarga($keluarga)
	{
		$this->db->where('np', $keluarga);
		$this->db->delete('data_keluarga');
		$this->db->where('keluarga', $keluarga);
		$this->db->delete('data_umat');
	}

	public function datakeluarga($nomor_keluarga)
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->where('np', $nomor_keluarga);
		$this->db->from('data_keluarga');
		return $this->db->get()->row_array();
	}

	public function anggotakeluarga($nomor_keluarga)
	{
		$this->db->select('*');
		$this->db->where('keluarga', $nomor_keluarga);
		$this->db->from('data_umat');
		return $this->db->get()->result_array();
	}

	public function tambahanggota()
	{
		$data = array(
			'keluarga'   => $this->input->post('keluarga'),
			'lingkungan' => $this->session->userdata('lingkungan'),
			'nama'       => $this->input->post('nama'),
			'hubkk'      => $this->input->post('hubkk'),
			'tmplahir'   => $this->input->post('tmplahir'),
			'tgllahir'   => $this->input->post('tgllahir'),
			'jenkel'     => $this->input->post('jenkel'),
			'goldar'     => $this->input->post('goldar'),
			'pendidikan' => $this->input->post('pendidikan'),
			'profesi'    => $this->input->post('profesi')
		);
		$this->db->insert('data_umat', $data);
	}

	public function perbaruianggota($id, $keluarga)
	{
		$data = array(
			'lingkungan' => $this->session->userdata('lingkungan'),
			'nama'       => $this->input->post('nama'),
			'hubkk'      => $this->input->post('hubkk'),
			'tmplahir'   => $this->input->post('tmplahir'),
			'tgllahir'   => $this->input->post('tgllahir'),
			'jenkel'     => $this->input->post('jenkel'),
			'goldar'     => $this->input->post('goldar'),
			'pendidikan' => $this->input->post('pendidikan'),
			'profesi'    => $this->input->post('profesi')
		);
		$this->db->where('id', $id);
		$this->db->where('keluarga', $keluarga);
		$this->db->update('data_umat', $data);
		if ($this->input->post('hubkk') == '01') {
			$kepala_keluarga = array(
				'kepalakeluarga' => $this->input->post('nama')
			);
			$this->db->where('np', $keluarga);
			$this->db->update('data_keluarga', $kepala_keluarga);
		}
	}

	public function hapusanggota($id, $keluarga)
	{
		$this->db->where('id', $id);
		$this->db->where('keluarga', $keluarga);
		$this->db->delete('data_umat');
	}

	public function hapusumat($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('data_umat');
		// Redirect ke halaman keluarga
		redirect(base_url('umat'));
	}

	public function semua_data_umat()
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->from('data_umat');
		return $this->db->get()->result_array();
	}

	public function daftarUmat($page, $size, $search = null, $order = null, $dir = null)
	{
		if ($search != null) {
			$this->db->like('nama', $search);
			$this->db->or_like('keluarga', $search);
		}

		$order = $order + 1;
		// echo $order;
		$this->db->order_by($order, $dir);
		$this->db->select("nama as '0', keluarga as '1', lingkungan as '2'");
		$this->db->from("data_umat");
	
		$this->db->limit($size, $page);
		// return null;
		// $this->db->get()->result();
		// echo $this->db->last_query();
		return $this->db->get()->result();
	}

	public function daftarKepalaKeluarga($page, $size, $search = null, $order = null, $dir = null)
	{
		if ($search != null) {
			$this->db->like('kepalakeluarga', $search);
			$this->db->or_like('np', $search);
		}

		$order = $order + 1;
		// echo $order;
		$this->db->order_by($order, $dir);
		$this->db->select("kepalakeluarga as '0', np as '1'");
		$this->db->from("data_keluarga");
		$this->db->limit($size, $page);
		// return null;
		// $this->db->get()->result();
		// echo $this->db->last_query();
		return $this->db->get()->result();
	}

	
}
