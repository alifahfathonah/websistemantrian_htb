<?php
session_start();
include '../koneksi/d_koneksi.php';
?>
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Copyright" content="BMI">
	<meta name="Author" content="Nurlita Afdiani">
	<title>Dinas Tenaga Kerja Kabupaten Tangerang</title>
	<link rel="stylesheet" href="../../buka/isi/css/reset.css" type="text/css">
	<link rel="stylesheet" href="../../buka/isi/css/grid.css" type="text/css">
	<link rel="stylesheet" href="../../buka/isi/css/style.css" type="text/css">
	<link rel="stylesheet" href="../../buka/isi/css/menu.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="../../buka/isi/css/masuk.css" type="text/css">
	<link href="../../buka/isi/css/bootstrap.min.css" rel="stylesheet">
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../../buka/isi/js/masuk.js"></script>
	<link rel="shortcut icon" href="../../buka/isi/Images/Logo.png"/>
</head>
	<div class="container_12">
	<div class="module">
	<br>
	<center><img src="../../buka/isi/Images/Logo.png" width="100px"></center>
	<h3><center>DINAS TENAGA KERJA - KABUPATEN TANGERANG</center></h3>
	<h2><span><center><b>DATA ANTRIAN DINAS TENAGA KERJA - KABUPATEN TANGERANG:<center></span></h2></b>
	<div class="module-table-body">
	<table id="myTable" class="tablesorter">
	<tr>
		<th class="text-center">ID Antrian:</th>
		<th class="text-center">Nomor Antrian:</th>
		<th class="text-center">Nama Pengantri:</th>
		<th class="text-center">Nomor Loket:</th>
		<th class="text-center">Jam Masuk:</th>
		<th class="text-center">Jam Kadaluarsa:</th>
	</tr>
<?php
	if(isset($_GET['aksi']) == 'delete'){
		$id_antrian = $_GET['id_antrian'];
		$cek = mysqli_query($d_koneksi, "SELECT * FROM d_antrian WHERE id_antrian='$id_antrian'");
	if(mysqli_num_rows($cek) == 0){
		echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Tata Usaha tidak ditemukan.</div>';
	}else{
		$delete = mysqli_query($d_koneksi, "DELETE FROM d_antrian WHERE id_antrian='$id_antrian'");}}
?>
<?php
		$query = "SELECT * FROM d_antrian ORDER BY nm_pengantri asc";
		$sql = mysqli_query($d_koneksi, $query);
		while($data = mysqli_fetch_array($sql)){
	echo '
	<tr>
	<td align="center">'.$data['id_antrian'].'</td>
	<td align="center">'.$data['no_antrian'].'</td>
	<td align="center">'.$data['nm_pengantri'].'</td>
	<td align="center">'.$data['no_loket'].'</td>
	<td align="center">'.$data['jam_masuk'].'</td>
	<td align="center">'.$data['kadaluarsa'].'</td>
	</tr>';}
?>
	</div>
	</div>
	</div>
	</table>
<br>
<?php include 'print.php'; ?>