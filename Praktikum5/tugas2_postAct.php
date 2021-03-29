<?php // membedakan perintah PHP dengan HTML
if (empty($_POST['nama'])||empty($_POST['email'])) {
	header("Location:datakosong.php"); // jika inputan kosong maka diarahkan ke alamat datakosong.php
} else {
	echo "<center>Nama : ".$_POST['nama']."</center><br>"; // menampilkan nama yang diinputkan
	echo "<center>Email : ".$_POST['email']."</center><br>"; // menamplkan email yang diinputan
	echo "<center> Waktu Login : ". date ("g A D d-m-Y"); // menampilkan waktu login yang diinputkan
}
?>