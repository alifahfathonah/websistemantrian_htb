<?php 
session_start();
if($_SESSION['status']!="login"){
header("location:/skripsilita/index.php?pesan=Silakan Login Dahulu Untuk Mendapatkan No. Antrian Anda!");
}
?>