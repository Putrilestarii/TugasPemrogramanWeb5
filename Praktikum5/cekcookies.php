<?php  // membedakan perintah PHP dengan HTML
if (isset($variable_cookies)) {
	echo 'Variable cookiesnya "$variable_cookies" nilainya adalah' .$variable_cookies; // menampilkan penyimpanan nilai sementara
} else {
	echo "Variable cookies belum diterapkan"; // menampilkan teks variable cookies belum diterapkan
}
?>