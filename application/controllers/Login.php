<?php
defined('BASEPATH') OR exit ('NO DIRRECT SCRIPT ALLOWED');

class Login extends CI_Controller{
	function __construct(){
	parent::__construct();
	$this->load->model('data_login');
}

//fungsi index lihat form login
function index(){
	$this->load->view('login');
}

//mengecek login
function cek_login(){

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$where = array (
				'username'=>$username,
				'password'=>md5($password));

			$cek=$this->data_login->cek_login("tbl_admin",$where)->num_rows();
				if($cek > 0){
					$data_session=array(
					'nama' => $username,
					'status' => "login"
			);
			$this->session->set_userdata($data_session);

			redirect(base_url('admin/index'));
		}else{
			$this->session->set_flashdata('notif','<div class="alert alert-warning" role="alert"> Login Gagal !!! Username / Password Mungkin Salah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('login/index');
			}
		}

function logout(){
	$this->session->sess_destroy();
	redirect(base_url('login/index'));
	}
}