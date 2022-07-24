<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Form Identitas Update
	 </div>
	 <?php foreach($identitas as $id) : ?>
	 <form method="post"action="<?=base_url('administrator/identitas/update_aksi')?>">
	 	<div class="form-group">
	 		<label>Identitas</label>
	 		<input type="hidden" name="id_identitas"class="form-control"
	 		value="<?=$id->id_identitas?>">
	 		<input type="text" name="judul_website"class="form-control"value="<?=$id->judul_website?>">
	 	</div>
	 	<div class="form-group">
	 		<label>Alamat</label>
	 		<input type="text" name="alamat"class="form-control"value="<?=$id->alamat?>">
	 	</div>
	 	<div class="form-group">
	 		<label>Email</label>
	 		<input type="text" name="email"class="form-control"value="<?=$id->email?>">
	 	</div>
	 	<div class="form-group">
	 		<label>No.Telp</label>
	 		<input type="text" name="telp"class="form-control"value="<?=$id->telp?>">
	 	</div>


	 	<button type="submit"class="btn btn-primary">Simpan</button>
	 </form>
	<?php endforeach;?>
</div>