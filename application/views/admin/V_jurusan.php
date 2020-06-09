
<!--MENAMPILKAN DATA-->
<div class="container">
<div class="magin">
<div class="panel panel-default">
<div class="panel-body">
<legend><h5>TAMPIL DATA JURUSAN</h5></legend>



<!--TABEL DATA MAHASISWA-->
<?=$this->session->flashdata('notif')?>
<div class="table-responsive">
<table class="table table-striped table-hover">
<div class="col-md-12 padding-0" style="margin-bottom:0px;">

<!--TOMBOL CARI-->
<div class="col-md-4">
<form action="<?php echo base_url('admin/jurusan');?>" method="POST">
<div class="form-group">
                    <div class="input-group">
                      <input type="text" name="keyword" class="form-control" placeholder="Cari berdasarkan apa saja ">
                      <div class="input-group-btn">
                      <button class="btn btn-red" type="submit" name="cari"><i class="fui-search"></i> Cari</button>
                      </div>
                    </div>
      </div>
    </form>              
</div>

<!--TOMBOL TAMBAH DAN REFRESH-->
<div class="col-md-4" style="margin-left:700px; margin-top:-50px;">
  <a data-toggle="modal" data-target="#tambah-data" class="btn btn-red"><span class="glyphicon glyphicon-plus"></span> Tambah</a>

<a href="<?php echo base_url();?>admin/tampil_data_jurusan" class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span> Refresh</a>
</div>
</div>            
   <!--HEADER TABLE-->
	<tr style="background-color: orange;"><th>NO</th><th>ID JURUSAN</th><th> NAMA JURUSAN</th><th> OPERASI</th></tr>
  <?php
  $no=1;
  if (!empty($tbl_jurusan))
  foreach($tbl_jurusan as $result_jurusan)
    {?>
     <tr>
      <td width="300px"><?php echo $no++ ?></td>
      <td width="00px"><?php echo $result_jurusan->id;?></td>
      <td><?php echo $result_jurusan->jurusan;?></td>

      <td><div class='btn-group'>

             <a onclick='return tanya()' href="<?php echo base_url('admin/hapus_jurusan/').$result_jurusan->id;?>" title='Hapus Data' class='btn btn-danger btn-sm' name='hapsh'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a>

             </div>
            </td>
    <tr>
    <?php } else {?>
    <tr><td colspan='10'><div class='alert alert-danger' role='alert' style="background-color: red; color: #fff;"> DATA TIDAK DITEMUKAN <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div></td></tr>

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

<!-- Modal Tambah -->
  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                  <h4 class="modal-title">Tambah Data Jurusan</h4>
              </div>
              <form class="form-horizontal" action="<?php echo base_url('admin/tambah_jurusan')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-body">
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Id Jrusan</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" name="id" placeholder="Tuliskan Id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 col-sm-3 control-label">Nama Jurusan</label>
                            <div class="col-lg-8">
                              <input type="text" class="form-control" name="nama" placeholder="Tuliskan Alamat">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
                        <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
  <!-- END Modal Tambah -->

   	
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

