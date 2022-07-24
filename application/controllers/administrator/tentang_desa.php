<?php
/**
 * 
 */
class Tentang_desa extends CI_Controller
{
	
	public function index()
	{
		$data['tentang'] = $this->tentang_model->tampil_data('tentang_desa')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/tentang_desa',$data);
		$this->load->view('templates_administrator/footer');
	}
	
	public function update($id)
	{
		$where = array('id' => $id);
		$data['tentang'] = $this->tentang_model->edit_data($where,'tentang_desa')->result();

		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/tentang_update',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function update_aksi()
	{
		$id 		= $this->input->post('id');
		$sejarah   	= $this->input->post('sejarah');
		$visi   	= $this->input->post('visi');
		$misi      	= $this->input->post('misi');
		

		$data = array(
			'sejarah' => $sejarah,
			'visi' => $visi,
			'misi'    => $misi,
		);
		$where = array(
			'id'=> $id
		);

		$this->tentang_model->update_data($where,$data,'tentang_desa');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Tentang Desa Berhasil diUpdate
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('administrator/tentang_desa');
	}
	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->user_model->hapus_data($where,'user');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data User Berhasil diHapus
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('administrator/users');
	}
}