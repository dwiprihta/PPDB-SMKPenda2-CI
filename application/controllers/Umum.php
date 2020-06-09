<?php
defined ('BASEPATH') OR exit ('No direct script acces allowd');
class Umum extends CI_Controller{
	//CONSTRUCT
	function __construct(){
		parent::__construct();
		//$this->load->model('m_umum');
		$this->load->helper(array('form','url','html'));
		//$this->load->library('from_validation');

	}

	//INDEX
	function index(){
		$this->load->view('umum/header.php');
		$this->load->view('umum/body.php');
		$this->load->view('umum/footer.php');
	}

	function tentang_smk_penda(){
		$this->load->view('umum/header.php');
		$this->load->view('umum/tentang_smk_penda.php');
		$this->load->view('umum/footer.php');
	}

	function teknik_otomotif(){
		$this->load->view('umum/header.php');
		$this->load->view('umum/teknik_otomotif.php');
		$this->load->view('umum/footer.php');
	}

	function info_biaya(){
		$this->load->view('umum/header.php');
		$this->load->view('umum/info_biaya.php');
		$this->load->view('umum/footer.php');
	}

	function user(){
		$this->load->view('user/header.php');
		$this->load->view('user/footer.php');
	}
}
