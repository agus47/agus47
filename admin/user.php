<?php 
//hapus berdasarkan id berita
if(isset($_GET['aksi'])){
	if($_GET['aksi']=='hapus'){
		$user->hapus_user($_GET['idu']);
		echo "<script>alert('user telah dihapus');</script>";
		echo "<script>window.location='index.php?halaman=user';</script>";
	}
}

 ?>
<h2>Data User</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Password</th>
			<th>Email</th>
			<th>No Hp</th>
			<th>Tanggal</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$no = 1;
			$us = $user->tampil_user();
			foreach ($us as $er) {
		 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $er['nama']; ?></td>
			<td><?php echo $er['password']; ?></td>
			<td><?php echo $er['email']; ?></td>
			<td><?php echo $er['nope']; ?></td>
			<td><?php echo $er['tgl']; ?></td>
			<td>
				<a class="btn btn-info" href="index.php?halaman=ubahuser&idu=<?php echo $er['id_user']; ?>"><i class="fa fa-edit"></i>Edit</a>
				<a class="btn btn-danger" href="index.php?halaman=user&aksi=hapus&idu=<?php echo $er['id_user']; ?>"><i class="fa fa-remove"></i>Hapus</a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>