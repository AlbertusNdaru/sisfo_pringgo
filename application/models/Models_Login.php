<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Models_Login extends CI_Model {

	function data_user($username) {
    	$this->db->from('data_admin');
    	$this->db->where('username', $username);
    	return $this->db->get()->row();
	}

	function cek_user($username) {
	    $this->db->where('username',$username);
	    $query = $this->db->get('data_admin');
	    if ($query->num_rows() > 0) {
	    	return true;
	    } else {
	    	return false;
	    }
	}

}