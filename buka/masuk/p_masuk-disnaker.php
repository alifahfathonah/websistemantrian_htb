<?php 
session_start();
include 'd_koneksi.php';
$namalengkap = $_POST['namalengkap'];
$sandi = md5($_POST['sandi']);
$hakakses = $_POST['hakakses'];
$data = mysqli_query($d_koneksi, "select * from d_pengguna where namalengkap=$namalengkap, sandi=$sandi and hakakses=$hakakses");
$cek = mysqli_num_rows($data);
if($cek > 0){
	$_SESSION['namalengkap'] = $namalengkap;
	$_SESSION['surel'] = $surel;
	$_SESSION['hakakses'] = $hakakses;
	$_SESSION['status'] = "login";
	header("location:../user/antri/d_antrian.php");
}else{
	header("location:index.php?pesan=Masuk Gagal");
}
?>