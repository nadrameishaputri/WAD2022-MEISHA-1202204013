<?php
require './connector.php';

$id_car = $_GET['id_mobil'];

$mysql = "DELETE FROM showroom_meisha_table WHERE id_mobil = $id_car";

if (mysqli_query($conne, $mysql)) {
  header("location: ./list.php?pesan=delete");
} else {
  echo "Error";
}
