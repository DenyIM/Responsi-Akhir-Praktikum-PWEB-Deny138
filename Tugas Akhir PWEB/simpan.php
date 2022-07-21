<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="tampilan4.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FORM</title>
</head>
<body>
	<center><h1>FORM</h1>
	<h2>DATA SUDAH DITERIMA<br>TERIMAKASIH</h2><br><br>

	<?php
		//simpan kedalam file
		$fp = fopen("data.txt", "a+");
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$kota = $_POST['kota'];
		fputs($fp, "$nim|$nama|$kota\n");
		fclose($fp);
	?>
	<a href="form.html"><h4>Isi Form Lagi</h4></a><br>
	<a href="lihat.php"><h4>Lihat Daftar Form</h4></a><br>
	<a href="index.html"><h4>Kembali Ke Main Menu</h4></a>

	</div></center>
	<div class="footer">
		<h2>Copyright @2022 oleh Deny</h2>
	</div>
</body>
</html>