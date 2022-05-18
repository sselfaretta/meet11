<?php 
require 'koneksidb.php';
$jenis_daftar = $_POST['jenis_daftar'];
$tgl_masuk = $_POST['tgl_masuk'];
$nis = $_POST['nis'];
$input = mysqli_query($koneksi, "INSERT INTO db_formppdb(nama,email,isi) 
VALUES ('$nama', '$email','$isi')");
header ('location:datatamu.php');
?