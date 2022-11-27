<?php 
if (isset($_GET['action'])) {
    if ($_GET['action'] = 'delete') {
        if (isset($_GET['id_mobil'])) {
            $id_mobil = $_GET['id_mobil'];

            $sql = "DELETE FROM showroom_meisha_table WHERE id_mobil= '$id_mobil'";
            $query = mysqli_query($conne, $sql);

            header("MyItem.php"); 
        }
    }
}
