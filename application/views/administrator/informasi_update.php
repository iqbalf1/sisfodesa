<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Form Update Informasi
	 </div>
	 <?php foreach($informasi as $info) : ?>
	 <form method="post"action="<?=base_url('administrator/informasi/update_informasi_aksi')?>">
	 	<div class="form-group">
	 		<label>Icon</label>
	 		<input type="hidden" name="id_informasi"class="form-control"
	 		value="<?=$info->id_informasi?>">
	 		<input type="text" name="icon"class="form-control"value="<?=$info->icon?>">
	 		<?= form_error('icon','<div class="text-danger small" ml-3>');?>
	 	</div>
	 	<div class="form-group">
	 		<label>Judul Informasi</label>
	 		<input type="text" name="judul_informasi"class="form-control"value="<?=$info->judul_informasi?>">
	 		<?= form_error('judul_informasi','<div class="text-danger small" ml-3>');?>
	 	</div>
	 	<div class="form-group">
	 		<label>Isi Informasi</label>
	 		<input type="text" name="isi_informasi"class="form-control"value="<?=$info->isi_informasi?>">
	 		<?= form_error('isi_informasi','<div class="text-danger small" ml-3>');?>
	 	</div>

	 	<button type="submit"class="btn btn-primary">Simpan</button>
	 </form>
	<?php endforeach;?>
</div>