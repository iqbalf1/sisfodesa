<div class="container-fluid">
	<div class="alert alert-success" role="alert">
	    <i class="fas fa-tachometer-alt"></i>Form Tambah Users
	 </div>
	 <form method="post"action="<?=base_url('administrator/users/tambah_users_aksi')?>">
	 	<div class="form-group">
	 		<label>Username</label>
	 		<input type="text" name="username"placeholder="Masukan username"class="form-control">
	 		<?= form_error('username','<div class="text-danger small"ml-3>')?>
	 	</div>

	 	<div class="form-group">
	 		<label>Password</label>
	 		<input type="text" name="password"placeholder="Masukan Password"class="form-control">
	 		<?= form_error('password','<div class="text-danger small"ml-3>')?>
	 	</div>

		<div class="form-group">
	 		<label>Email</label>
	 		<input type="text" name="email"placeholder="Masukan Email"class="form-control">
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
	 			<option value="N">Tidak</option>
	 			<?php
	 				}
	 			?>

	 		</select>
	 		<?= form_error('blokir','<div class="text-danger small"ml-3>')?>
	 	</div>

	 	<button type="submit"class="btn btn-primary">Simpan</button>
	 </form>
</div>