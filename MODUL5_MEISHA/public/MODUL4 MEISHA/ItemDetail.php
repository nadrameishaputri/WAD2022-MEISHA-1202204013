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

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
      </script>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- <link rel="stylesheet" href="Meisha_Index.css"> -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://unpkg.com/feather-icons"></script>

      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
      </script>
      <title>ITEM DETAIL</title>
    </head>
  </head>

<body>

  <!-- <section id="home" class="home"> -->
  <nav class="navbar navbar-expand-sm navbar-dark sticky-top flex-md-nowrap p-3 shadow fixed-top" style="background-color: #3563E9;">
    <div class="container">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <a class="nav-link" href="home2.php" style="color :azure">Home</a>
          <a class="nav-link" href="MyItem.php" style="color:azure">MyCar</a>
          <ul class="navbar-nav  mx-auto"></ul>
          <a class="btn btn-light" style="color:blue" type="Add Item" href="AddItem.php" role="button">Add Car</a>&nbsp;&nbsp;&nbsp;
          <!-- <a href="AddItem.php" style="color:blue;" type="submit" class="btn btn-light btn-sm" role="button" aria-pressed="true">Add Item</a> -->

          <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle" style="color:blue" data-bs-toggle="dropdown" aria-expanded="false">
              User
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
  </nav>
  <!-- </section> -->

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

            <div class="form-group">
              <label for='nama'>Nama Mobil</label>
            </div>

            <div class='input-group mb-3'>
              <input class='form-control' type='text' id='nama' name='nama' value='<?php echo $getDetail["nama_mobil"] ?> ' readonly>
            </div>

            <div class="form-group">
              <label for='pemilik'>Nama Pemilik</label>
            </div>

            <div class='input-group mb-3'>
              <input class='form-control' type='text' id='pemilik' name='pemilik' value='<?php echo $getDetail["pemilik_mobil"] ?>' readonly>
            </div>

            <div class="form-group">
              <label for='merk'>Merk</label>
            </div>

            <div class='input-group mb-3'>
              <input class='form-control' type='text' id='merk' name='merk' value='<?php echo $getDetail["merk_mobil"] ?>' readonly>
            </div>

            <div class="form-group">
              <label for='tanggalbeli'>Tanggal Beli</label>
            </div>

            <div class='input-group mb-3'>
              <input class='form-control' type='date' id='tanggalbeli' name='tanggalbeli' value='<?php echo $getDetail["tanggal_beli"] ?>' readonly>
            </div>

            <div class="form-group">
              <label for='desc'>Deskripsi</label>
            </div>

            <div class='input-group mb-3'>
              <input class='form-control' id='desc' name='desc' style='height:100px; width: 800px; border-radius: 4px;' value='<?php echo $getDetail["deskripsi"] ?>' readonly>
            </div>

            <div class="form-group">
              <label for='inputGroupFile01'>Foto</label>
            </div>

            <div class='input-group mb-3'>
              <input type='text' class='form-control' id='inputGroupFile01' value='<?php echo $getDetail["foto_mobil"] ?>' readonly>
            </div>

            <div class='input-group'>
              <label for='status_pembayaran'>Status Pembayaran</label>
            </div>

            <!-- <div class="form-group">
              <span class='d-flex'>
                <label for="StatusPembayaran" class="form-label"></label>
            </div> -->

            <div class='input-group mb-3'>
              <input type="text" class="form-control" name="StatusPembayaran" id="status_pembayaran" value='<?php echo $select['status_pembayaran'] ?>' readonly>
            </div>

            <div class='input-group'>
              <a href='edit.php' class='btn btn-primary' style='margin-top: 40px;'>Edit</a><br>
            </div>
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