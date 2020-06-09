<?php
 class M_data extends CI_Model{

//MAHASISWA
	function tampil_calon_mahasiswa(){
		return $this->db->get('tbl_mhsiswa');
	}
	//input calon mahasiswa
	function aksi_input_siswa(){
		//deklarasi ke array
		$data=array(
		//data mahasiswa
			"nisn"=>$this->input->post('nisn'),
			"nama_mahasiswa"=>$this->input->post('namamhs'),
			"jns_kelamin"=>$this->input->post('jenkal'),
			"tempat_lahir"=>$this->input->post('tmpt_lahir'),
			"tgllhr"=>$this->input->post('tahun'),
			"agama"=>$this->input->post('agama'),
			"status"=>$this->input->post('status'),
			"jurusan"=>$this->input->post('jurusan'),
			"asal_sekolah"=>$this->input->post('asal_sekolah'),
			"tahun_lulus"=>$this->input->post('thajaran'),
			"alamat"=>$this->input->post('alamat'),
			"kelurahan"=>$this->input->post('kelurahan'),
			"kecamatan"=>$this->input->post('kecamatan'),
			"kota"=>$this->input->post('kota'),
			"provinsi"=>$this->input->post('provinsi'),
			"telp"=>$this->input->post('telp'),
			"no_anak"=>$this->input->post('anak'),
			"jumlah_saudara"=>$this->input->post('jumlah_saudara'),
		//data orang tua siswa
			"nama_ortu"=>$this->input->post('nama_ortu'),
			"alamat_ortu"=>$this->input->post('alamat_ortu'),
			"pendidikan_ortu"=>$this->input->post('pendidikan_ortu'),
			"pekerjaan"=>$this->input->post('pkerjaan'),
			"telpon_ortu"=>$this->input->post('telpon_ortu'),
		//data nilai siswa
			"no_ijazah"=>$this->input->post('noseris'),
			"nilai_mtk"=>$this->input->post('mtk'),
			"nilai_bindo"=>$this->input->post('bindo'),
			"nilai_bing"=>$this->input->post('bing'),
			"rata_nilai"=>$this->input->post('ratarata'),
		//data prestasi
			"juara"=>$this->input->post('tingkat_juara'),
			"bidang"=>$this->input->post('bidang_prestasi'),
			"tingkat"=>$this->input->post('tingkat_prestasi'));
		//printah inputkan data
		$this->db->insert('tbl_mhsiswa',$data);//eksekusi simpan data	
		}

	//detil mahasiswa
	function detil_mahasiswa($where,$table){
	return $this->db->get_where($table,$where);}

	//tampil data yag akan diedit pada form
	function edit_siswa($where,$table){
	return $this->db->get_where($table,$where);}

	//aksi untuk mengedit data siswa
	function aksi_edit_siswa($id){
		$data=array(
			//data mahasiswa
			"nisn"=>$this->input->post('nisn'),
			"nama_mahasiswa"=>$this->input->post('namamhs'),
			"jns_kelamin"=>$this->input->post('jenkal'),
			"tempat_lahir"=>$this->input->post('tmpt_lahir'),
			"tgllhr"=>$this->input->post('tahun'),
			"agama"=>$this->input->post('agama'),
			"status"=>$this->input->post('status'),
			"jurusan"=>$this->input->post('jurusan'),
			"asal_sekolah"=>$this->input->post('asal_sekolah'),
			"tahun_lulus"=>$this->input->post('thajaran'),
			"alamat"=>$this->input->post('alamat'),
			"kelurahan"=>$this->input->post('kelurahan'),
			"kecamatan"=>$this->input->post('kecamatan'),
			"kota"=>$this->input->post('kota'),
			"provinsi"=>$this->input->post('provinsi'),
			"telp"=>$this->input->post('telp'),
			"no_anak"=>$this->input->post('anak'),
			"jumlah_saudara"=>$this->input->post('jumlah_saudara'),
		//data orang tua siswa
			"nama_ortu"=>$this->input->post('nama_ortu'),
			"alamat_ortu"=>$this->input->post('alamat_ortu'),
			"pendidikan_ortu"=>$this->input->post('pendidikan_ortu'),
			"pekerjaan"=>$this->input->post('pkerjaan'),
			"telpon_ortu"=>$this->input->post('telpon_ortu'),
		//data nilai siswa
			"no_ijazah"=>$this->input->post('noseris'),
			"nilai_mtk"=>$this->input->post('mtk'),
			"nilai_bindo"=>$this->input->post('bindo'),
			"nilai_bing"=>$this->input->post('bing'),
			"rata_nilai"=>$this->input->post('ratarata'),
		//data prestasi
			"juara"=>$this->input->post('tingkat_juara'),
			"bidang"=>$this->input->post('bidang_prestasi'),
			"tingkat"=>$this->input->post('tingkat_prestasi'));

		//perintah update data
		$this->db->where('id_daftar',$id);
		$this->db->update('tbl_mhsiswa',$data);//eksekusi
	}

	//hapus data
	function hapus_mahasiswa($id){
		$this->db->where('id_daftar',$id);
		$this->db->delete('tbl_mhsiswa');
	}

	//cari
	function get_siswa_keyword($keyword){
		$this->db->select('*');
		$this->db->from('tbl_mhsiswa');
		$this->db->like('nama_mahasiswa',$keyword);
		$this->db->or_like('nisn',$keyword);
		return $this->db->get()->result();
	}

	//input berita
	function simpan_berita(){
		$data= array(
			'judul_berita' =>$this->input->post('judul'),
			'penulis'=>$this->input->post('penulis'),
			'image_artikel'=>$this->input->post('file'),
			'isi_berita'=>$this->input->post('berita'));
		//printah inputkan data
		$this->db->insert('tbl_pengumuman',$data);


	}	 
}


