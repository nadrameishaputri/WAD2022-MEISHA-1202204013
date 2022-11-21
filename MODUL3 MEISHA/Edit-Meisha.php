<?php
require 'connector.php';

$id = $_GET['id'];

$sql = "SELECT * FROM showroom_meisha_table WHERE id_mobil = $id";

$hasil = mysqli_query($conne, $sql);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Car - Meisha_NIM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>
    <!-- Nav -->
    <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="AddItem.php">MyCar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Nav End -->

    <br><br><br>

    <!-- Form -->
    <section id='detail'>
        <div class="container">
            <?php
            while ($getDetail = mysqli_fetch_array($hasil)) {
            ?>
                <h1 class='tambahh1'>" . $getDetail["nama_mobil"] . "</h1>
                <p class='tambahp'>Detail Mobil " . $getDetail["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                    <img src='../asset/images/" . $getDetail["foto_mobil"] . "' alt='foto_mobil'>
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <form action='../config/update.php?id=" . $getDetail["id_mobil"] . "' method='POST' enctype='multipart/form-data'>

                                <div class="mb-3">
                                    <label for='nama' class='form-label'>Nama Mobil</label>
                                    <input type='text' id='nama' name='nama' value='" . $getDetail["nama_mobil"] . "'>
                                </div>

                                <div class="mb-3">
                                    <label for='pemilik'>Nama Pemilik</label>
                                    <input type='text' id='pemilik' name='pemilik' value='" . $getDetail["pemilik_mobil"] . "'>
                                </div>

                                <div class="mb-3">
                                    <label for='merk'>Merk</label>
                                    <input type='text' id='merk' name='merk' value='" . $getDetail["merk_mobil"] . "'>
                                </div>

                                <label for='tanggalbeli'>Tanggal Beli</label>
                                <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $getDetail["tanggal_beli"] . "'>
                                <label for='desc'>Deskripsi</label>
                                <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;'> " . $getDetail["deskripsi"] . " </textarea>
                                <label for='inputGroupFile01'>Foto</label>
                                <input type='file' class='form-control' id='inputGroupFile01' value='" . $getDetail["foto_mobil"] . "' name='gambar' style='height: 40px;'>
                                <label for='status'>Status Pembayaran</label>
                                <span class='d-flex'>
                                    <input type='radio' name='status' id='lunas' value='Lunas' " . (($getDetail[" status_pembayaran"]=='Lunas' ) ? 'checked="checked"' : "" ) . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($getDetail["status_pembayaran"]=='Belum Lunas' ) ? 'checked="checked"' : "" ) . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <a href=MyItem.php button type='submit' class='btn btn-primary' style='margin-top: 40px;'>Selesai</a>
                  </form>
                </div>
                    </div>
                </div>
        </div>
        
            <?php
            }
            ?>
    </div>
  </section>
  <!-- Form End -->

  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>