<html>
<?php
$koneksi = mysqli_connect("localhost","root","","disnaker_lita");
$lama = 5;
// Lama data yang tersimpan di database dan akan otomatis terhapus setelah 5 hari
// Proses untuk melakukan penghapusan data
$query = "DELETE FROM d_antrian
          WHERE DATEDIFF(CURDATE(), tanggal) > $lama";
$hasil = mysqli_query($koneksi,$query);
?>
<?php
	// Menampilkan data berdasarkan table murid yang tanggalnya kurang dari 5 hari
	$sql="SELECT * FROM d_antrian";
	$tampil = mysqli_query($koneksi,$sql);
?>
<?php include "atas.php"; ?>
	<!-- Isi -->
	<div class="container_12">
	<div class="module">
	<br>
	<h2><span>Hasil No. Antrian Anda:</span></h2>
	<div class="module-table-body">
	<table id="myTable" class="tablesorter">
		<?php while($s=mysqli_fetch_array($tampil)) { ?>
	<td align="center">
		<br><br>
		No. Antrian:
		<br>
		<?php echo "$s[No_antrian]";?>
		<br><br>
		Nama Pengantri:
		<br>
		<?php echo "$s[Nm_pengantri]";?>
		<br><br>
		No. Loket:
		<br>
		<?php echo "$s[No_loket]";?>
		<br><br>
		Durasi No. Antrian:
		<br>
		<?php echo "$s[Durasi]";?>
		<br><br><br>
	</td>
		<?php } ?>
	</div>
	</div>
	</div>
	</table>
	<!-- Akhir Isi -->
<?php include "bawah.php"; ?>	
</html>