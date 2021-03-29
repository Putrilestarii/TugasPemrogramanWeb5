<!DOCTYPE html>
<html>
<head>
	<title> Konversi Tipe</title> <!-- menampilkan judul konversi tipe -->
</head>
<body>
<?php // membedakan perintah PHP dengan HTML
$a = 300.4; // inisialisasi variabel nilai 300.4
echo $a; // menampilkan variable a
echo "<br>"; // ganti baris selanjutnaya 
echo "tipe Double : ", doubleval($a), "<br>"; // menampilkan tipe data double dari variabel a
echo "tipe Integer : ", intval($a), "<br>"; // menampilkan tipe data integer dari variabel a
echo "tipe string : ",strval($a); // menampilkan tipe data stringdari variabel a
?>
</body>
</html>