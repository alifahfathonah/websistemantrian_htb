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
	<h2><span><center><b>DATA STATISTIK PENGUNJUNG DINAS TENAGA KERJA - KABUPATEN TANGERANG:<center></span></h2></b>
	<div class="module-table-body">
	<table id="myTable" class="tablesorter">
	<tr>
		<th class="center">IP Address:</th>
		<th class="text-center">Nama Lengkap:</th>
		<th class="text-center">Tanggal:</th>
		<th class="text-center">Hits:</th>
		<th class="text-center">Status:</th>
	</tr>
<?php
	if(isset($_GET['aksi']) == 'delete'){
		$ip = $_GET['ip'];
		$cek = mysqli_query($d_koneksi, "SELECT * FROM d_statistik WHERE ip='$ip'");
	if(mysqli_num_rows($cek) == 0){
		echo '<div class="alert alert-info alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> Data Tata Usaha tidak ditemukan.</div>';
	}else{
		$delete = mysqli_query($d_koneksi, "DELETE FROM d_statistik WHERE ip='$ip'");}}
?>
<?php
		$query = "SELECT * FROM d_statistik ORDER BY namalengkap asc";
		$sql = mysqli_query($d_koneksi, $query);
		while($data = mysqli_fetch_array($sql)){
	echo '
	<tr>
	<td align="center">'.$data['ip'].'</td>
	<td align="center">'.$data['namalengkap'].'</td>
	<td align="center">'.$data['tanggal'].'</td>
	<td align="center">'.$data['hits'].'</td>
	<td align="center">'.$data['online'].'</td>
	</tr>';}
?>
	</div>
	</div>
	</div>
	</table>
<br>
<?php include 'print.php'; ?>