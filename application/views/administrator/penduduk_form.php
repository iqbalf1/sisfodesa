<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i> Form Input Penduduk
	 </div>
	 <?= form_open_multipart('administrator/penduduk/tambah_penduduk_aksi');?>
	 <div class="form-group">
	 	<label>NIK Penduduk</label>
	 	<input type="text" name="nik"class="form-control">
	 	<?=form_error('nik','<div class="text-danger small ml-3">','</div>');?>
	 </div>
	 <div class="form-group">
	 	<label>Nama Lengkap</label>
	 	<input type="text" name="nama_lengkap"class="form-control">
	 	<?=form_error('nama_lengkap','<div class="text-danger small ml-3">','</div>');?>
	 </div>
	 <div class="form-group">
	 	<label>Alamat</label>
	 	<input type="text" name="alamat"class="form-control">
	 	<?=form_error('alamat','<div class="text-danger small ml-3">','</div>');?>
	 </div>
	<div class="form-group">
	 	<label>Email</label>
	 	<input type="text" name="email"class="form-control">
	 	<?=form_error('email','<div class="text-danger small ml-3">','</div>');?>
	</div>
	<div class="form-group">
	 	<label>Telepon</label>
	 	<input type="text" name="telepon"class="form-control">
	 	<?=form_error('telepon','<div class="text-danger small ml-3">','</div>');?>
	</div>
	<div class="form-group">
	 	<label>Tempat Lahir</label>
	 	<input type="text" name="tempat_lahir"class="form-control">
	 	<?=form_error('tempat_lahir','<div class="text-danger small ml-3">','</div>');?>
	</div>

	<div class="form-group">
	 	<label>Tanggal Lahir</label>
	 	<input type="date" name="tanggal_lahir"class="form-control">
	 	<?=form_error('tanggal_lahir','<div class="text-danger small ml-3">','</div>');?>
	</div>
	<div class="form-group">
	 	<label>Jenis Kelamin</label>
	 	<select name="jenis_kelamin"class="form-control">
	 		<option value="">--Pilih Jenis Kelamin--</option>
	 		<option>Laki-Laki</option>
	 		<option>Perempuan</option>
	 	</select>
	 	<?=form_error('jenis_kelamin','<div class="text-danger small ml-3">','</div>');?>
	</div>
	
	<button type="submit"class="btn btn-primary">Simpan</button>




	 <?php form_close();?>
</div>