<?php

include("connector.php");

$email = $_POST['email'];
$password = $_POST['password'];

$email_cek = "SELECT * FROM user WHERE email= '$email' ";
$select = mysqli_query($conne, $email_cek);

session_start();
if (mysqli_num_rows($select) == 1) {
    $result = mysqli_fetch_assoc($select);

    if (password_verify($password, $result['password'])) {
        session_start();
        $_SESSION['id'] = $result['id'];
        $_SESSION['nama'] = $result['nama'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['no_hp'] = $result['no_hp'];


        $_SESSION['message'] = 'Berhasil login';

        header("Location: home2.php");
        exit();
    } else {
        $_SESSION['message'] = 'Password salah';
        header("Location: login.php");
        exit();
    }
}

$_SESSION['message'] = 'Gagal login';

header("Location: login.php");
exit();

