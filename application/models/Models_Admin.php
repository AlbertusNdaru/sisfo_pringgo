<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Models_Admin extends CI_Model
{

	public function daftaradmin()
	{
		$this->db->select('*');
		$this->db->from('data_admin');
		return $this->db->get()->result_array();
	}

	public function daftaradministrator()
	{
		$this->db->select('*');
		$this->db->where('level', 'administrator');
		$this->db->from('data_admin');
		return $this->db->get()->result_array();
	}

	public function tambahadmin()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'namalengkap' => $this->input->post('namalengkap'),
			'kodelingkungan' => $this->input->post('kodelingkungan'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'level' => $this->input->post('level')
		);
		$this->db->insert('data_admin', $data);
	}

	public function perbaruiadmin($id)
	{
		$data = array(
			'username' => $this->input->post('username'),
			'namalengkap' => $this->input->post('namalengkap'),
			'kodelingkungan' => $this->input->post('kodelingkungan')
		);
		if (!empty($this->input->post('password'))) {
			$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		}
		$this->db->where('id', $id);
		$this->db->update('data_admin', $data);
	}

	public function hapusadmin($id, $username)
	{
		$this->db->where('id', $id);
		$this->db->where('username', $username);
		$this->db->delete('data_admin');
	}

	public function daftarlingkungan()
	{
		$this->db->select('*');
		$this->db->from('data_lingkungan');
		return $this->db->get()->result_array();
	}

	
}
