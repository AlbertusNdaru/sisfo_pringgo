<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models_Laporan extends CI_Model
{

	public function jumlah_kk_lingkungan()
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->from('data_keluarga');
		return $this->db->count_all_results();
	}

	public function jumlah_umat_lingkungan()
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->from('data_umat');
		return $this->db->count_all_results();
	}

	public function jumlah_umat_perempuan_lingkungan()
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->where('jenkel', '2');
		$this->db->from('data_umat');
		return $this->db->count_all_results();
	}

	public function jumlah_umat_laki_lingkungan()
	{
		$this->db->select('*');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->where('jenkel', '1');
		$this->db->from('data_umat');
		return $this->db->count_all_results();
	}

	public function jumlah_pekerjaan_umat_lingkungan()
	{
		$this->db->select('profesi');
		if ($this->session->userdata('level') == 'adminlingkungan') {
			$kodelingkungan = $this->session->userdata('lingkungan');
			$this->db->where('lingkungan', $kodelingkungan);
		}
		$this->db->from('data_umat');
		$result = $this->db->get()->result_array();
		foreach ($result as $key => $value) {
			$profesi[] = $value['profesi'];
		}
		return $profesi;
	}
}
