<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('session');
		$this->load->helper(array('form','url','html'));
		//$this->load->library('form_validation');

		//if($this->session->userdata('status')!="login"){
			//redirect(base_url("login/index"));
		//}
	}


/*===========================DATA INDEX====================*/

//index admin
	function index(){
		$this->load->view('V_header');
		$this->load->view('admin/Index_admin');
		$this->load->view('V_footer');
	}

/*===========================DATA ADMIN====================*/

//tampil admin
	function tampil_admin(){
		//parsing data dari database
		$data['tbl_admin']=$this->m_admin->tampil_data_admin()->result();
		//panggil view
		$this->load->view('V_header',$data);
		$this->load->view('admin/V_tampil_admin',$data);
		$this->load->view('V_footer',$data);
	}

//detil admin
	function detil_admin($id){
		//ambil data berdasarkan inisil; id
		$where=array('id'=>$id);
		$data['tbl_admin']=$this->m_admin->detil_admin($where,'tbl_admin')->result();

		//panggil view
		$this->load->view('V_header',$data);
		$this->load->view('admin/V_detail_admin',$data);
		$this->load->view('V_footer',$data);
	}

//input admin
	function input_admin(){
		if($this->input->post('daftar')){//jika user mengklik
			$this->m_admin->input_admin();//printah input siswa
			//if ($this->m_admin->input_admin() ==  'paid'){
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil disimpan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('admin/tampil_Admin',$data);
				}
				//panggil view
		$this->load->view('v_header');
		$this->load->view('admin/v_input_admin');
		$this->load->view('v_footer');
	}

//edit admin
	function edit_admin($id){
		if ($this->input->post('edit')){//jika tombol edit diclick
			$this->m_admin->aksi_edit_admin($id);//panggil fungsi pada model berdasarkan id & tampilkan di form
			redirect('admin/tampil_admin');
		}

		//menggambil data berdasarkan inisial id
			$where=array('id'=>$id);
			$data['tbl_admin']=$this->m_admin->edit_admin($where,'tbl_admin')->result();

			//panggil view
			$this->load->view('v_header',$data);
			$this->load->view('admin/v_edit_admin',$data);
			$this->load->view('v_footer',$data);	
	}

	//hapus admin
	function delete_admin($id){
		$this->m_admin->hapus_admin($id);
		redirect('admin/tampil_Admin');
	}

	
/*===========================DATA JURUSAN==========================*/

//tampil data master
 public function jurusan(){
	$keyword = $this->input->post('keyword');
	$data['tbl_jurusan']=$this->m_admin->get_jurusan_keyword($keyword);
	$this->load->view('v_header',$data);
	$this->load->view('admin/v_jurusan',$data);
	$this->load->view('v_footer',$data);
	}
/*function tampil_data_jurusan(){
	//parsing data dari database
	$data['tbl_jurusan']=$this->m_admin->tampil_data_jurusan()->result();

	//panggil view
	$this->load->view('v_header',$data);
	$this->load->view('admin/v_jurusan',$data);
	$this->load->view('v_footer',$data);
}*/

//tambah data jurusan
function tambah_jurusan(){
	$data=array(
		'id'=> $this->input->post('id'),
		'jurusan'=>$this->input->post('nama'));
	$this->m_admin->tambah_jurusan($data);
	$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        redirect('admin/jurusan');
	}

//HAPUS JURUSAN
	function hapus_jurusan($id)
	{
		# code...
		$this->m_admin->hapus_jurusan($id);
		redirect ('Admin/jurusan');

	}

/*===========================DATA PENGUMUMAN==========================*/

//tampil post
function pengumuman(){
	$this->load->view('v_header');
	$this->load->view('admin/input_pengumuman');
	$this->load->view('v_footer');
}

//simpan
function simpan_post(){
	$config['upload_path'] = './assets/images/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

    //$this->upload->initialize($config);

    if(!empty($_FILES['filefoto']['name'])){
            if ($this->upload->do_upload('filefoto')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='../assets/images/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= FALSE;
                $config['quality']= '60%';
                $config['width']= 710;
                $config['height']= 420;
                $config['new_image']= '../assets/images/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];
                $jdl=$this->input->post('judul');
                $penulis=$this->input->post('penulis');
                $berita=$this->input->post('berita');
 
                $this->m_admin->simpan_berita($jdl,$berita,$penulis,$gambar);
                redirect('admin/pengumuman');
        }else{
            redirect('admin/pengumuman');
        }
                      
        }else{
            redirect('admin/pengumuman');
        }           
    }
}

