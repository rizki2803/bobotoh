<?php 
class Team extends CI_Controller{
	public function index()
	{
		$data['menu'] = "team";
		$data['team'] = $this->m_team->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('team/team', $data);
		$this->load->view('templates/footer');
	}

	public function input (){
		$data['menu'] = "tambah";
		
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('team/input');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$t_team 				=$this->input->post('team');
		$t_logo 				=$this->input->post('logo');
		$t_status 				=$this->input->post('status');
		$t_tgl					=$this->input->post('tgl');

		$data = array(
			't_team' 		  => $t_team,
			't_logo' 		  => $t_logo,
			't_status'	 	  => $t_status,
			't_tgl' 		  => $t_tgl,
		);

		$this->m_team->input_data($data,'tb_team');
		redirect('team/index');
	}
	
	public function hapus ($t_id){
		$where = array ('t_id' => $t_id);
		$this->m_team->hapus_data($where, 'tb_team');
		redirect ('team/index');
	}

	public function edit($t_id){
		$where = array('t_id' =>$t_id);
		$data['team'] = $this->m_team->edit_data($where,'tb_team')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('team/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$t_id = $this ->input->post('id');
		$t_team = $this ->input->post('team');
		$t_logo = $this ->input->post('logo');
		$t_status = $this ->input->post('status');
		$t_tgl = $this ->input->post('tgl');

		$data = array(
			't_team' 		=> $t_team,
			't_logo' 	 	=> $t_logo,
			't_status'	  	=> $t_status,
			't_tgl'		  	=> $t_tgl,
		);
		$where = array(
			't_id' => $t_id
		);
		// var_dump($data);
		// exit;
		$this->m_team->update_data($where,$data,'tb_team');
		redirect('team/index');
	}
}