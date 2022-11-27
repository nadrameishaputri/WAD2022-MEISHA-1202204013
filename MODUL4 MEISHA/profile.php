<?php
session_start();

include_once("connector.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/feather-icons"></script>
    <title> Profile User</title>
</head>

<?php if (isset($_COOKIE['warna'])) {
    $warna = $_COOKIE['warna'];
} else {
    $warna = '#5496bf';
} ?>

<body>
    <!-- <section id="home" class="home"> -->
    <nav class="navbar navbar-expand-sm navbar-dark sticky-top flex-md-nowrap p-3 shadow" style="background-color: #3563E9;">
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
    <!-- </section> -->

    <!-- manggil icon dari feather -->
    <script>
        feather.replace()
    </script>

    <?php
    if (isset($_SESSION['message'])) :  ?>
        <div class="alert alert-success alert-dismissible fade show fade in" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <section>
        <div class="container mt-3">
            <div class="d-flex justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="container">
                            <div class="card-body pt-0">
                                <h3 class="text-center mt-5"> Profile </h3>
                                <hr>
                                <div class="container mt-3 col-md-10">
                                    <form action="" enctype="multipart/form-data" method="POST" role="form" class="php-email-form aos-init aos-animate" data-aos="fade-up">
                                        <div class="form-group">
                                            <label for="email" class="form-label"> E-mail </label>
                                            <input type="email" name="email" class="form-control" id="email" value="<?= $_SESSION['email'] ?>" required="">
                                        </div><br>
                                        <div class="form-group">
                                            <label for="nama" class="form-label"> Nama </label>
                                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $_SESSION['nama'] ?>" required="">
                                        </div><br>
                                        <div class="form-group">
                                            <label for="no_hp" class="form-label"> Nomor Handphone </label>
                                            <input type="number" name="no_hp" class="form-control" id="no_hp" value="<?= $_SESSION['no_hp'] ?>" required="">
                                        </div><br>
                                        <hr>
                                        <div class="form-group">
                                            <label for="password" class="form-label"> Kata Sandi </label>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Kata Sandi Anda" required="">
                                        </div><br>
                                        <div class="form-group">
                                            <label for="password_confirm" class="form-label"> Kata Sandi </label>
                                            <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="Konfirmasi Kata Sandi" required="">
                                        </div><br>
                                        <div class="form-group background">
                                            <label for="warna" class="form-label"> Warna Navbar </label>
                                            <select name="warna" class="form-control" id="warna">
                                                <?php
                                                $colors = array('#5496BF' => 'Blue', '#cfe9e5' => 'Mint');
                                                foreach ($colors as $name => $value) {
                                                    $selected = $name == @$_POST['warna'] ? 'SELECTED="SELECTED"' : '';
                                                    echo '<option value= "' . $name . '"' . $selected . '>' . $value . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div><br>
                                        <div class=" mb-3 d-flex justify-content-center">
                                            <button type="submit" class="btn btn-primary" name="update"> Simpan </button> &nbsp;&nbsp;&nbsp;
                                            <a href="" class="btn btn-warning " role="button"> Cancel </a>
                                        </div>
                                    </form><br><br>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="modal fade" id="modal_footer" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
            <div class="modal-dialog modal-edit">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"> Created By </h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Nama: Nadra Meisha Putri</p>
                        <p>Nim: 1202204013</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>