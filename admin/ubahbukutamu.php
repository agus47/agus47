<h2>Ubah Buku Tamu</h2>
<?php 
	
	$detail = $bukutamu->ambil_bukutamu($_GET['idbuku']);


 ?>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Nama</label>
		<input text="text" class="form-control" name="nama" value="<?php echo $detail['nama']; ?>">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input text="email" class="form-control" name="email" value="<?php echo $detail['email']; ?>">
	</div>
	<div class="form-group">
		<label>No HP</label>
		<input text="tel" class="form-control" name="nope" value="<?php echo $detail['no_hp']; ?>">
	</div>	
	<div class="form-group">
		<label>Pesan</label>
		<textarea class="form-control" rows="10" name="pesan"><?php echo $detail['pesan']; ?></textarea>
	</div>
	<button type="submit" class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
//jika disimpan
if(isset($_POST['save'])){
	$bukutamu->ubah_bukutamu($_GET['idbuku'], $_POST['nama'],$_POST['email'],$_POST['nope'],$_POST['pesan']);
	echo "<script>alert('Buku Tamu telah dirubah bosku');</script>";
	echo "<script>window.location='index.php?halaman=bukutamu';</script>";
}
 ?>