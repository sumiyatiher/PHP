<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data</title>
</head>
<?php 
include "koneksi.php";
if (isset($_POST["ok"])){
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];

    $insertSiswa = "INSERT INTO siswa(nama,nis) VALUES('$nama', '$nis')";
    $result = mysqli_query($connection, $insertSiswa);

    echo "
    <script>
        alert ('Siswa Berhasil Ditambahkan');
        window.location.replace('home.php');
    </script>
    ";

}

?>
<body style="max-width: max-content; margin: auto;">
<h2>Tambah Data Siswa</h2>

<form method="post">
    <label> Nama : </label>
    <input type="text" name="nama">
    <label>Nis : </label>
    <input type="text" name="nis">
    <input type="submit" name="ok" value="Tambah">
    <button><a href="home.php">Kembali</a></button>
</form>
    
</body>
</html>