<?php 
session_start();
session_destroy();
header("location:../beranda/index.php?pesan=Anda Telah Keluar!");
?>