
<!--INI ADALAH NAV-->
<div class="magin">
<div class="container">
<div class="panel panel-primary">
<div class="panel panel-body">

<legend><h5>INPUT DATA ADMIN</h5></legend><br>

<?php echo form_open('admin/input_admin');?>
  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">NIK :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input class="form-control" name="nik" type="text" size="35"/>
    </div>
  </div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Nama admin  :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input required class="form-control" name="nama" type="text" />
</div>
</div>

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
  <div class="col-lg-13 col-md-13 col-sm-13" style="margin-bottom: 1px;">
 <div class="button-groub" data-toggle="button">
                <label class="col-lg-3 col-md-3 col-sm-5 control-label"> Jenis Kelamin :  </label><br>
                <label class="btn btn-primary" style= "margin-left: 15px;"">
                  <input type="radio" name="op1" value="cowok" autocomplete="off"> LAKI-LAKI
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="op1" value="cewek" autocomplete="off"> PEREMPUAN
                </label>
              </div></div></div><BR> 

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
                <label class="col-lg-3 col-md-3 col-sm-5 control-label"> Status :  </label><br>
                <label class="btn btn-primary" style= "margin-left: 15px;"">
                  <input type="radio" name="op2" VALUE="menikah" autocomplete="off"> MENIKAH
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="op2" VALUE="single" autocomplete="off"> SINGEL
                </label>
              </div></div></div><BR>


  <div class="form-groub">
<label class="col-sm-3 control-label">
Jabatan :</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
  <select class="form-control" name="jabatan" placeholder="pilih agama anda" >
    <option>STAFF PSB</option>
    <option>SUPER ADMIN</option>
    <option>PENGAWAS</option>
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
  <label class="col-sm-3 control-label">Foto</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
<input class="btn btn-primary" type="file" name="file">
<i>* foto harus menggunakan ukuran 3X4</i>
</div>
</div>
</div>   
              
<div class="panel-footer">
  <center>
<div class="button-groub">
<input class="btn btn-red" type="submit" name="daftar" size="35" value="DAFTAR">
<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET"></div>
</center>

</ul>
</form>
</div>
</div>
</div>
