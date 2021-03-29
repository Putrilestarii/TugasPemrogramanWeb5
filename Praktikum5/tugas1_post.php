<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="tugas2_postAct.php"> <!-- menampilkan nilai variabel pengaruh method post -->
		<table width="400" align="center" cellpadding="2" cellspacing="2"> <!-- menampilkan tabel dengan ukuran lebar=400, rata tengah, cellpadding=2, cellspacing=2-->
			<tr>
				<td width="130">Nama</td> <!-- menampilkan teks  Nama-->
				<td><input type="text" name="nama"></td> <!--menampilkan kotak dari inputan teks nama-->
			</tr>
			<tr>
				<td width="130">Email</td><!-- menampilkan teks  email-->
				<td><input type="text" name="email"></td> <!--menampilkan kotak dari inputan teks email-->
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnLogin" value="Login"> <!-- menampilkan button login-->
					<input type="reset" name="reset" value="Reset"> <!-- menampilkan button reset-->
				</td>
			</tr>
		</table>
	</form>
</body>
</html>