<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Pesan dari users
	 </div>
	  <?= $this->session->flashdata('pesan');?>

	  <table class="table table-bordered table-hover table-striped">
	  	<tr>
	  		<th width="20px">No</th>
	  		<th>Nama</th>
	  		<th>Email</th>
	  		<th>Pesan</th>
	  	</tr>
	  	<?php
	  	$no=1;
	  	foreach ($hubungi as $hub) :?>
	  		<tr>
	  			<td><?=$no++ ?></td>
	  			<td><?=$hub->nama?></td>
	  			<td><?=$hub->email?></td>
	  			<td><?=$hub->pesan ?></td>
	  			
	  			
	  		</tr>
	  	<?php endforeach;?>

	  </table>
</div>