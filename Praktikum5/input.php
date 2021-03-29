<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="hasilkirim.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2"> <!-- menampilkan tabel-->
			<tr>
				<td width="130">Nama</td> <!-- menampilkan Nama -->
				<td><input type="text" name="nama"></td> <!-- menampilkan textbox nama-->
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="btnLogin" value="Kirim"> <!-- menmapilkan button kirim -->
					<input type="reset" name="reset" value="Reset"> <!-- menampilkan buttin reset -->
				</td>
			</tr>
		</table>
	</form>

</body>
</html>