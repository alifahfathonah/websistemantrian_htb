<?php
$koneksi = mysqli_connect("localhost","root","","disnaker_lita");
$carikode = mysqli_query($koneksi, "select max(no_antrian) from d_antrian") or die (mysql_error());
// Menjadikannya Array
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);
// Jika $datakode
if ($datakode){
$nilaikode = substr($jumlah_data[0], 1);
$kode = (int) $nilaikode;
$kode = $jumlah_data + 0;
$kode_antrian = "D-".str_pad($kode, 1, "0", STR_PAD_LEFT);
$kode_loket =  "LOKET D-".str_pad($kode, 1, "0", STR_PAD_LEFT);}
?>