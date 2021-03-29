<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
	<h2> Pendaftaran Berhasil </h2> <!--menampilkan judul header-->
	<br>
    <div class="text">
        <?php
            echo "Nama : ".$_POST['Nama']. "<br>"; //menampilkan variabel nama
            echo "Email : ".$_POST['Email']. "<br>"; //menampilkan variabel email
            echo "Tanggal lahir : ".$_POST['tanggal']. "<br>"; //menampilkan varibel tanggal
            echo "Jenis Kelamin : ".$_POST['jenisk']. "<br>"; //menampilkan variabel jenisk
            echo "Fakultas: ".$_POST['fakultas_mahasiswa']. "<br>"; //menampilkan varibel fakultas
            echo "Jurusan: ".$_POST['jurusan_mahasiswa']. "<br>"; //menampilkan variabel jurusan
            echo "Alamat : ".$_POST['Alamat']. "<br>"; //menampilkan variabel alamat
        ?>
    </div>
</body>
</html>