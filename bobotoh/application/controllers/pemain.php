<?php 
class pemain extends CI_Controller{
	public function index()
	{
		$data['menu'] = "pemain";
		$data['pemain'] = $this->m_pemain->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pemain/pemain', $data);
		$this->load->view('templates/footer');
	}

	public function input (){
		$data['menu'] = "tambah";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pemain/input');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$pm_team 			=$this->input->post('team');
		$pm_posisi			=$this->input->post('posisi');
		$pm_npemain 		=$this->input->post('pemain');
		$pm_photo 			=$this->input->post('photo');
		$pm_stat 			=$this->input->post('status');
		$pm_tgl				=$this->input->post('tgl');

				
		$data = array(
			'pm_team'		=> $pm_team,
			'pm_posisi'		=> $pm_posisi,
			'pm_npemain'	=> $pm_npemain,
			'pm_photo'		=> $pm_photo,
			'pm_stat'		=> $pm_stat,
			'pm_tgl'		=> $pm_tgl,
		);

		$this->m_pemain->input_data($data,'tb_pemain');
		redirect('pemain/index');
	}
	
	public function hapus ($pm_id){
		$where = array ('pm_id' => $pm_id);
		$this->m_pemain->hapus_data($where, 'tb_pemain');
		redirect ('pemain/index');
	}

	public function edit($pm_id){
		$where = array('pm_id' =>$pm_id);
		$data['pemain'] = $this->m_pemain->edit_data($where,'tb_pemain')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pemain/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$pm_id 				=$this->input->post('id');
		$pm_team 			=$this->input->post('team');
		$pm_posisi			=$this->input->post('posisi');
		$pm_npemain 		=$this->input->post('pemain');
		$pm_photo 			=$this->input->post('photo');
		$pm_stat 			=$this->input->post('status');
		$pm_tgl				=$this->input->post('tgl');
				
		$data = array(
			'pm_team'		=> $pm_team,
			'pm_posisi'		=> $pm_posisi,
			'pm_npemain'	=> $pm_npemain,
			'pm_photo'		=> $pm_photo,
			'pm_stat'		=> $pm_stat,
			'pm_tgl'		=> $pm_tgl,
		);
		$where = array(
			'pm_id' => $pm_id
		);
		// var_dump($data);
		// exit;
		$this->m_pemain->update_data($where,$data,'tb_pemain');
		redirect('pemain/index');
	}
}