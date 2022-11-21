<?php

if (isset($_GET['id_mobil'])) {
  $id_car    = $_GET['id_mobil'];
} else {
  die("Error. No ID Selected!");
}

include('connector.php');
$query = "SELECT * FROM showroom_meisha_table WHERE id_mobil = $id_car ";
$hasil = mysqli_query($conne, $query);

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>ITEM DETAIL</title>
</head>

<body>

  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a class="nav-link" href="home-meisha.php">Home <span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="AddItem.php">MyCar</a>
        </li>
      </ul>
    </div>
  </nav>
  <br><br><br>

  <!-- Form -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($getDetail = mysqli_fetch_array($hasil)) {
      ?>
        <h1 class='tambahh1'><?php echo  $getDetail["nama_mobil"] ?></h1>
        <p class='tambahp'>Detail Mobil <?php echo  $getDetail["nama_mobil"] ?></p>
        <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
          <img src='../asset/images/<?php echo $getDetail["foto_mobil"] ?>' alt='foto_mobil'>
          <form action='' enctype='multipart/form-data'>

            <div class="mb-3">
              <label for='nama'>Nama Mobil</label>
              <input type='text' id='nama' name='nama' value='<?php echo $getDetail["nama_mobil"] ?> ' readonly>
            </div>

            <div class="mb-3">
              <label for='pemilik'>Nama Pemilik</label>
              <input type='text' id='pemilik' name='pemilik' value='<?php echo $getDetail["pemilik_mobil"] ?>' readonly>
            </div>

            <div class="mb-3">
              <label for='merk'>Merk</label>
              <input type='text' id='merk' name='merk' value='<?php echo $getDetail["merk_mobil"] ?>' readonly>
            </div>

            <div class="mb-3">
              <label for='tanggalbeli'>Tanggal Beli</label>
              <input type='date' id='tanggalbeli' name='tanggalbeli' value='<?php echo $getDetail["tanggal_beli"] ?>' readonly>
            </div>

            <div class="mb-3">
              <label for='desc'>Deskripsi</label>
              <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' readonly> '<?php echo $getDetail["deskripsi"] ?> </textarea>
            </div>

            <div class="mb-3">
              <label for='inputGroupFile01'>Foto</label>
            </div>

            <div class='input-group mb-3'>
              <input type='text' class='form-control' id='inputGroupFile01' value='<?php echo $getDetail["foto_mobil"] ?>' readonly>
            </div>

            <label for='status'>Status Pembayaran</label>
            <span class='d-flex'>
              <input type='radio' name='status' id='lunas' value='Lunas' <?php (($getDetail["status_pembayaran"] == 'Lunas') ?; 
              echo checked="checked"; : echo ""); ?> style='width: 15px; height: 15px; margin-right:10px;'>
              <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
              <input type='radio' name='status' id='belum' value='Belum Lunas' <?php echo (($getDetail["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") ?> style='width: 15px; height: 15px; margin-right:10px;'>
              <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
            </span>
            <a href='Edit-Meisha.php?id=" . $getDetail["id_mobil"] . "' class='btn btn-primary' style='margin-top: 40px;'>Edit</a> <br><br>
          </form>
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

</body>

</html>