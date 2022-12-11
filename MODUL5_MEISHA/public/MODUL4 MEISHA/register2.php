<?php

include("connector.php");

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$password = $_POST['password'];
$passcon = $_POST['konfirmasikatasandi'];
$cekemail = "SELECT email FROM user WHERE email='$email' ";
$select = mysqli_query($CONNE, $cekemail);


if (!mysqli_fetch_assoc($select)) {
    if ($password == $passcon) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        print_r(mysqli_fetch_assoc($select));

        $query = "INSERT INTO user (nama, email, password, no_hp) VALUES ('$nama', '$email','$password', '$no_hp')";
        mysqli_query($CONNE, $query);


        session_start();
        $_SESSION['register'] = 'Berhasil registrasi, silahkan login';

        header("Location: login.php");
        exit();
    }
}

session_start();
$_SESSION['message'] = 'Email anda sudah pernah terdaftar!';

header("Location: register.php");
exit();
