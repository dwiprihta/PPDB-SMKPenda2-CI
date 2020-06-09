<!--MENAMPILKAN DATA-->
<div class="contaier">
<div class="magin">
<div class="panel panel-default">
<div class="panel-body">
<legend><h5>DETIL DATA CALON MAHASISWA</h5>
</legend>

<!--MELOOPING DATA PADA ARRAY MODEL-->
<?php foreach($tbl_mhsiswa as $result_mahasiswa);{?>
<!--MELOOPING DATA PADA ARRAY MODEL-->


<!--MAIN TABS-->
<div id="content">
	<ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
		<li class="active"><a href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Data Pribadi</a></li>

		<li><a href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-hdd" aria-hidden="true"></span> Data Orang-tua</a></li>

		<li><a href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Data nilai & prestasi</a></li>
	</ul>

	<!--content-->
	<div id="my-tab-content" class="tab-content">

		<!--data pribadi-->
		<div class="tab-pane active" id="tab1">
			<table width="50%" class="table table-striped table-condensed" style="margin-top: 20px;">
			<tr>
				<th width="30%">Nisn :</th>
				<td><?php echo $result_mahasiswa->nisn;?></td>
			</tr>

			<tr>
				<th width="10%">Nama :</th>
				<td><?php echo $result_mahasiswa->nama_mahasiswa;?></td>
			</tr>

			<tr>
				<th width="10%">Jenis kelamin :</th>
				<td><?php echo $result_mahasiswa->jns_kelamin;?></td>
			</tr>

			<tr>
				<th width="10%">Tempat, tanggal lahir :</th>
				<td><?php echo $result_mahasiswa->tempat_lahir.', '.$result_mahasiswa->tgllhr;?></td>
			</tr>

			<tr>
				<th width="10%">Agama :</th>
				<td><?php echo $result_mahasiswa->agama;?></td>
			</tr>

			<tr>
				<th width="10%">Status :</th>
				<td><?php echo $result_mahasiswa->status;?></td>
			</tr>

			<tr>
				<th width="10%">Jurusan :</th>
				<td><?php echo $result_mahasiswa->jurusan;?></td>
			</tr>

			<tr>
				<th width="10%">Asal sekolah :</th>
				<td><?php echo $result_mahasiswa->asal_sekolah;?></td>
			</tr>
			<tr>
				<th width="10%">Tahun lulus :</th>
				<td><?php echo $result_mahasiswa->tahun_lulus;?></td>
			</tr>


			<tr>
				<th width="10%">Alamat :</th>
				<td><?php echo $result_mahasiswa->alamat;?></td>
			</tr>

			<tr>
				<th width="10%">Kelurahan :</th>
				<td><?php echo $result_mahasiswa->kelurahan;?></td>
			</tr>

			<tr>
				<th width="10%">Kecamatan :</th>
				<td><?php echo $result_mahasiswa->kecamatan;?></td>
			</tr>

			<tr>
				<th width="10%">Kota :</th>
				<td><?php echo $result_mahasiswa->kota;?></td>
			</tr>
			<tr>
				<th width="10%">Provinsi :</th>
				<td><?php echo $result_mahasiswa->provinsi;?></td>
			</tr>

			<tr>
				<th width="10%">Telpon :</th>
				<td><?php echo $result_mahasiswa->telp;?></td>
			</tr>

			<tr>
				<th width="10%">No_anak :</th>
				<td><?php echo $result_mahasiswa->no_anak;?></td>
			</tr>

			<tr>
				<th width="10%">Jumlah saudara :</th>
				<td><?php echo $result_mahasiswa->jumlah_saudara;?></td>
			</tr>
	
			</table>
		</div>

		<!--data orang tua-->
		<div class="tab-pane" id="tab2">

			<table width="50%" class="table table-striped table-condensed" style="margin-top: 20px;">

			<tr>
				<th width="20%">Nama orang tua :</th>
				<td><?php echo $result_mahasiswa->nama_ortu;?></td>
			</tr>

			<tr>
				<th width="20%">Alamat orangtua :</th>
				<td><?php echo $result_mahasiswa->alamat_ortu;?></td>
			</tr>

			<tr>
				<th width="20%">Pendidikan orangtua :</th>
				<td><?php echo $result_mahasiswa->pendidikan_ortu;?></td>
			</tr>
			<tr>
				<th width="20%">Pekerjaan orangtua :</th>
				<td><?php echo $result_mahasiswa->pekerjaan;?></td>
			</tr>

			<tr>
				<th width="20%">Telpon orangtua :</th>
				<td><?php echo $result_mahasiswa->telpon_ortu;?></td>
			</tr>

		</table>
		</div>

		<div class="tab-pane" id="tab3">
			<table width="50%" class="table table-striped table-condensed" style="margin-top: 20px;">

			<tr>
				<th width="20%">Nomor ijazah :</th>
				<td><?php echo $result_mahasiswa->no_ijazah;?></td>
			</tr>

			<tr>
				<th width="20%">Nilai matematika :</th>
				<td><?php echo $result_mahasiswa->nilai_mtk;?></td>
			</tr>

			<tr>
				<th width="20%">Nilai bahasa indonesia :</th>
				<td><?php echo $result_mahasiswa->nilai_bindo;?></td>
			</tr>
			<tr>
				<th width="20%">Nilai bahasa inggris :</th>
				<td><?php echo $result_mahasiswa->nilai_bing;?></td>
			</tr>

			<tr>
				<th width="20%">Rata-rata nilai :</th>
				<td><?php echo $result_mahasiswa->rata_nilai;?></td>
			</tr>

			<tr>
				<th width="20%">Juara :</th>
				<td><?php echo $result_mahasiswa->juara;?></td>
			</tr>
			<tr>
				<th width="20%">Bidang :</th>
				<td><?php echo $result_mahasiswa->bidang;?></td>
			</tr>

			<tr>
				<th width="20%">Tingkat :</th>
				<td><?php echo $result_mahasiswa->tingkat;?></td>
			</tr>


			</table>
		</div>

	</div>
</div>
	<!--content-->
 <!--MAIN--> 

<?php };?>
</div>  
</div>
</div>
</div>
    <!--<a href="#" class="scrollup"><i class="glyphicon glyphicon-move"></i></a>-->

<!--konfirmasi hapus data-->