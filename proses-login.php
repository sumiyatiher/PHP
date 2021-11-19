<?php

$inputEmail = $_POST["email"];
$inputPassword = $_POST["pw"];

$kunciEmail = "ysumi123@gmail.com";
$kunciPassword = "1234567";


session_start();

if($inputEmail==$kunciEmail && $inputPassword==$kunciPassword){
    $_SESSION["email"] = $inputEmail;
    
    echo
    "<script>
        alert('Login Sukses');
        window.location.replace('beranda.php';
    </script>";
}else{
    echo
    "<script>
        alert('Login Sukses');
        window.location.replace('login.php';
    </script>";
}

?>