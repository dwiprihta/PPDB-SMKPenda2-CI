
<!--MENAMPILKAN DATA-->
<div class="contaier">
<div class="magin">
<div class="panel panel-default">
<div class="panel-body">
<legend><h5>DATA SISWA PENDAFTAR</h5></legend>


<!--TABEL DATA MAHASISWA-->
<?=$this->session->flashdata('notif')?>
<div class="table-responsive">
<table class="table table-striped table-hover" style="border:1; border-color: orange; border-style: solid;">
<div class="col-md-12 padding-0" style="margin-bottom:5px;">

<!--TOMBOL CARI-->
<div class="col-md-3">
<form action="<?php echo site_url('calon_mahasiswa/siswa');?>" method="POST">
<div class="form-group">
                    <div class="input-group">
                      <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan apa saja ">
                      <div class="input-group-btn">
                      <button class="btn btn-red" type="submit" name="btn_search"><i class="fui-search"></i> Cari</button>
                      </div>
                    </div>
                  </div></form>              
</div>

<!--TOMBOL TAMBAH DAN REFRESH-->
<div class="col-md-3" style="margin-left:630px;">
  <a href="<?php echo base_url();?>calon_mahasiswa/add" class="btn btn-red"><span class="glyphicon glyphicon-plus"></span> Tambah</a>

<a href="<?php echo base_url();?>calon_mahasiswa/siswa" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
</div>
</div>            
  
   <!--HEADER TABLE-->
  <tr style="background: orange; color: #fff;"><th>NO</th><th> NISN</th><th>NAMA</th><th>GENDER</th><th>JURUSAN</th><th>KOTA</th><th>ORANG TUA</th><th>TAHUN LULUS</th><th>TELEPON</th><th>OPERASI</th></tr>
   <!--HEADER TABLE-->

  <?php
  $no=1;
  foreach($tbl_mhsiswa as $result_mahasiswa){?>
  
          <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $result_mahasiswa->nisn?></td>
                <td><?php echo anchor('calon_mahasiswa/detil_mahasiswa/'.$result_mahasiswa->id_daftar,$result_mahasiswa->nama_mahasiswa);?></td>
                <td><?php echo $result_mahasiswa->jns_kelamin?></td>
                <td><?php echo $result_mahasiswa->jurusan?></td>
                <td><?php echo $result_mahasiswa->kota?></td>
                <td><?php echo $result_mahasiswa->nama_ortu?></td>
                <td><?php echo $result_mahasiswa->tahun_lulus?></td>
                <td><?php echo $result_mahasiswa->telp?></td>

               <td><div class='btn-group'>
                           <a href="<?php echo base_url('calon_mahasiswa/edit_siswa/').$result_mahasiswa->id_daftar;?>" title='Edit Data' class='btn btn-warning btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>
                            

                            <a onclick='return tanya()' href="<?php echo base_url('calon_mahasiswa/hapus/').$result_mahasiswa->id_daftar;?>" title='Hapus Data' class='btn btn-danger btn-sm' name='hapsh'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>

             </div>
            </td>
          </td>
         </tr>
         <?php }?>
  </table>

<div class="col-md-12">
                        <ul class="pagination pull-right">
                          <li>
                            <a href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                            </a>
                          </li>
                          <li class="active"><a href="#">1</a></li>
                          <li><a href="#">2</a></li>
                          <li><a href="#">3</a></li>
                          <li><a href="#">4</a></li>
                          <li><a href="#">5</a></li>
                          <li>
                            <a href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                            </a>
                          </li>
                        </ul>
                  </div>
</div>
</div>
</div>
</div>
</div>

   	
<a href="#" class="scrollup"><i class="glyphicon glyphicon-move"></i></a>

<!--INI KONTENT SCRIT PHP-->
	<!-- Core JavaScript Files -->
    <script src="<?php echo base_url() ?>assets/js/jquery-3.2.1.min.js"></script>	
     <script src="assets/js/bootstrap.js"></script>
  <!-- Core JavaScript Files -->

<!--konfirmasi hapus data-->
<script language="javascript">
function tanya(){
    if (confirm("APAKAH ANDA YAKIN AKAN MENGHAPUS DATA INI ???"))
{return true;
}else{
    return false;
}
}
</script>
<!--konfirmasi edit data-->

