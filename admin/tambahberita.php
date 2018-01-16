<h2>Tambah Berita</h2>
<form method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label>Judul</label>
		<input text="text" class="form-control" name="judul">
	</div>
	<div class="form-group">
		<label>Isi</label>
		<textarea class="form-control" rows="10" name="isi"></textarea>
	</div>		
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" class="form-control" name="gambar">
	</div>
	<button type="submit" class="btn btn-primary" name="save">Simpan</button>
</form>

<?php 
//jika disimpan
if(isset($_POST['save'])){
	$berita->simpan_berita($_POST['judul'],$_POST['isi'],$_FILES['gambar']);
	echo "<script>alert('berita sudah disimpan bosku');</script>";
	echo "<script>window.location='index.php?halaman=berita';</script>";
}
 ?>
