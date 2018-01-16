<h2>Ubah Berita</h2>
<?php 
	
	$detail = $berita->ambil_berita($_GET['idb']);


 ?>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul</label>
		<input text="text" class="form-control" name="judul" value="<?php echo $detail['judul']; ?>">
	</div>
	<div class="form-group">
		<label>Isi</label>
		<textarea class="form-control" rows="10" name="isi"><?php echo $detail['isi']; ?></textarea>
	</div>		
	<div class="form-group">
		<label>Gambar</label>
		<br>
		<img src="gambar_berita/<?php echo $detail['gambar']; ?>">
		<input type="file" class="form-control" name="gambar">
	</div>
	<button type="submit" class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
//jika disimpan
if(isset($_POST['save'])){
	$berita->ubah_berita($_GET['idb'], $_POST['judul'],$_POST['isi'],$_FILES['gambar']);
	echo "<script>alert('berita sudah diubah bosku');</script>";
	echo "<script>window.location='index.php?halaman=berita';</script>";
}
 ?>