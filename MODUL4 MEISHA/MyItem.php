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
    <!-- 
    <section id="home" class="home"> -->
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
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
    </nav>

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
                                        <!-- <a href="ItemDetail.php" class="btn btn-primary">Detail</a> &nbsp;&nbsp;&nbsp; -->

                                        <a class="btn btn-primary" href="ItemDetail.php?id_mobil=<?= $row['id_mobil'] ?>">Detail</a> &nbsp;&nbsp;&nbsp;
                                        <a class="btn btn-danger" href="delete.php?id_mobil=<?= $row['id_mobil'] ?>">Delete</a> &nbsp;&nbsp;&nbsp;
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