<?php
mysql_connect("localhost","root","");
mysql_select_db("dinusfest");
 
$nama = $_POST['name'];
$email = $_POST['email'];
$no_hp = $_POST['phone'];
$pesan = $_POST['message'];
$tanggal = date("Y-m-d");
 
$isi = "INSERT INTO bukutamu(nama, email, no_hp, pesan, tanggal)
VALUES('$nama', '$email', '$no_hp', '$pesan', '$tanggal')";
$hasil = mysql_query($isi);
 
if ($hasil){
	echo "<script>alert('Sukses Pengisian Buku Tamu');</script>";
  	echo "<script>window.location='contact.php';</script>";	
} 
else{
	echo "<script>alert('Pengisian buku tamu gagal');</script>";
}
 
?>