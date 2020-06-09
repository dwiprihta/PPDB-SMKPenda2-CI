
<!--INI ADALAH NAV-->
<div class="magin">
<div class="container">
<div class="panel panel-primary">
<div class="panel panel-body">

    <?php foreach($tbl_admin as $result_admin);{?>
<legend><h5>EDIT DATA ADMIN</h5></legend><br>   
    <form class="col-sm-12 form-vertical" action="" method="POST" style="margin-left: 0px">

  <div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">NIK :</label>
    <div class="col-lg-8 col-md-8 col-sm-6">
    <input class="form-control" name="nik" type="text" size="35" value="<?php echo $result_admin->id_user;?>"/>
    </div>
  </div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Nama admin  :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input required class="form-control" name="nama" type="text" value="<?php echo $result_admin->nama;?>"/>
</div>
</div>

<div class="form-groub">
    <label class="col-lg-3 col-md-3 col-sm-5 control-label">  Tempat Lahir : </label>
  <div class="col-lg-2 col-md-2 col-sm-2">
  <input required="" class="form-control" name="tmpt_lahir" type="text" value="<?php echo $result_admin->tempat_lahir;?>"/>
</div>

<label class="col-lg-3 col-md-3 col-sm-5 control-label">  Tanggal Lahir : </label>
  <div class="col-lg-3 col-md-3 col-sm-3">
  <input required="" class="form-control" name="tahun" type="date" value="<?php echo $result_admin->tgl_lahir;?>"/>
</div>
</div>

<div class="form-groub">
  <div class="col-lg-13 col-md-13 col-sm-13" style="margin-bottom: 1px;">
 <div class="button-groub" data-toggle="button">
                <label class="col-lg-3 col-md-3 col-sm-5 control-label"> Jenis Kelamin :  </label><br>
                <label class="btn btn-primary" style= "margin-left: 15px;"">
                  <input type="radio" name="op1" value="cowok" <?php if($result_admin->jns_kelamin=='cowok'){echo'checked';}?>> LAKI-LAKI
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="op1" value="cewek" <?php if($result_admin->jns_kelamin=='cewek')
                      {
                        echo 'checked';}?>> PEREMPUAN
                </label>
              </div></div></div><BR> 

<div class="form-groub">
<label class="col-sm-3 control-label">
Agama :</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
  <select class="form-control" name="agama" placeholder="pilih agama anda" >
    <option><?php echo $result_admin->agama;?></option>
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
                  <input type="radio" name="op2" VALUE="menikah" <?php if($result_admin->status=='menikah'){echo'checked';}?> > MENIKAH
                </label>
                <label class="btn btn-primary">
                  <input type="radio" name="op2" VALUE="single" <?php if($result_admin->status=='single'){echo'checked';}?>> SINGEL
                </label>
              </div></div></div><BR>


  <div class="form-groub">
<label class="col-sm-3 control-label">
Jabatan :</label>
  <div class="col-lg-8 col-md-8 col-sm-6">
  <select class="form-control" name="jabatan" placeholder="pilih agama anda" >
     <option><?php echo $result_admin->jabatan;?></option>
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
<input class="form-control" name="alamat" type="text" placeholder="Contoh : Kwasuhan RT. 03 RW 04 / Jl. Pelangi No. 2" value="<?php echo $result_admin->alamat;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Kota :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="kota" type="text" value="<?php echo $result_admin->kota;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Provinsi :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="provinsi" type="text"  value="<?php echo $result_admin->provinsi;?>"/>
</div>
</div>

<div class="form-groub">
<label class="col-sm-3 control-label">
Telepon :</label>
<div class="col-lg-8 col-md-8 col-sm-6">
<input class="form-control" name="telp" type="text" value="<?php echo $result_admin->telp;?>"/>
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
<input onclick='return tanya_edit()' class="btn btn-red" type="submit" name="edit" size="35" value="EDIT">
<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET"></div>
</center>

</ul>
</form>
<?php };?>
</div>
</div>
</div>

<!--konfirmasi edit data-->
<script language="javascript">
function tanya_edit(){
    if (confirm("APAKAH ANDA YAKIN AKAN MENGUBAH DATA INI ???"))
{return true;
}else{
    return false;
}
}
</script>
<!--konfirmasi edit data-->