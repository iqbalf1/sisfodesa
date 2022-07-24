<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Form Users Update
	 </div>
	 <?php foreach($user as $usr) : ?>
	 <form method="post"action="<?=base_url('administrator/users/update_aksi')?>">
	 	<div class="form-group">
	 		<label>Username</label>
	 		<input type="hidden" name="id"placeholder="Masukan username"class="form-control"
	 		value="<?=$usr->id?>">
	 		<input type="text" name="username"placeholder="Masukan username"class="form-control"value="<?=$usr->username?>">
	 		<?= form_error('username','<div class="text-danger small"ml-3>')?>
	 	</div>

	 	<div class="form-group">
	 		<label>Password</label>
	 		<input type="text" name="password"placeholder="Masukan Password"class="form-control"value="<?=$usr->password?>">
	 		<?= form_error('password','<div class="text-danger small"ml-3>')?>
	 	</div>

		<div class="form-group">
	 		<label>Email</label>
	 		<input type="text" name="email"placeholder="Masukan Email"class="form-control"value="<?=$usr->email?>">
	 		<?= form_error('email','<div class="text-danger small"ml-3>')?>
	 	</div>
		<div class="form-group">
	 		<label>Level</label>
	 		<select name="level"class="form-control">
	 			<?php
	 				if(level == 'admin'){
	 			?>
	 			<option value="admin"selected>Admin</option>
	 			<option value="penduduk">Penduduk</option>
	 			<?php
	 				}elseif (level=='penduduk') {
	 			?>
	 			<option value="admin">Admin</option>
	 			<option value="penduduk"selected>Penduduk</option>
	 			<?php 
	 				}else{
	 			?>
	 			<option value="admin">Admin</option>
	 			<option value="penduduk">Penduduk</option>
	 			<?php
	 				}
	 			?>

	 		</select>
	 		<?= form_error('level','<div class="text-danger small"ml-3>')?>
	 	</div>

	 	<div class="form-group">
	 		<label>Blokir</label>
	 		<select name="blokir"class="form-control">
	 			<?php
	 				if(blokir == 'Y'){
	 			?>
	 			<option value="Y"selected>YA</option>
	 			<option value="N">Tidak</option>
	 			<?php
	 				}elseif (level=='N') {
	 			?>
	 			<option value="Y">YA</option>
	 			<option value="N"selected>Tidak</option>
	 			<?php 
	 				}else{
	 			?>
	 			<option value="Y">Ya</option>
	 			<option value="N"selected>Tidak</option>
	 			<?php
	 				}
	 			?>

	 		</select>
	 		<?= form_error('blokir','<div class="text-danger small"ml-3>')?>
	 	</div>

	 	<button type="submit"class="btn btn-primary">Simpan</button>
	 </form>
	<?php endforeach;?>
</div>