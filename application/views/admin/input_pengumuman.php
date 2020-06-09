<div class="magin">
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel panel-body">
			<legend><h5>POST PENUMUMAN</h5></legend><br>
            <form action="<?php echo base_url().'admin/simpan_post';?>" method="POST" enctype="multipart/form-data">
			<div class="form-groub">
    		<label class="col-lg-3 col-md-3 col-sm-3 control-label">JUDUL PENGUMUMAN :</label>
    		<div class="col-lg-9 col-md-9 col-sm-9">
    		<input class="form-control" name="judul" type="text" size="35"/>
    		</div>
  			</div>

        <div class="form-groub">
        <label class="col-lg-3 col-md-3 col-sm-3 control-label">PENULIS :</label>
        <div class="col-lg-9 col-md-9 col-sm-9">
        <input class="form-control" name="penulis" type="text" size="35"/>
        </div>
        </div>

        <div class="form-groub">
        <label class="col-sm-3 control-label">FOTO</label>
         <div class="col-lg-9 col-md-6 col-sm-3">
            <input class="btn btn-primary" type="file" name="file">
                <i>* foto harus menggunakan ukuran 3X4</i>
            </div>
        </div>

  			<div class="form-group">
        	<div class="col-lg-12 col-md-12 col-sm-12">
            <textarea name="berita" id="editor1" rows="10" cols="80" placeholder="tulis pengumuman disini">
                
            </textarea>
            
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
        	</div>
     		</div>
     		</div>

     		<div class="panel-footer">
			<center>
			<div class="button-groub">
			<input class="btn btn-red" type="submit" name="masuk" size="35" value="POST PENGUMUMAN">
			<input class="btn btn-warning" type="reset" name="reset" size="35" value="RESET FORM"
			></div></center>
			</div>
        </form>
			</div>
		</div>
	</div>
</div>


