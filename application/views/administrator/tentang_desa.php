<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Tentang Desa
	 </div>
	  <?= $this->session->flashdata('pesan');?>

	  
	  <table class="table table-bordered table-hover table-striped">
	  	<tr>
	  		<th>No</th>
	  		<th>Sejarah</th>
	  		<th>Visi</th>
	  		<th>Misi</th>
	  		<th>Aksi</th>
	  	</tr>
	  	<?php
	  	$no=1;
	  	foreach ($tentang as $ttg) :?>
	  		<tr>
	  			<td><?=$no++ ?></td>
	  			<td><?=$ttg->sejarah?></td>
	  			<td><?=$ttg->visi?></td>
	  			<td><?=$ttg->misi?></td>
	  			<td width="20px"><?= anchor('administrator/tentang_desa/update/'.$ttg->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>');?></td>
	  		</tr>
	  	<?php endforeach;?>

	  </table>
</div>