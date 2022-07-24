<?php
/**
 * 
 */
class Penduduk extends CI_Controller
{
	
	public function index()
	{
		$data['penduduk'] = $this->penduduk_model->tampil_data('penduduk')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/penduduk',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function detail($id)
	{
		$data['detail'] =  $this->penduduk_model->ambil_id_penduduk($id);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/penduduk_detail',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function tambah_penduduk()
	{
		$data = array(
			'id' => set_value('id'),
			'nama_lengkap' => set_value('nama_lengkap'),
			'alamat' => set_value('alamat'),
			'email' => set_value('email'),
			'telepon' => set_value('telepon'),
			'tempat_lahir' => set_value('tempat_lahir'),
			'tanggal_lahir' => set_value('tanggal_lahir'),
			'jenis_kelamin' => set_value('jenis_kelamin'),
			'photo' => set_value('photo'),

		);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/penduduk_form',$data);
		$this->load->view('templates_administrator/footer');
	}
	public function tambah_penduduk_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_penduduk();
		}
		else
		{
			$nik = $this->input->post('nik');
			$nama_lengkap = $this->input->post('nama_lengkap');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$telepon = $this->input->post('telepon');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			
			
			$data = array(
				'nik' => $nik,
				'nama_lengkap' => $nama_lengkap,
				'alamat' => $alamat,
				'email' => $email,
				'telepon' => $telepon,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'jenis_kelamin' => $jenis_kelamin,
				
			);
				$this->penduduk_model->insert_data($data,'penduduk');
				$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">Data Penduduk Berhasil ditambahkan
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('administrator/penduduk');
		}
	}


	public function _rules()
	{
		$this->form_validation->set_rules('nik','Nik','required');
		$this->form_validation->set_rules('nama_lengkap','Nama_lengkap','required');
		$this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('telepon','Telepon','required');
		$this->form_validation->set_rules('tempat_lahir','Tempat_lahir','required');
		$this->form_validation->set_rules('tanggal_lahir','Tanggal_lahir','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis_kelamin','required');
		
	}
	public function delete($id)
	{
		$where = array('id' => $id);
		$this->jurusan_model->hapus_data($where,'penduduk');
		$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Data Jurusan Berhasil diHapus
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('administrator/penduduk');
	}
}