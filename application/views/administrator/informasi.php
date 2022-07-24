<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Berita
	 </div>
	  <?= $this->session->flashdata('pesan');?>

	  <?= anchor('administrator/informasi/tambah_informasi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Informasi</button>');?>
	  <table class="table table-bordered table-hover table-striped">
	  	<tr>
	  		<th>No</th>
	  		<th>Icon</th>
	  		<th>Judul Informasi</th>
	  		<th>Isi Informasi</th>
	  		<th colspan="2">Aksi</th>
	  	</tr>
	  	<?php
	  	$no=1;
	  	foreach ($informasi as $info) :?>
	  		<tr>
	  			<td><?=$no++ ?></td>
	  			<td><?=$info->icon?></td>
	  			<td><?=$info->judul_informasi?></td>
	  			<td><?=$info->isi_informasi ?></td>
	  			
	  			<td width="20px"><?= anchor('administrator/informasi/update/'.$info->id_informasi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>');?></td>
	  			<td width="20px"><?= anchor('administrator/informasi/delete/'.$info->id_informasi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>');?></td>
	  		</tr>
	  	<?php endforeach;?>

	  </table>
</div>