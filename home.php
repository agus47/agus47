<!-- menampilan artikel -->
<?php 
$ber = $berita->tampil_berita();
foreach ($ber as $ita) {
 ?>
<div class="post-preview">
  <div class="col-md-6"> 
    <img align="left" src="admin/gambar_berita/<?php echo $ita['gambar']; ?>" style="width: 100px;height: 100px" class="img-circle"> 
  </div>
  <br>
              <h2 class="post-subtitle">
                <?php echo $ita['judul']; ?>
              </h2>
              <p><?php echo substr($ita['isi'],0,300); ?>
              <br><a href="index.php?halaman=detail&idb=<?php echo $ita['id_berita']; ?>">Read More &rarr;</a></p>
            <p class="post-meta">Posted by
              <a href="about.php">Agus Prasetyo</a>
              <?php echo $ita['tanggal']; ?></p>
          </div>
          <hr>
<?php 
} 
?>