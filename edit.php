<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Data</title>
</head>

<?php 

include "koneksi.php";
$data = mysqli_query($connection, 'SELECT nama,nis FROM siswa WHERE id = '.$_GET['id_siswa']);
$siswa= mysqli_fetch_array($data);

?>

<body style="max-width: max-content; margin: auto;">
<h2>Edit Data Siswa</h2>

<form method="post">
    <label> Nama : </label>
    <input type="text" name="nama" value="<?php echo $siswa["nama"]; ?>">
    <label>Nis : </label>
    <input type="text" name="nis" value="<?php echo $siswa["nis"]; ?>">
    <input type="submit" name="ok" value="Edit">
    <button><a href="home.php">Kembali</a></button>
</form>
    

<?php 

if(isset($_POST["ok"])){
    $nama = $_POST["nama"];
    $nis = $_POST["nis"];
    $id_siswa = $_GET['id_siswa'];

    $update = mysqli_query($connection,
    "UPDATE siswa SET 
    nama = '$nama',
    nis = '$nis
    WHERE id = '$id_siswa' ");

    echo 
    "<script> 
        alert ('Siswa Berhasil Diubah');
        window.location.replace('home.php');
    </script>";
}
?>
</body>
</html>