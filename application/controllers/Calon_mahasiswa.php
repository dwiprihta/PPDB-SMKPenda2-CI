<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Calon_mahasiswa extends CI_Controller{
	//CONSTRUCT
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->library('session');
		$this->load->helper(array('form','url','html'));
		$this->load->library('form_validation');

		/*if ($this->session->userdata('status')!="login"){
			redirect(base_url("login/index"));
		}*/
	}

	//INDEX
	public function siswa(){
	$keyword = $this->input->post('keyword');
	$data['tbl_mhsiswa']=$this->m_data->get_siswa_keyword($keyword);
	$this->load->view('v_header',$data);
	$this->load->view('mahasiswa/index_mahasiswa',$data);
	$this->load->view('v_footer',$data);
	}

	
	//DETIL DATA
	function detil_mahasiswa($id){
		//mengambil nilai berdasarkan inisial id
		$where=array('id_daftar'=>$id);
		$data['tbl_mhsiswa']=$this->m_data->detil_mahasiswa($where,'tbl_mhsiswa')->result();
		//panggil view
		$this->load->view('v_header',$data);
		$this->load->view('mahasiswa/detil_mahasiswa',$data);
		$this->load->view('v_footer',$data);
		}

	/*function input_calon_mahasiswa(){
		$this->load->view('v_header');
		$this->load->view('mahasiswa/input_calon_mahasiswa');
		$this->load->view('v_footer');
	}*/

	//TAMBAHKAN DATA
	function add(){
		if($this->input->post('masuk')){ //jika user mengeklik tombol submit
			$this->m_data->aksi_input_siswa();//pangil fungsi untuk menyimpan
			
   			
			redirect('Calon_mahasiswa/siswa',$data);//arrahkan tujuan form setelah tombol diklik
		}
		//panggil view
		$this->load->view('v_header');
		$this->load->view('mahasiswa/input_calon_mahasiswa');
		$this->load->view('v_footer');
	}

	//EDIT DATA
	function edit_siswa($id){		
		if ($this->input->post('edit')){ //jika tombol edit diclick
			$this->m_data->aksi_edit_siswa($id); //panggil fungsi ld pada model
			redirect ('Calon_mahasiswa/siswa');
		}

		//menggambil data berdasarkan inisial id
		$where=array('id_daftar'=>$id);
		$data['tbl_mhsiswa']=$this->m_data->edit_siswa($where,'tbl_mhsiswa')->result();
		/*$data['tbl_mhsiswa']=$this->m_data->view_by($id);*/
		//panggil view
		$this->load->view('v_header');
		$this->load->view('mahasiswa/edit_mahasiswa',$data);
		$this->load->view('v_footer');

	}

	//HAPUS DATA
	function hapus($id){
		$this->m_data->hapus_mahasiswa($id);
		redirect ('Calon_mahasiswa/siswa');
	}

function error()
  {
      $this->session->set_flashdata('error', 'Something is wrong.');
      return $this->load->view('Calon_mahasiswa/index_mahasiswa');
  }
}

	