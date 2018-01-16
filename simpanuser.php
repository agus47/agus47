<?php
mysql_connect("localhost","root","");
mysql_select_db("dinusfest");
 
$nama = $_POST['nama'];
$password = $_POST['password'];
$email = $_POST['email'];
$nope = $_POST['nope'];
$tgl = date("Y-m-d");
 
$isi = "INSERT INTO users(nama, password, email, nope, tgl)
VALUES('$nama', '$password', '$email', '$nope', '$tgl')";
$hasil = mysql_query($isi);
 
if ($hasil){
	echo "<script>alert('Register Sukses');</script>";
  	echo "<script>window.location='register.php';</script>";	
} 
else{
	echo "<script>alert('Register Gagal');</script>";
}
 
?>