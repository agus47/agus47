<?php 
//hapus berdasarkan id bukutamu
if(isset($_GET['aksi'])){
	if($_GET['aksi']=='hapus'){
		$bukutamu->hapus_bukutamu($_GET['idbuku']);
		echo "<script>alert('buku tamu telah dihapus');</script>";
		echo "<script>window.location='index.php?halaman=bukutamu';</script>";
	}
}

 ?>
<h2>Buku Tamu</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Nomor Hp</th>
			<th>Pesan</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$no = 1;
			$buku = $bukutamu->tampil_bukutamu();
			foreach ($buku as $tamu) {
		 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $tamu['nama']; ?></td>
			<td><?php echo $tamu['email']; ?></td>
			<td><?php echo $tamu['no_hp']; ?></td>
			<td align="justify"><?php echo $tamu['pesan']; ?></td>
			<td><?php echo $tamu['tanggal']; ?></td>
			<td>
				<a class="btn btn-info" href="index.php?halaman=ubahbukutamu&idbuku=<?php echo $tamu['id']; ?>"><i class="fa fa-edit"></i>Edit</a>
				<a class="btn btn-danger" href="index.php?halaman=bukutamu&aksi=hapus&idbuku=<?php echo $tamu['id']; ?>"><i class="fa fa-remove"></i>Hapus</a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>