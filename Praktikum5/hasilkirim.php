<?php // membedakan perintah PHP dengan HTML
if (empty($_POST['nama'])) {
	header("Location:kosong.php"); // jika inputan kosong maka diarahkan ke alamat kosong.php
} else {
	echo "<center>Nama : ".$_POST['nama']."</center><br>";
}
?>