<?php
include "koneksi.php";
$id_siswa = $_GET["id_siswa"];
$deleteSiswa = mysqli_query($connection, "DELETE FROM siswa WHERE id = '$id_siswa' ");


echo "
<script>
    alert ('Siswa Berhasil Dihapus');
    window.location.replace('home.php');
</script>
";

?>