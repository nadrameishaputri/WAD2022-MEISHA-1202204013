<?php
include("connector.php");

if (isset($_POST['selesai'])) {
    $nama = $_POST['nama_mobil'];
    $pemilik = $_POST['pemilik_mobil'];
    $merk = $_POST['merk_mobil'];
    $deskripsi = $_POST['deskripsi'];
    $pembayaran = $_POST['status_pembayaran'];
    $hapus = implode(',', $_POST['hapus']);

    $random = rand(); 
    $eksten =  array('png', 'jpg', 'jpeg', 'gif'); 
    $filename = $_FILES['gambar']['name']; 
    $ukuran = $_FILES['gambar']['size']; 
    $ukuran_maksimal = 5242880; //5 mb

    $random_filename = '';
    if (isset($_FILES['gambar']['tmp_name'])) {
        if ($ukuran > $ukuran_maksimal) {
            echo 'ukuran lebih dari maksimal';
            die();
        } else {
            $random_filename = $random . '_' . $filename;
            $upload_file = move_uploaded_file($_FILES['gambar']['tmp_name'], 'asset/' . $random_filename);
        }
    }

    $sql = "INSERT INTO showroom_meisha_table (nama_mobil, pemilik_mobil, merk_mobil, deskripsi, status_pembayaran, hapus, gambar)
            VALUES('$nama', '$pemilik', '$merk', '$deskripsi', '$pembayaran', '$hapus', '$random_filename')";
    $query = mysqli_query($conne, $sql);
    $last_id = mysqli_insert_id($conne);

    header("location:Tasya_DetailBuku.php?id_mobil=" . $last_id);
};

// DELETE
if (isset($_GET['action'])) {
    if ($_GET['action'] == 'delete') {
        if (isset($_GET['id_buku'])) {
            $id_mobil = $_GET['id_buku'];

            $sql = "DELETE FROM buku_table WHERE id_buku= '$id_mobil'";
            $query = mysqli_query($conne, $sql);

            header("location:home-meisha.php");
        };
    }
}

//UPDATE
if (isset($_POST['update'])) {
    $id_mobil = $_POST['id_mobil'];
    $nama = $_POST['nama_mobil'];
    $pemilik = $_POST['pemilik_mobil'];
    $merk = $_POST['merk_mobil'];
    $deskripsi = $_POST['deskripsi'];
    $pembayaran = $_POST['status_pembayaran'];
    $hapus = implode(',', $_POST['hapus']);

    $sql = "UPDATE showroom_meisha_table SET 
                nama_mobil = '$mobil',
                pemilik_mobil = '$pemilik',
                merk_mobil = '$merk',
                deskripsi = '$deskripsi',
                status_pembayaran = '$pembayaran',
                hapus = '$hapus'
            WHERE id_mobil = '$id_mobil'";

    $query = mysqli_query($conne, $sql);

    header("location:home-meisha.php");
};