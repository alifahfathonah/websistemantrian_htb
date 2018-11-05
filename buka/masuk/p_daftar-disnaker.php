<?php 
session_start();
include 'd_koneksi.php';
$namalengkap = $_POST['namalengkap'];
$surel = $_POST['surel'];
$sandi = md5($_POST['sandi']);
$tanggal = date("Y-m-d");
$jam = date("H:i:s");
mysqli_query($d_koneksi, "INSERT INTO d_pengguna (namalengkap, surel, sandi, tanggal, jam, hakakses) 
VALUES ('$namalengkap','$surel','$sandi','$tanggal','$jam','2')");
	header("location:d_masuk-disnaker.php");
?>