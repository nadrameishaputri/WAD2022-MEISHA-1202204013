<?php
session_start();

include_once("connector.php");
?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <section id="home" class="home">
        <div class="px-4 py-5 px-md-5 text-center text-lg-start" style="background-color: white;">
            <div class="row row gx-lg-5 align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="r.jpg" class=" w-100" alt="...">
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="row text-center"> -->
                <div class="col mb-3 pt-10 mx-auto ">
                    <div class="row justify-content-center">
                        <div class="container">
                            <br><br><br>
                            <h2>Login</h2><br>
                        </div>

                        <div class="col-md-6">
                            <form action="" method="POST">
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Email</label>
                                    <input type="text" name="nama" class="form-control" placeholder="" id="Enter Full Name" aria-describedby="namaLengkap">
                                </div>

                                <div class="mb-3">
                                    <label for="phone" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                    <!-- <input type="tel" name="phone" class="form-control" id="Enter Phone" placeholder="Enter Phone" aria-describedby="phoneNum"> -->
                                </div>

                                <div class="mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>

                                <div class="mb-3">
                                    <a a button type="submit" class="btn btn-primary" href="home2.php" name="register"> Login </a>
                                    <p class="mt-3"> Anda belum punya akun? <a href="register.php"> Daftar </a></p>
                                </div>

                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            </form>
                        </div>
                    </div>
                </div>
</body>

</html>