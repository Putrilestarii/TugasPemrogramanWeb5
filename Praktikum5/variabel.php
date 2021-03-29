<!DOCTYPE html>
<html>
<head>
	<title> Variabel </title> <!-- menampilkan judul variabel -->
</head>
	<body>
	<?php // membedakan perintah HTML dan PHP
	$nilai_1 = 10; // inisialisasi variabel nilai1
	$nilai_2 =  3; // inisialisasi variabel nilai2
	$nilai_3 = 2 * $nilai_1 + 8 * $nilai_2; // inisialisasi variabel nilai 3
	echo "Nilai = ", $nilai_3; // menampilkan hasil dari variabel nilai 3
	echo "<br>"; // ganti baris selanjutnya
	$jumlah = $nilai_1 + $nilai_2; // inisialisasi hasil jumlah  nilai1 dan nilai2
	echo "Hasil dari $nilai_1 + $nilai_2 adalah : $jumlah"; echo "<br><br>"; // inisialisasi  penjumlahan nilai1 dan nilai2
	echo "\"Nama : Putri Lestari\" <br>"; // menampilkan variabel nama 
	echo "NPM : 19082010010"; // menampilkan variabel npm
	 ?>
	</body>
</html>