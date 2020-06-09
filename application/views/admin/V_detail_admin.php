
		<div class="container">
		<div class="magin">
		<div class="col-lg-7" style="margin-left:20%;">
		<div class="panel panel-primary">
		<div class="panel panel-body">
		<div class="panel panel-heading">
		<h5>DATA LENGKAP ADMINSISTRASI</h5>
		</div>
		<?php foreach($tbl_admin as $result_admin);{?>
		<table width="50%" class="table table-striped table-condensed">

			<tr>
					<th width="20%">Foto</th>
					<td><img src='<?php echo $result_admin->foto;?>' width='150' height='200'></td>
				</tr>

				<tr>
					<th width="20%">NIK</th>
					<td><?php echo $result_admin->id_user;?></td>
				</tr>

				<tr>
					<th>Nama Mahasiswa</th>
					<td><?php echo $result_admin->nama;?></td>
				</tr>
				<tr>
					<th>Tempat Lahir</th>
					<td><?php echo $result_admin->tempat_lahir.', '.$result_admin->tgl_lahir?></td>
				</tr>

				<tr>
					<th>Jenis Kelamin</th>
					<td><?php echo $result_admin->jns_kelamin;?></td>
				</tr>

				<tr>
					<th>Agama</th>
					<td><?php echo $result_admin->status;?></td>
				</tr>
				
				
				<tr>
					<th>Jabatan</th>
					<td><span class='label label-danger'><?php echo $result_admin->jabatan;?></span></td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td><?php echo $result_admin->alamat.', '.$result_admin->kota.', '.$result_admin->provinsi;?></td>
				</tr>
				<tr>
					<th>Telpon</th>
					<td><?php echo $result_admin->telp;?></td>
				</tr>

			</table>
			<?php };?>
		</div>
	</div>
</div>
</div>
</div>
</div>

