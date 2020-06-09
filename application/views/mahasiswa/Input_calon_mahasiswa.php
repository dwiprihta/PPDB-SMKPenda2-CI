
<div class="container">
<div class="magin">
<div class="panel panel-danger">
<div class="panel panel-body">
<legend class="panel-heading">
  <center>
<h5><b>FORMULIR PENDAFTARAN SISWA BARU</b></h5>
<h6><b>SMK PENDA 2 KARANGANYAR</b></h6>
  </center>
</legend>

<!--DATA PRIBADI-->
<div class="magin">
<div class="panel panel-danger">
  <legend class="panel-heading"><span class="glyphicon glyphicon-user"></span> 
DATA PRIBADI SISWA
</legend>
<div class="panel panel-body">

<?php echo form_open("calon_mahasiswa/add"); ?>

<form class="col-sm-12 form-vertical" action="" method="POST" style="margin-left: 0px">
<ul class="nav nav-tabs">
  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Nisn :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="nisn" type="text" size="35"/>
    </div>
  </div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Nama Mahasiswa :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input required class="form-control" name="namamhs" type="text" />
</div>
</div>

  
<div class="form-groub">
  <div class="col-lg-13 col-md-13 col-sm-13" style="margin-bottom: 1px;">
    <div class="button-groub">
                <label Jenis Kelamin :  </label><br>
                <label class="btn btn-success" style= "margin-left: 15px;"">
                  <input type="radio" name="jenkal" value="cowok" autocomplete="off"> LAKI-LAKI
                </label>
                <label class="btn btn-success">
                  <input type="radio" name="jenkal" value="cewek" autocomplete="off"> PEREMPUAN
                </label>
    </div>
  </div>
</div></br>
        

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">  Tempat Lahir : </label>
  <div class="col-lg-2 col-md-2 col-sm-2">
  <input required="" class="form-control" name="tmpt_lahir" type="text"/>
</div>

<label class="col-lg-3 col-md-3 col-sm-5 control-label">  Tanggal Lahir : </label>
  <div class="col-lg-3 col-md-3 col-sm-3">
  <input required="" class="form-control" name="tahun" type="date"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Agama :</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
  <select class="form-control" name="agama" placeholder="pilih agama anda" >
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
                  <input type="radio" name="status"value="kandung" autocomplete="off"> ANAK KANDUNG
                </label>
                <label class="btn btn-success">
                  <input type="radio" name="status" value="tiri" autocomplete="off"> ANAK TIRI
                </label>
    </div>
  </div>
</div></br>

<div class="form-groub">
<label class="col-sm-3 control-label">
Jurusan :</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
  <select class="form-control" name="jurusan" >
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
<input required class="form-control" name="asal_sekolah" type="text" />
</div>
</div>


<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label"> Tahun Lulus :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="thajaran" class="form-control">
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
<input class="form-control" name="alamat" type="text" placeholder="Contoh : Kwasuhan RT. 03 RW 04 / Jl. Pelangi No. 2" />
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Kelurahan :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="kelurahan" type="text" />
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Kecamatan :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="kecamatan" type="text" />
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Kota :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="kota" type="text" />
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Provinsi :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="provinsi" type="text" />
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Telepon :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="telp" type="text" />
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Anak Ke :</label>
<div class="col-lg-2 col-md-2 col-sm-2" style="pull:right;">
<input class="form-control" name="anak" type="text" />
</div>

<label class="col-sm-3 control-label";>
Jumlah saudara :</label>
<div class="col-lg-3 col-md-3 col-sm-3">
<input class="form-control" name="jumlah_saudara" type="text" />
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
    <input required class="form-control" name="nama_ortu" type="text" size="35"/>
    </div>
  </div>

  <div class="form-group">
        <label class="col-lg-3 col-md-3 col-sm-5 control-label">
          Alamat          
        </label>
        <div class="col-lg-8 col-md-8 col-sm-6">
          <textarea name="alamat_ortu" class="form-control"></textarea>
        </div>
      </div>


<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Pendidikan Ortu :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="pendidikan_ortu" class="form-control">
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
    <input required class="form-control" name="telpon_ortu" type="text" size="35"/>
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
    <input required class="form-control" name="noseris" type="text" size="35"/>
    </div>
  </div>


  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Matematika :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="mtk" type="text" size="35"/>
    </div>
  </div>

     <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Bhs. Indonesia :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="bindo" type="text" size="35"/>
    </div>
  </div>

  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Bhs. Indonesia :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="bing" type="text" size="35"/>
    </div>
  </div>

     <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Rata-Rata Nilai :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input required class="form-control" name="ratarata" type="text" size="35"/>
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
      <option>PILIH JUARA ANDA</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
    </select></div></div>


  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">Bidang :</label>
    <div class="col-lg-8 col-md-8 col-sm-6"> 
    <select name="bidang_prestasi" class="form-control">
      <option>PILIH BIDANG PRESTASI ANDA</option>
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
      <option>PILIH TINGKAT PRESTASI ANDA</option>
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
<input class="btn btn-red" type="submit" name="masuk" size="35" value="DAFTAR">
<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET"
></div></center>
</div>
</div>
</div>

</ul>
</form>
</div>
</div>
</div>
</div>

