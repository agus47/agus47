<h2>Daftar Kategori</h2>
<table class="table table-hover table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Kategori</th>
		</tr>
	</thead>
	<tbody>

		<?php 
			$no = 1;
			$kat = $kategori->tampil_kategori();
			foreach ($kat as $gori) {
		 ?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $gori['kategori']; ?></td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>