<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perhitungan sederhana PHP</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Input Nilai 1</td>
                <td>
                    <input type="number" namespace="angka 1" name="angka_1">
                </td>

            </tr>
            <tr>
                <td>Input Nilai 2</td>
                <td>
                    <input type="number" namespace="angka 2" name="angka_2">
                </td>
            </tr>
            <tr>
                <td>Input Nilai 3</td>
                <td>
                    <input type="number" namespace="angka 3" name="angka_3">
                </td>
            </tr>
        </table>
        <button type="submit" name="hasil">submit</button>
    </form>

    <?php
    $result = 0;

    if(isset($_POST["hasil"])){
        $a1 = $_POST['angka_1'];
        $a2 = $_POST['angka_2'];
        $a3 = $_POST['angka_3'];
        $result = $a1 + $a2 + $a3;

    }
    ?>

    <table>
        <tr>
            <td>Hasil</td>
            <td><?php echo $result; ?></td>
        </tr>
    </table>
</body>
</html>