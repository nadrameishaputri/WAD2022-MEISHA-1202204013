<!doctype html>
<html lang="en">

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
    <title>ADD ITEM</title>
  </head>

<body>
  <!-- <section id="home" class="home"> -->
  <nav class="navbar navbar-expand-sm navbar-dark sticky-top flex-md-nowrap p-3 shadow navbar-fixed-top" style="background-color: #3563E9;">
    <div class="container">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <a class="nav-link" href="home2.php" style="color :azure">Home</a>
          <a class="nav-link" href="MyItem.php" style="color:azure">MyCar</a>
        </div>
      </div>
  </nav>
  <!-- </section> -->

  <div class="container">
    <div class="row text-center">
      <div class="col mb-8 pt-10 mx-auto ">
        <br>
        <h2>Tambah Mobil</h2>
        <p>Tambah mobil baru anda ke list show room</p>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-6">
        <form action="add.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Mobil</label>
            <input type="text" name="nama_mobil" class="form-control" placeholder="Toyota Raize" id="Enter Full Name" aria-describedby=" ">
          </div>

          <form action="" method="POST">
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Pemilik</label>
              <input type="text" name="pemilik_mobil" class="form-control" placeholder="Meisha - 1202204013" id="Enter Full Name" aria-describedby=" ">
            </div>

            <form action="" method="POST">
              <div class="mb-3">
                <label for="nama" class="form-label">Merk</label>
                <input type="text" name="merk_mobil" class="form-control" placeholder="Raize" id="Enter Full Name" aria-describedby=" ">
              </div>

              <div class="mb-3">
                <label for="pickupDate" class="form-label">Tanggal Beli</label>
                <input type="date" name="tanggal_beli" class="form-control" placeholder="11/12/2022" id="Enter Date">
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" name="deskripsi" placeholder="Mobil lucu lucu buat jalan bareng temen" id="floatingTextarea2" style="height: 100px"></input>
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Foto</label>
                <input class="form-control " name="gambar" id="gambar" type="file">
              </div>

              <div class="col-12">
                <label for="supir" class="form-label">Status Pembayaran</label>
                <br>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                  <label class="form-check-label" for="inlineRadio1">Lunas</label>
                </div>

                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                  <label class="form-check-label" for="inlineRadio2">Belum Lunas</label>
                </div>
              </div>

              <div>
                <form>
                  <br>
                  <a button type="submit" class="btn btn-primary" class="nav-link" href="MyItem.php">Selesai</a>
                </form><br><br>
              </div>
            </form>
          </form>
        </form>
      </div>
    </div>
  </div>
</body>

</html>