
<!--MENAMPILKAN DATA-->
<div class="contaier">
<div class="magin">
<div class="panel panel-default">
<div class="panel-body">
<legend><h5>TAMPIL ADMIN</h5></legend>



<!--TABEL DATA MAHASISWA-->
<?=$this->session->flashdata('notif')?>
<div class="table-responsive">
<table class="table table-striped table-hover">
<div class="col-md-12 padding-0" style="margin-bottom:5px;">

<!--TOMBOL CARI-->
<div class="col-md-3">
<form action="index_mahasiswa.PHP" method="POST">
<div class="form-group">
                    <div class="input-group">
                      <input type="text" name="qcari" class="form-control" placeholder="Cari berdasarkan apa saja ">
                      <div class="input-group-btn">
                      <button class="btn btn-red" type="submit" name="cari"><i class="fui-search"></i> Cari</button>
                      </div>
                    </div>
                  </div></form>              
</div>

<!--TOMBOL TAMBAH DAN REFRESH-->
<div class="col-md-3" style="margin-left:630px;">
  <a href="<?php echo base_url();?>admin/input_admin" class="btn btn-red"><span class="glyphicon glyphicon-plus"></span> Tambah</a>

<a href="<?php echo base_url();?>admin/tampil_admin"class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
</div>
</div>            
   <!--HEADER TABLE-->
	<tr><th>NO</th><th>NIK</th><th> NAMA</th><th>JENIS KELAMIN</th><th>AGAMA</th><th>JABATAN</th><th>TELPON</th><th>OPERASI</th></tr>

  <?php
  $no=1;
  foreach($tbl_admin as $result_admin){?>
  
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $result_admin->id_user;?></td>

            <td> 
              <span class="glyphicon glyphicon-user"></span> 

              <?php echo anchor('admin/detil_admin/'.$result_admin->id,$result_admin->nama);?> 
              </td>

             <!-- <td><?php //echo anchor('admin/detil_admin/'.$result_admin->id,'detil'); ?></td>-->

            <td><?php echo $result_admin->jns_kelamin;?></td>
            <td><?php echo strtolower($result_admin->agama);?></td>
            <td><?php echo strtolower($result_admin->jabatan);?></td>
            <td><?php echo $result_admin->telp;?></td>
          
             <td><div class='btn-group'>
              <a href="<?php echo base_url('admin/edit_admin/').$result_admin->id;?>" title='Edit Data' class='btn btn-primary btn-sm'><span class='glyphicon glyphicon-edit' aria-hidden='true'></span></a>

             <a onclick='return tanya()' href="<?php echo base_url('admin/delete_admin/').$result_admin->id;?>" title='Hapus Data' class='btn btn-danger btn-sm' name='hapsh'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>

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

