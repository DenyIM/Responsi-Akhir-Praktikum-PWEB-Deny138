<?php
	echo "<head><center><font size='8' face='Courier New, Courier, mono'>DATA FORM</font><center></head><br><br>";
	echo("<link rel='stylesheet' href='css2.css'>");
	echo "<body id='background'>";
	$fp = fopen("data.txt","r");
	echo "<table>";
	echo("<tr><td>No.</td><td>Nama</td><td>NIM</td><td>Kota</td></tr>");
	$i = 1;
	while ($isi = fgets($fp)) {
		$pisah = explode("|",$isi);
		echo "<tr><td>$i</td><td>$pisah[1]</td><td>$pisah[0]</td><td>$pisah[2]</td></tr>";
		$i = $i+1;
	}
	echo "</table><br><br>";
	echo "<b><font size='4' face='Courier New, Courier, mono'><a href=form.html>Klik Disini</a> Untuk Isi Form</font><b><br>";
	echo "<b><font size='4' face='Courier New, Courier, mono'><a href=index.html>Klik Disini</a> Untuk Kembali Ke Menu</font><b>";
	echo "</body>";
?>