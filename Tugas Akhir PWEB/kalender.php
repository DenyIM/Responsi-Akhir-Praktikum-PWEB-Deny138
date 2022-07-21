<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css3.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KALENDER</title>
</head>
<body>
	<center><h1>KALENDER</h1>
	<?php
		$hari = date("d");
		$bulan = date("m");
		$tahun = date("Y");
		$jumlahhari = date("t", mktime(0,0,0,$bulan,$hari,$tahun));
	?>
	<br><br>
	<?php
		switch ($bulan) {
			case 1:
				$nmbulan = "Jan";
				break;
			case 2:
				$nmbulan = "Feb";
				break;
			case 3:
				$nmbulan = "Mar";
				break;
			case 4:
				$nmbulan = "Apr";
				break;
			case 5:
				$nmbulan = "Mei";
				break;
			case 6:
				$nmbulan = "Jun";
				break;
			case 7:
				$nmbulan = "Jul";
				break;
			case 8:
				$nmbulan = "Agu";
				break;
			case 9:
				$nmbulan = "Sep";
				break;
			case 10:
				$nmbulan = "Okt";
				break;
			case 11:
				$nmbulan = "Nov";
				break;
			case 12:
				$nmbulan = "Des";
				break;
		}
		echo "<center><h3>$nmbulan $tahun</h3></center>";
	?>
	<br>
	<table style="border: 2px solid #011627" align="center" cellpadding="10">
		<tr bgcolor="#ADD8E6">
			<td align="center"><font color="#FF0000">Min</font></td>
			<td align="center">Sen</td>
			<td align="center">Sel</td>
			<td align="center">Rab</td>
			<td align="center">Kam</td>
			<td align="center">Jum</td>
			<td align="center">Sab</td>
		</tr>
	<?php
		$s = date("w", mktime(0,0,0,$bulan,1,$tahun));
		for ($ds=1; $ds<=$s; $ds++) { 
			echo "<td></td>";
		}
	
		for ($d=1; $d<=$jumlahhari; $d++) { 
			if (date("w", mktime(0,0,0,$bulan,$d,$tahun)) == 0) {
					echo "<tr>";
			}
			$warna = "#000000";
	
			if (date("1", mktime(0,0,0,$bulan,$d,$tahun)) == "Sunday") {
				$warna = "#FF0000";
			}
	
			echo "<td align=center valign=middle><span style=\"color:$warna\">$d</span></td>";
	
			if (date("w", mktime(0,0,0,$bulan,$d,$tahun)) == 6) {
				echo "</tr>";
			}
		}
	echo '</table>';
	?>
	<a href="index.html"><h4>Kembali Ke Main Menu</h4></a>
	<div class="footer">
		<h2>Copyright @2022 oleh Deny</h2>
	</div>
</body>
</html>