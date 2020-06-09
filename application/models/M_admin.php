<?php
class M_admin extends CI_Model{
	//ADMIN

/*===========================DATA ADMIN===================*/

	//tampil data admin
 	function tampil_data_admin(){
 		return $this->db->get('tbl_admin');
 	}

 	//detil admin
 	function detil_admin($where,$table){
 		return $this->db->get_where($table,$where);
	}

	//input data admin
	function input_admin(){
		$data =array(
		//tangkap inputan dari form
		"id_user"=>$this->input->post('nik'),
		"nama"=>$this->input->post('nama'),
		"tempat_lahir"=>$this->input->post('tmpt_lahir'),
		"tgl_lahir"=>$this->input->post('tahun'),
		"jns_kelamin"=>$this->input->post('op1'),
		"agama"=>$this->input->post('agama'),
		"status"=>$this->input->post('op2'),
		"jabatan"=>$this->input->post('jabatan'),
		"alamat"=>$this->input->post('alamat'),
		"kota"=>$this->input->post('kota'),
		"provinsi"=>$this->input->post('provinsi'),
		"telp"=>$this->input->post('telp'));
		
		//inputan foto
		
		//eksekusi inputan
		$this->db->insert('tbl_admin',$data);
	}

	//edit admin
	function edit_admin($where,$table){
		return $this->db->get_where($table,$where);
	}

	//eksekusi edit admin
	function aksi_edit_admin($id){
		$data =array(
		//tangkap inputan dari form
		"id_user"=>$this->input->post('nik'),
		"nama"=>$this->input->post('nama'),
		"tempat_lahir"=>$this->input->post('tmpt_lahir'),
		"tgl_lahir"=>$this->input->post('tahun'),
		"jns_kelamin"=>$this->input->post('op1'),
		"agama"=>$this->input->post('agama'),
		"status"=>$this->input->post('op2'),
		"jabatan"=>$this->input->post('jabatan'),
		"alamat"=>$this->input->post('alamat'),
		"kota"=>$this->input->post('kota'),
		"provinsi"=>$this->input->post('provinsi'),
		"telp"=>$this->input->post('telp'));
	
	//perintah update data
	$this->db->where('id',$id);
	$this->db->update('tbl_admin',$data);}

	//hapus admin
	function hapus_admin($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_admin');
	}

	/*=======================DATA JURUSAN===================*/

	//tampil master jurusan
	function get_jurusan_keyword($keyword){
	$this->db->select('*');
	$this->db->from('tbl_jurusan');
	$this->db->like('jurusan',$keyword);
	$this->db->or_like('id',$keyword);
	return $this->db->get()->result();
}

	//simpan data jurusan
	function tambah_jurusan($data){
		return $this->db->insert('tbl_jurusan', $data);
	}

	//HAPUS JURUSAN
	function hapus_jurusan($id){
	$this->db->where('id',$id);
	$this->db->delete('tbl_jurusan');
}
	

}
