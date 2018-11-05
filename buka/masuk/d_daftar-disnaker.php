<html>
<?php include "d_atas.php"; ?>
	<!-- Isi -->
	<div class="container_12">
	<div class="module">
	<br>
	<h2><span>Silakan Masuk Terlebih Dahulu Untuk Mengambil No. Antrian Anda:</span></h2>
	<div class="module-table-body">
	<table id="myTable" class="tablesorter">
		<tr>	
		<td>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
		<link rel="stylesheet" href="css/masuk.css" type="text/css">
		<div class="masuk-box">
		<form method="post" action="p_daftar-disnaker.php" class="surel-masuk">
		<div class="d-form-group">
			<input type="text" name="namalengkap" placeholder="Harap Masukkan Nama Anda!"/>
		</div>
		<div class="d-form-group">
			<input type="text" name="surel" placeholder="Harap Masukkan Surel Anda!"/>
		</div>
		<div class="d-form-group">
			<input type="password" name="sandi" placeholder="Harap Masukkan Sandi Anda!"/>
		</div>
		<div class="d-form-group">
			<input type="text" name="tanggal" value="<?php $date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
														echo $date->format('d-m-Y'); ?>" disabled=disabled/>
		</div>
		<div class="d-form-group">
			<input type="text" name="jam" value="<?php $time = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
														echo $time->format('H:i:s'); ?>" disabled=disabled/>
		</div>
		<div class="d-form-group">
			<button>Daftar</button>
		</div>
		</form>
		</div>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="js/masuk.js"></script>
		</td>
		</tr>
	</div>
	</div>
	</div>
	</table>
	<!-- Akhir Isi -->
<?php include "d_bawah.php"; ?>	
</html>