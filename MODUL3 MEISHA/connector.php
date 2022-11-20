<?php
$servername = "127.0.0.1:3344";
$username = "root";
$password = "";
$database = "modul3";

$conne = mysqli_connect($servername, $username, $password, $database);

if (!$conne) {
  echo "<script>
            alert('failed connect into database')
          </script>";
}
