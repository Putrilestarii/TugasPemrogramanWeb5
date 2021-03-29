<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
</head>
<body>
<h1>Silahkan Isi Biodata Anda</h1>  <!--membuat tulisan header-->
<form method="POST" action="biodataAct.php">  <!--inisialisasi dari  form method post yang memanggil biodataAct.php-->
  <table border="0" width="400"> <!--menampilkan tabel border 0 dan lebar 400-->
    <tr>
      <td>Nama : </td> <!--menampilkan tabel nama-->
      <td><input type="text" size="25" name="Nama"></td><!--menampilkan inputan texboxt nama-->
    </tr>
    <tr>
      <td>Email : </td> <!--menampilkan tabel data email-->
      <td><input type="text" size="25" name="Email"></td> <!--menampilkan inputan texboxt email-->
    </tr>
    <tr>
      <td>Tanggal Lahir : </td> <!--menampilkan tabel tanggal lahir-->
      <td><input type="date" name="tanggal"> <!--menampilkan inputan tanggal -->
      </td>
    </tr>
    <tr>
      <td>Jenis Kelamin : </td> <!--menampilkan tabel jenis kelamin--> 
      <td>
        <input type="radio" value="Laki-laki" name="jenisk">Laki-Laki <!--menampilkan radio button laki laki--> 
        <input type="radio" value="Perempuan" name="jenisk">Perempuan</td> <!--menampilkan radio button perempuan-->
    </tr>
    <tr>
      <td>Fakultas : </td> 
      <td>
        <select name="fakultas_mahasiswa" id="" style="width: 80%;"><!--menampilkan abel data fakultas-->
          <option value="">--Pilih--</option> <!-- Brikut opsi pilihannya-->
          <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
          <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
          <option value="Fakultas Hukum">Fakultas Hukum</option>
          <option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
          <option value="Fakultas Tektik">Fakultas Tektik</option>
          <option value="Fakultas Pertanian">Fakultas Pertanian</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Jurusan : </td><!--menampilkan tabel jurusan-->
      <td>
        <select name="jurusan_mahasiswa" id="" style="width: 80%;">
          <option value="">--Pilih--</option>
          <option value="Manajemen">Manajemen</option>
          <option value="Akutansi">Akutansi</option>
          <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
          <option value="Sistem Informasi">Sistem Informasi</option>
          <option value="Informatika">Informatika</option>
          <option value="Sains Data">Sains Data</option>
          <option value="Hukum">Hukum</option>
          <option value="Administrasi Negara">Administrasi Negara</option>
          <option value="Administrasi Bisnis">Administrasi Bisnis</option>
          <option value="Hubungan Internasional">Hubungan Internasional</option>
          <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
          <option value="Pariwisata">Pariwisata</option>
          <option value="Teknik Industri">Teknik Industri</option>
          <option value="Teknik Kimia">Teknik Kimia</option>
          <option value="Teknik Lingkungan">Teknik Lingkungan</option>
          <option value="Teknik Sipil">Teknik Sipil</option>
          <option value="Teknologi Pangan">Teknologi Pangan</option>
          <option value="Teknik Mesin">Teknik Mesin</option>
          <option value="Agribisnis">Agribisnis</option>
          <option value="Agroteknologi">Agroteknologi</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Alamat :</td> <!-- menampilkan tabel alamat-->
      <td><textarea rows="2" cols="25" name="Alamat"></textarea></td> <!--menampilkan sebuah text area yang dapat di inputkan -->
    </tr>
    <tr>
      <td>
        <input type="reset" value="Hapus"> <!-- menampilkan button reset--> 
        <input type="submit" value="Kirim" > <!-- menampilkan button kirim-->
      </td>
    </tr> 
  </table>
</form>   
</body>
</html>