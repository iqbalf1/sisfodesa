<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Identitas Website
	 </div>
	  <?= $this->session->flashdata('pesan');?>

	  
	  <table class="table table-bordered table-hover table-striped">
	  	<tr>
	  		<th>No</th>
	  		<th>Judul Website</th>
	  		<th>Alamat</th>
	  		<th>Email</th>
	  		<th>No.Telepon</th>
	  		<th>Aksi</th>
	  	</tr>
	  	<?php
	  	$no=1;
	  	foreach ($identitas as $id) :?>
	  		<tr>
	  			<td><?=$no++ ?></td>
	  			<td><?=$id->judul_website?></td>
	  			<td><?=$id->alamat?></td>
	  			<td><?=$id->email?></td>
	  			<td><?=$id->telp?></td>
	  			<td width="20px"><?= anchor('administrator/identitas/update/'.$id->id_identitas,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>');?></td>
	  		</tr>
	  	<?php endforeach;?>

	  </table>
</div>