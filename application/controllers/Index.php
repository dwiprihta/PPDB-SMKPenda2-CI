<?php
defined('BASEPATH') OR exit('No direct script allowed');

class Index extends CI_Controller{
	function __construct(){
		parent::__construct();
		//$this->load->model('m_index');
		$this->load->helper(array('form','url','html'));
	}


//index admin
	function index(){
		$this->load->view('user/header');
	}
}