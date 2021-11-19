<?php
session_start();
if (!isset($_SESSION['email'])){
    echo
    "<script>
        alert('Anda Belum Login');
        window.location.replace('login.php';
    </script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beranda</title>
</head>
<body>
    <div style="text-align: center;">
    <h1>HOME</h1>
    <p>Selamat datang,
        <?php echo ($_SESSION["email"]) ?>
    </p>
    <a href="logout.php">Logout</a>

    </div>
</body>
</html>