<?php 
//hapus berdasarkan id berita
if(isset($_GET['aksi'])){
	if($_GET['aksi']=='hapus'){
		$berita->hapus_berita($_GET['idb']);
		echo "<script>alert('yah berita dihapus bosku');</script>";
		echo "<script>window.location='index.php?halaman=berita';</script>";
	}
}

 ?>
<h2>Data Berita</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Isi</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$no = 1;
			$ber = $berita->tampil_berita();
			foreach ($ber as $ita) {
		 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $ita['judul']; ?></td>
			<td align="justify"><?php echo $ita['isi']; ?></td>
			<td><?php echo $ita['tanggal']; ?></td>
			<td>
				<a class="btn btn-info" href="index.php?halaman=ubahberita&idb=<?php echo $ita['id_berita']; ?>"><i class="fa fa-edit"></i>Edit</a>
				<a class="btn btn-danger" href="index.php?halaman=berita&aksi=hapus&idb=<?php echo $ita['id_berita']; ?>"><i class="fa fa-remove"></i>Hapus</a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahberita" class="btn btn-primary">Tambah</a>