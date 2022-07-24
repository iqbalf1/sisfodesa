<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	 	<i class="fas fa-eye"></i> Detail Penduduk
	</div>

	<table class="table table hover table-bordered table-striped">
		<?php foreach($detail as $dt) : ?>
			
			

			<tr>
				<td>NIK</td>
				<td><?= $dt->nik;?></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><?= $dt->nama_lengkap;?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?= $dt->alamat;?></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><?= $dt->email;?></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><?= $dt->telepon;?></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td><?= $dt->tempat_lahir;?></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td><?= $dt->tanggal_lahir;?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><?= $dt->jenis_kelamin;?></td>
			</tr>


		<?php endforeach; ?>
		
	</table>
	<?= anchor('administrator/penduduk/','<div class="btn btn-sm btn-primary">Kembali</div>')?>
	<br><br>
	
	
</div>