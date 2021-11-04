<?php

class M_team extends CI_Model{
	public function tampil_data()
	{
		return $this->db->get('tb_team');
	}

	public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where, $table){

		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		return $this->db->update($table,$data);
	}
}