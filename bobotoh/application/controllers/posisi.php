<?php 
class posisi extends CI_Controller{
	public function index()
	{
		$data['menu'] = "posisi";
		$data['posisi'] = $this->m_posisi->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('posisi/posisi', $data);
		$this->load->view('templates/footer');
	}

	public function input (){
		$data['menu'] = "tambah";
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('posisi/input');
		$this->load->view('templates/footer');
	}

	public function tambah_aksi(){
		$p_nposisi 			=$this->input->post('posisi');
		$p_ket 				=$this->input->post('keterangan');
		$p_stat 			=$this->input->post('status');
		$p_tgl				=$this->input->post('tgl');

				
		$data = array(
			'p_nposisi' 	=> $p_nposisi,
			'p_ket' 		=> $p_ket,
			'p_stat'	 	=> $p_stat,
			'p_tgl' 		=> $p_tgl,
		);

		$this->m_posisi->input_data($data,'tb_posisi');
		redirect('posisi/index');
	}
	
	public function hapus ($p_id){
		$where = array ('p_id' => $p_id);
		$this->m_posisi->hapus_data($where, 'tb_posisi');
		redirect ('posisi/index');
	}

	public function edit($p_id){
		$where = array('p_id' =>$p_id);
		$data['posisi'] = $this->m_posisi->edit_data($where,'tb_posisi')->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('posisi/edit', $data);
		$this->load->view('templates/footer');
	}

	public function update(){
		$p_id 				=$this->input->post('id');
		$p_nposisi 			=$this->input->post('posisi');
		$p_ket 				=$this->input->post('keterangan');
		$p_stat 			=$this->input->post('status');
		$p_tgl				=$this->input->post('tgl');

				
		$data = array(
			'p_nposisi' 	=> $p_nposisi,
			'p_ket' 		=> $p_ket,
			'p_stat'	 	=> $p_stat,
			'p_tgl' 		=> $p_tgl,
		);
		$where = array(
			'p_id' => $p_id
		);
		// var_dump($data);
		// exit;
		$this->m_posisi->update_data($where,$data,'tb_posisi');
		redirect('posisi/index');
	}
}