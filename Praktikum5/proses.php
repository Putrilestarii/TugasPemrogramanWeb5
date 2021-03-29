<?php 
include "inc.php";// meanmpilkan include php yang mengekesekusi file inc.pp
echo $angka; // menampilkan teks dari variabel angka
echo "<br>"; // ganti baris selanjutnya
if ($angka==100) { //jika variabel nilai angka yang diinputkan 100
	echo "Memuaskan"; // maka menampilkan teks memuaskan
} elseif ($angka<100&&$angka>=85) { //jika variabel angka yang diinputkan nilai angka kurang dari 100 
	echo "Sangat Baik"; // maka menampilkan teks sangat baik
} elseif ($angka<85&&$angka>=70) { //jika variabel angka yang diinputkan nilai angka kurang dari 85
	echo "Baik"; // maka menampilkan teks baik
} else if ($angka<70&&$angka>=55) { //jika variabel angka yang diinputkan nilai angka kurang dari 70
	echo "Cukup"; // maka menampilkan teks cukup
} elseif ($angka<55&&$angka>=0) { //jika variabel angka yang diinputkan nilai angka kurang dari 55
	echo "Kurang"; // maka menampilkan teks kurang
}
?>