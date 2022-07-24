<div class="container-fluid">
	 <div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i> Penduduk
	  </div>
	  <?= $this->session->flashdata('pesan');?>

	  <?= anchor('administrator/penduduk/tambah_penduduk','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Penduduk</button>');?>
	  

	<table class="table table-striped table-hover table-bordered">
		<tr>
			<th>NO</th>
			<th>Nama Lengkap</th>
			<th>Alamat</th>
			<th>Email</th>
			<th colspan="3">Aksi</th>
		</tr>

		<?php

		$no=1;
		foreach ($penduduk as $pnd) :?> 
		
		<tr>
			<td><?= $no++?></td>
			<td><?= $pnd->nama_lengkap ?></td>
			<td><?= $pnd->alamat ?></td>
			<td><?= $pnd->email ?></td>

			<td width="20px"><?= anchor('administrator/penduduk/detail/' . $pnd->id,'<div class = "btn btn-sm btn-info"><i class="fa fa-eye"></i></div>')?>
			</td>
			<td width="20px"><?= anchor('administrator/penduduk/update/' . $pnd->id,'<div class = "btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>')?>
			</td>
			<td width="20px"><?= anchor('administrator/penduduk/delete/' . $pnd->id,'<div class = "btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>')?>
			</td>

		</tr>	
		
	<?php endforeach; ?>

		
		
	</table>
</div>