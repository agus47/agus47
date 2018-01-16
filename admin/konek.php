<?php 
session_start();

class database{
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $dbname = "dinusfest";

	//fungsi koneksi
	function koneksi(){
		mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->dbname);
	}
}

class pengguna{
	function login_admin($uid,$pass){
		//0. enkripsikan password
		// 1. mencocokan username dan pw
		// 2. menghitung jumlah data yang cocok
		// 3. memcahkan data yang cocok
		// 4. jika ada 1 data yang cocok (berarti bener)
		// 5. selain itu gagal login
		$pass = md5($pass);
		$ambil = mysql_query("SELECT * FROM pengguna WHERE username='$uid' AND password='$pass'");
		$hitung = mysql_num_rows($ambil);
		$pecah = mysql_fetch_array($ambil);
		if($hitung>0){
			//login
			$_SESSION['id_pengguna'] = $pecah['id_pengguna'];
			$_SESSION['username'] = $pecah['username'];
			$_SESSION['password'] = $pecah['password'];
			$_SESSION['nama'] = $pecah['nama'];
			return true;
		}else{
			//gagal
			return false;
		}
	}
	function logout_admin(){
		session_destroy();
	}
}

class kategori{
	function tampil_kategori(){
		$ambil = mysql_query("SELECT * FROM kategori");
		if(mysql_num_rows($ambil)>0){
			while($ad = mysql_fetch_assoc($ambil))
				$data[] = $ad;
			return $data;
		}else{
			echo "tak ada kategori";
		}
	}
}

class berita{
	function tampil_berita(){
		$ambil = mysql_query("SELECT * FROM berita");
		if(mysql_num_rows($ambil)>0){
			while($a = mysql_fetch_assoc($ambil))
				$data[] = $a;
			return $data;
		}else{
			echo "berita tak ada";
		}
	}
	function simpan_berita($judul,$isi,$gambar){
		//mengambil nama gambar
		$namagambar = $gambar['name'];
		//mengambil lokasi gambar
		$lokasigambar = $gambar['tmp_name'];
		//mengupload gambar ke folder
		move_uploaded_file($lokasigambar, "gambar_berita/$namagambar");
		//meng set hari ini
		$sekarang = date('Y-m-d');
		//insert ke tabel berita
		mysql_query("INSERT INTO berita (judul,tanggal,isi,gambar) VALUES ('$judul','$sekarang','$isi','$namagambar')");
	}
	function hapus_berita($idb){
		mysql_query("DELETE FROM berita WHERE id_berita='$idb'");
	}
	function ambil_berita($idb){
		$ambil = mysql_query("SELECT * FROM berita WHERE id_berita='$idb'");
		return mysql_fetch_assoc($ambil);
	}
	function ubah_berita($idb, $judul, $isi, $gambar){
		//jika gambar tidak ada error atau diubah
		if($gambar['error']==0){
			//mengambil nama gambar
			$namagambar = $gambar['name'];
			//mengambil lokasi gambar
			$lokasigambar = $gambar['tmp_name'];
			//mengupload gambar ke folder
			move_uploaded_file($lokasigambar, "gambar_berita/$namagambar");

			//melakukan query update sekaligus ganti gambar
			mysql_query("UPDATE berita SET judul='$judul', isi='$isi', gambar='$namagambar' WHERE id_berita='$idb'");
		}
		//jika gambar tetap tidak diganti
		else{
			//tetap jalankan query tanpa update gambar
			mysql_query("UPDATE berita SET judul='$judul', isi='$isi' WHERE id_berita='$idb'");
		}

	}
}
class bukutamu{
	function tampil_bukutamu(){
		$ambil = mysql_query("SELECT * FROM bukutamu");
		if(mysql_num_rows($ambil)>0){
			while($a = mysql_fetch_assoc($ambil))
				$data[] = $a;
			return $data;
		}else{
			echo "buku tamu tidak ada";
		}
	}
	function ambil_bukutamu($idbuku){
		$ambil = mysql_query("SELECT * FROM bukutamu WHERE id='$idbuku'");
		return mysql_fetch_assoc($ambil);
	}
	function ubah_bukutamu($idbuku, $nama, $email, $nope, $pesan){
			//melakukan query update sekaligus ganti gambar
			mysql_query("UPDATE bukutamu SET nama='$nama', email='$email', no_hp='$nope', pesan='$pesan' WHERE id='$idbuku'");

	}
	function hapus_bukutamu($idbuku){
		mysql_query("DELETE FROM bukutamu WHERE id='$idbuku'");
	}
}
class user{
	function tampil_user(){
		$ambil = mysql_query("SELECT * FROM users");
		if(mysql_num_rows($ambil)>0){
			while($a = mysql_fetch_assoc($ambil))
				$data[] = $a;
			return $data;
		}else{
			echo "users tak ada";
		}
	}
	function hapus_user($idu){
		mysql_query("DELETE FROM users WHERE id_user='$idu'");
	}
	function ambil_user($idu){
		$ambil = mysql_query("SELECT * FROM users WHERE id_user='$idu'");
		return mysql_fetch_assoc($ambil);
	}
	function ubah_user($idu, $nama, $password, $email, $nope){
			//melakukan query update sekaligus ganti gambar
			mysql_query("UPDATE users SET nama='$nama', password='$password', email='$email', nope='$nope' WHERE id_user='$idu'");

	}
}

//instance class database
$db = new database();
$db->koneksi();

//instance class pengguna
$pengguna = new pengguna();
$kategori = new kategori();
$berita = new berita();
$bukutamu = new bukutamu();
$user = new user();

 ?>