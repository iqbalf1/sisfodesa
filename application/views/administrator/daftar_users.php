<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Daftar Users
	 </div>
	  <?= $this->session->flashdata('pesan');?>

	  <?= anchor('administrator/users/tambah_users','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Users</button>');?>
	  <table class="table table-bordered table-hover table-striped">
	  	<tr>
	  		<th>No</th>
	  		<th>Username</th>
	  		<th>Email</th>
	  		<th>Level</th>
	  		<th>Blokir</th>
	  		<th colspan="2">Aksi</th>
	  	</tr>
	  	<?php
	  	$no=1;
	  	foreach ($user as $usr) :?>
	  		<tr>
	  			<td><?=$no++ ?></td>
	  			<td><?=$usr->username?></td>
	  			<td><?=$usr->email?></td>
	  			<td><?=$usr->level?></td>
	  			<td><?=$usr->blokir?></td>
	  			<td width="20px"><?= anchor('administrator/users/update/'.$usr->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>');?></td>
	  			<td width="20px"><?= anchor('administrator/users/hapus/'.$usr->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>');?></td>
	  		</tr>
	  	<?php endforeach;?>

	  </table>
</div>