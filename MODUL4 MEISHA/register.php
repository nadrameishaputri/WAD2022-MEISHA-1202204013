<?php
session_start();
include_once("connector.php")
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <section id="home" class="home"> </section>
    <?php if (isset($_SESSION['message'])) :  ?>
        <div class="alert alert-danger alert-dismissible fade show fade in" role="alert">
            <?= $_SESSION['message']; ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php
        unset($_SESSION['message']);
    endif;
    ?>

    <section id="home" class="home">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: white;">
            <div class="row row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="r.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-2 pt-10 ">
                    <div class="row justify-content-center">
                        <div class="container">
                            <h2>Register</h2><br>
                        </div>

                        <div class="col-md-6">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="" id="email" aria-describedby="namaLengkap">
                                </div>

                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" class="form-control" placeholder="" id="nama" aria-describedby="namaLengkap">
                                </div>

                                <div class="mb-3">
                                    <label for="no_hp" class="form-label">Nomor Handphone</label>
                                    <input type="number" name="no_hp" class="form-control" placeholder="" id="no_hp" aria-describedby="namaLengkap">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" placeholder="">
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirm" class="form-label">Konfirmasi Sandi</label>
                                    <input type="password" class="form-control" id="password_confirm" placeholder="">
                                </div>

                                <div class="mb-3">
                                    <a button type="submit" class="btn btn-primary" href="login.php" name="register"> Daftar </a>
                                    <p class="mt-3"> Anda sudah punya akun? <a href="login.php"> Login </a></p>
                                </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            </form>
                        </div>
                    </div>
                </div>
</body>

</html>