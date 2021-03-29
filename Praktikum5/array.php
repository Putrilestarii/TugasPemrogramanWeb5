<!DOCTYPE html>
<html>
<head>
	<title> Pemrograman PHP dengan Array </title> <!-- menampilkan judul pemrograman php dengan array -->
</head>
<body>
<?php // membedakan perintah PHP dengan HTML
// penulisan array dapat dibuat seperti berikut
$nama[] = "Putri"; // inisialisasi variabel putri
$nama[] = "Lestari"; // inisialisasi variabel lestari
$nama[] = "Sidoarjo"; // menampilkan variabel UPN
echo $nama[1] . $nama[2] . $nama[0]; // inisialisasi urutan perintah echo dimulai elemen indeks 1 2 0
echo "<br>"; // ganti baris selanjutnya
// menghitung jumlah elemen array
$jum_array=count($nama); // menghitung jumlah elemen array
echo "Jumlah elemen array = ".$jum_array; // menampilkan hasil dari jumlah elemen array
?>
</body>
</html>