<html>
<?php include "d_atas.php"; ?>
<?php include "f_cek-login.php"; ?>
<?php include "f_nomor.php"; ?>
<!-- Isi -->
	<div class="container_12">
	<div class="module">
	<br>
	<h2><span>Selamat datang, <?php echo $_SESSION['surel']; ?>! Silakan Ambil No. Antrian Anda:</span></h2>
	<div class="module-table-body">
	<table id="myTable" class="tablesorter">
	<tr>	
		<td align="center">
		    <div class="row loket">
			</div>
			<?php include "f_pantau-loket.php"; ?>
		</td>
	</tr>
	</div>
	</div>
	</div>
	</table>
<!-- Akhir Isi -->
<?php include "d_bawah.php"; ?>	
</html>