<h2>Ubah User</h2>
<?php 
	
	$detail = $user->ambil_user($_GET['idu']);


 ?>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input text="text" class="form-control" name="nama" value="<?php echo $detail['nama']; ?>">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input text="password" class="form-control" name="password" value="<?php echo $detail['password']; ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input text="email" class="form-control" name="email" value="<?php echo $detail['email']; ?>">
	</div>	
	<div class="form-group">
		<label>No Hp</label>
		<input text="tel" class="form-control" name="nope" value="<?php echo $detail['nope']; ?>">
	</div>
	<button type="submit" class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
//jika disimpan
if(isset($_POST['save'])){
	$user->ubah_user($_GET['idu'], $_POST['nama'],$_POST['password'],$_POST['email'],$_POST['nope']);
	echo "<script>alert('user telah dirubah bosku');</script>";
	echo "<script>window.location='index.php?halaman=user';</script>";
}
 ?>