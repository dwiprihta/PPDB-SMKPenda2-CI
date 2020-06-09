
<div class="magin">
<div class="panel panel-danger">
<div class="panel panel-body">
<legend class="panel-heading">
  <center>
<h5><b>EDIT DATA CALON SISWA BARU</b></h5>
<h6><b>SMK KAPORIT</b></h6>
  </center>
</legend>

<!--DATA PRIBADI-->
<div class="magin">
<div class="panel panel-danger">
  <legend class="panel-heading"><span class="glyphicon glyphicon-user"></span> 
DATA PRIBADI SISWA
</legend>
<div class="panel panel-body">

<?php foreach($tbl_mhsiswa as $result_siswa);{?>
<!--<?php echo form_open("calon_mahasiswa/edit_siswa/".$tbl_mhsiswa->id_daftar); ?>-->

<form class="col-sm-12 form-vertical" action="" method="POST" style="margin-left: 0px">
<ul class="nav nav-tabs">
  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Nisn :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="nisn" type="text" size="35" value="<?php echo $result_siswa->nisn;?>"/>
    </div>
  </div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Nama Mahasiswa :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input required class="form-control" value="<?php echo $result_siswa->nama_mahasiswa;?>" name="namamhs" type="text" />
</div>
</div>

  
<div class="form-groub">
  <div class="col-lg-13 col-md-13 col-sm-13" style="margin-bottom: 1px;">
    <div class="button-groub" data-toggle="button">
                <label class="col-lg-3 col-md-3 col-sm-5 control-label"> Jenis Kelamin :  </label><br>
                <label class="btn btn-success" style= "margin-left: 15px;"">

                  <input type="radio" name="jenkal" value="cowok" <?php if ($result_siswa->jns_kelamin=='cowok') {echo 'checked';}?>> LAKI-LAKI
                </label>
                
                <label class="btn btn-success">
                  <input type="radio" name="jenkal" value="cewek" <?php if ($result_siswa->jns_kelamin=='cewek') {echo 'checked';}?>> PEREMPUAN
                </label>
    </div>
  </div>
</div></br>
        

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">  Tempat Lahir : </label>
  <div class="col-lg-2 col-md-2 col-sm-2">
  <input required="" class="form-control" name="tmpt_lahir" type="text" value="<?php echo $result_siswa->tempat_lahir;?>"/>
</div>

<label class="col-lg-3 col-md-3 col-sm-5 control-label">  Tanggal Lahir : </label>
  <div class="col-lg-3 col-md-3 col-sm-3">
  <input required="" class="form-control" name="tahun" type="date" value="<?php echo $result_siswa->tgllhr;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Agama :</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
  <select class="form-control" name="agama" placeholder="pilih agama anda" >
    <option><?php echo $result_siswa->agama;?></option>
    <option>ISLAM</option>
    <option>KRISTEN</option>
    <option>KATOLIK</option>
    <option>HINDU</option>
    <option>BUDHA</option>
    <option>KONGHUCU</option>
    <option>KEPERCAYAAN LAIN</option>
    </select>
    </div>
</div>

<div class="form-groub">
  <div class="col-lg-13 col-md-13 col-sm-13" style="margin-bottom: 1px;">
    <div class="button-groub" data-toggle="button">
                <label class="col-lg-3 col-md-3 col-sm-5 control-label"> Status Anak :  </label><br>
                <label class="btn btn-success" style= "margin-left: 15px;"">
                  <input type="radio" name="status" value="kandung" <?php if ($result_siswa->status=='kandung') {echo 'checked';}?>> ANAK KANDUNG
                </label>
                <label class="btn btn-success">
                  <input type="radio" name="status" value="tiri" <?php if ($result_siswa->status=='tiri') {echo 'checked';}?>> ANAK TIRI
                </label>
    </div>
  </div>
</div></br>

<div class="form-groub">
<label class="col-sm-3 control-label">
Jurusan :</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
  <select class="form-control" name="jurusan" >
    <option><?php echo $result_siswa->jurusan;?></option>
    <option>PILIH JURUSAN YANG ANDA MINATI</option>
    <option>ILMU KOMPUTER</option>
    <option>TEKNIK INFORMATIKA</option>
    <option>SISTEM INFORMASI</option>
    <option>TEKNIK KOMPUTER</option>
    </select>
    </div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Asal Sekolah :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input required class="form-control" name="asal_sekolah" type="text" value="<?php echo $result_siswa->asal_sekolah;?>"/>
</div>
</div>


<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label"> Tahun Lulus :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="thajaran" class="form-control">
    <option><?php echo $result_siswa->tgllhr;?></option>
    <option>PILIH TAHUN LULUS</option>
    <?php
 for ($i=1900;$i<=2030;$i++)
    echo "<option>$i<br></option>";
  ?>
    </select>
    </div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Alamat :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="alamat" type="text" placeholder="Contoh : Kwasuhan RT. 03 RW 04 / Jl. Pelangi No. 2" value="<?php echo $result_siswa->alamat;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Kelurahan :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="kelurahan" type="text" value="<?php echo $result_siswa->kelurahan;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Kecamatan :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="kecamatan" type="text" value="<?php echo $result_siswa->kecamatan;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Kota :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="kota" type="text" value="<?php echo $result_siswa->kota;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Provinsi :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="provinsi" type="text" value="<?php echo $result_siswa->provinsi;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Telepon :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="telp" type="text" value="<?php echo $result_siswa->telp;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Anak Ke :</label>
<div class="col-lg-2 col-md-2 col-sm-2" style="pull:right;">
<input class="form-control" name="anak" type="text" value="<?php echo $result_siswa->no_anak;?>"/>
</div>

<label class="col-sm-3 control-label";>
Jumlah saudara :</label>
<div class="col-lg-3 col-md-3 col-sm-3">
<input class="form-control" name="jumlah_saudara" type="text" value="<?php echo $result_siswa->jumlah_saudara;?>"/>
</div>
</div>

</div>
</div>
</div>
<!--DATA PRIBADI-->

<!--DATA ORANG TUA-->
<div class="magin">
<div class="panel panel-success">
<div class="panel panel-body">
<legend>
<h5>DATA ORANG TUA</h5>
</legend>

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Nama Orang Tua :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
      <i>*Isi Data Menggunakan Nama Ayah/Ibu</i>
    <input required class="form-control" name="nama_ortu" type="text" size="35" value="<?php echo $result_siswa->nama_ortu;?>"/>
    </div>
  </div>

  <div class="form-group">
        <label class="col-lg-3 col-md-3 col-sm-5 control-label">
          Alamat          
        </label>
        <div class="col-lg-8 col-md-8 col-sm-6">
          <textarea name="alamat_ortu" class="form-control"><?php echo $result_siswa->alamat_ortu;?></textarea>
        </div>
      </div>


<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Pendidikan Ortu :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="pendidikan_ortu" class="form-control">
      <option><?php echo $result_siswa->pendidikan_ortu;?></option>
      <option>PILIH PENDIDIKAN ORANG TUA ANDA</option>
      <option>TIDAK SEKOLAH</option>
      <option>SD/SEDERAJAT</option>
      <option>SMP/SEDERAJAT</option>
      <option>SMA/SEDERAJAT</option>
      <option>STRATA 1</option>
      <option>STRATA 2</option>
      <option>STRATA 3</option>
    </select></div></div>

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Pekerjaan :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="pkerjaan" class="form-control">
      <option><?php echo $result_siswa->pekerjaan;?></option>
      <option>PILIH PEKERJAAN ANDA</option>
      <option>KARYAWAN SWASTA</option>
      <option>PNS</option>
      <option>APARAT</option>
      <option>GURU/ DOSEN</option>
      <option>PETANI</option>
      <option>WIRAUSAHA</option>
      <option>BURUH</option>
      <option>DLL</option>
    </select></div></div>

     <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Telpon :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="telpon_ortu" type="text" size="35" value="<?php echo $result_siswa->telpon_ortu;?>" />
    </div>
  </div>

</div>
</div>
</div>
<!--DATA ORANG TUA-->

<!--DATA NILAI SISWA-->
<div class="magin">
<div class="panel panel-success">
<div class="panel panel-body">
<legend>
<h5>DATA NILAI SISWA</h5>
</legend>

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">No Series ijzah :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="noseris" type="text" size="35" value="<?php echo $result_siswa->no_ijazah;?>"/>
    </div>
  </div>


  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Matematika :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="mtk" type="text" size="35" value="<?php echo $result_siswa->nilai_mtk;?>"/>
    </div>
  </div>

     <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Bhs. Indonesia :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="bindo" type="text" size="35" value="<?php echo $result_siswa->nilai_bindo;?>"/>
    </div>
  </div>

  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Bhs. Indonesia :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="bing" type="text" size="35" value="<?php echo $result_siswa->nilai_bing;?>"/>
    </div>
  </div>

     <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Rata-Rata Nilai :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="ratarata" type="text" size="35" value="<?php echo $result_siswa->rata_nilai;?>"/>
    </div>
  </div>

</div>
</div>
</div>
<!--DATA NILAI SISWA-->

<div class="magin">
<div class="panel panel-success">
<div class="panel panel-body">
<legend>
<h5>DATA PRESTASI SISWA</h5>
</legend>

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Juara :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="tingkat_juara" class="form-control">
      <option><?php echo $result_siswa->juara;?></option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select></div></div>


  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Bidang :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="bidang_prestasi" class="form-control">
      <option><?php echo $result_siswa->bidang;?></option>
      <option>OLAHRAGA</option>
      <option>SENI</option>
      <option>IPA</option>
      <option>TEKNOLOGI</option>
      <option>AKADEMIK</option>
      <option>DLL</option>
    </select></div></div>

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Tingkat :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="tingkat_prestasi" class="form-control">
      <option><?php echo $result_siswa->tingkat;?></option>
      <option>KECAMATAN</option>
      <option>KABUPATEN</option>
      <option>KOTA</option>
      <option>PROVINSI</option>
      <option>NASIONAL</option>
      <option>INTERNASIONAL</option>
    </select></div></div>

  </div>

<div class="panel-footer">
  <center>
<div class="button-groub">
<input class="btn btn-red" type="submit" name="edit" size="35" value="UBAH DATA">
<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET DATA"
></div></center>
</div>
</div>
</div>

</ul>
</form>
<?php };?>
</div>
</div>
</div>


