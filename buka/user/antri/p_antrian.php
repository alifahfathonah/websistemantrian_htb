<?php 
session_start();
include 'koneksi.php';
$no_antrian = $_POST['No_antrian'];
$nm_pengantri = $_SESSION['namalengkap'];
$no_loket = $_POST['No_loket'];
$durasi = date("Y-m-d H:i:s");
mysqli_query($koneksi, "INSERT INTO d_antrian VALUES ('$no_antrian','$nm_pengantri','$no_loket','$durasi')");
	header("location:d_hasilantrian.php");
?>