<?php
    include('connector.php');
    $query = "SELECT * FROM showroom_meisha_table";
    $hasil = mysqli_query($conne, $query);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style/styles.css">

    <title>MyItem</title>
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
            <div class="text-end">
          <a href="AddItem.php" button type="button" class="btn btn-outline-light me-2">Add Car</a>
    </div>
        </div>
    </nav>
    <br>
    <br>
    <br>

    <section id="MyItem" class="p-6">
        <div class="container">
            <br>
            <h3>My Show Room</h3>
            <p>List Show Room Meisha-1202204013</p>
        </div>
        <br>

        <section class="jumbotron text-center">
            <div class="container">
                <?php if (mysqli_num_rows($hasil) <= 0) { ?>
                    <br>
                    <br>
                    <h1 class="display-7"> No Car List</h1>
                    <div class=" text-muted text-center text-small">
                        <p> Please, Add Car List Now </p>
                    </div>

                <?php } ?>

                <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5">
                    <?php while ($row = mysqli_fetch_array($hasil)) { ?>
                        <div class="col">
                            <div class="card">
                                <img class="card-img-top image-awal" src="<?php echo $row['foto_mobil'] ?>" alt="<?php echo $row['foto_mobil'] ?>">
                                <div class="card-body">
                                    <h6 class="card-title"><?= $row['nama_mobil'] ?> </h6>
                                    <div class="clearfix">
                                        <p class="mb-0 float-start"><?= $row['deskripsi'] ?></p>
                                    </div>
                                    
                                    <br><br>

                                <div class=" mb-3 d-flex justify-content-center">
                                    <a href="ItemDetail.php" class="btn btn-primary">Detail</a> &nbsp;&nbsp;&nbsp;
                                    <a href="CRUD.png?id_mobil=<?= $select['id_mobil'] ?>&action=delete" 
                                    class="btn btn-danger" role="button"> Delete </a>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </section>
</body>

</html>