<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ADD ITEM</title>
  </head>

<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <button class="navbar-toggler" 
    type="button" 
    data-toggle="collapse" 
    data-target="#navbarSupportedContent"

    aria-controls="navbarSupportedContent" 
    aria-expanded="false" 
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home-meisha.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Meisha_Booking.php">MyCar</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row text-center">
    <div class="col mb-8 pt-10 mx-auto ">
      <br><br><br>
      <h2>Tambah Mobil</h2>
      <p>Tambah mobil baru anda ke list show room</p>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Mobil</label>
          <input type="text" name="nama_mobil" class="form-control" placeholder="Toyota Raize"id="Enter Full Name" aria-describedby=" ">
        </div>

        <form action="" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama Pemilik</label>
          <input type="text" name="pemilik_mobil" class="form-control" placeholder="Meisha - 1202204013"id="Enter Full Name" aria-describedby=" ">
        </div>

        <form action="" method="POST">
        <div class="mb-3">
          <label for="nama" class="form-label">Merk</label>
          <input type="text" name="merk_mobil" class="form-control" placeholder="Raize"id="Enter Full Name" aria-describedby=" ">
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