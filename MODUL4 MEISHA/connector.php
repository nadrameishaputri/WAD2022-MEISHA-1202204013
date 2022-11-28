<?php
session_start();
$servername = "127.0.0.1:3344";
$username = "root";
$password = "";
$database = "wad_modul4_meisha";

$conne = mysqli_connect($servername, $username, $password, $database);

if (!$conne) {
  echo "<script>
            alert('failed connect into database')
          </script>";
}
