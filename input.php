<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form PHP</title>
</head>
<body>
    <form method="post" action="proses.php"> 
        <label> Nama : </label>
        <input type="text" name="nama">
        <input type="submit" value="simpan" name="ok">
    </form>

    <?php
        echo "Output Nama : ";
        if(isset($_POST["ok"])){
            echo $_POST["nama"];
        }
    ?>
</body>
</html>