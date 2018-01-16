<?php 
  $detail = $berita->ambil_berita($_GET['idb']);

 ?>
<div class="container" style="text-align: center;">
    <img src="admin/gambar_berita/<?php echo $detail['gambar']; ?>" style="width: 200px;height: 200px"> 
 
              <h2 align="center">
                <?php echo $detail['judul']; ?>
              </h2>
              <p align="justify"><?php echo $detail['isi']; ?></p>
            </a>
            <p class="post-meta">Posted by
              <a href="about.php">Agus Prasetyo </a>
              <?php echo $detail['tanggal']; ?></p>
          </div>
          <hr>

          <div class="clearfix">
            <a class="btn btn-primary float-left" href="index.php">&larr; Back To News</a>
          </div>