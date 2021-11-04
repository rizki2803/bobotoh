<?php

class Stadion extends CI_Controller{

	public function index()
	{
		$data['menu'] = "stadion";
		$data['stadion'] = $this->m_stadion->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('stadion/stadion', $data);
		$this->load->view('templates/footer');
	}

	public function input (){
		$data['menu'] = "tambah";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('stadion/input');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$s_team				=$this->input->post('team');
		$s_stadion 			=$this->input->post('stadion');
		$s_status 			=$this->input->post('status');
	

		$data = array(
			's_team' 		  => $s_team,
			's_stadion' 	  => $s_stadion,
			's_status'	  	  => $s_status,
				
		);

		$this->m_stadion->input_data($data,'tb_stadion');
		redirect('stadion/index');
	}
	
	public function hapus ($s_id){
		$where = array ('s_id' => $s_id);
		$this->m_stadion->hapus_data($where, 'tb_stadion');
		redirect ('stadion/index');
	}

	public function edit($s_id){
		$where = array('s_id' =>$s_id);
		$data['stadion'] = $this->m_stadion->edit_data($where,'tb_stadion')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('stadion/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$s_id 				=$this->input->post('id');
		$s_team				=$this->input->post('team');
		$s_stadion 			=$this->input->post('stadion');
		$s_status 			=$this->input->post('status');

		$data = array(
			's_team' 		  => $s_team,
			's_stadion' 	  => $s_stadion,
			's_status'	 	  => $s_status,
		);
		$where = array(
			's_id' => $s_id
		);
		// var_dump($data);
		// exit;
		$this->m_stadion->update_data($where,$data,'tb_stadion');
		redirect('stadion/index');
	}

}