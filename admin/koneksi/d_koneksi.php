<?php
date_default_timezone_set("Asia/Jakarta");
$d_koneksi = mysqli_connect("localhost","root","","disnaker_lita");
// Cek Koneksi
if (mysqli_connect_errno()){
	echo "Koneksi Database Gagal/Database Tidak Ada!" . mysqli_connect_error();
} 
?>