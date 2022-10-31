<?php 
  $namamobil= isset($_POST['mobil']) ? $_POST['mobil'] : " ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>BOOKING EAD RENT</title>
</head>
<body>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container">
    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav  mx-auto">
        <li class="nav-item">
          <a class="nav-link" href="Meisha_Home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Meisha_Booking.php">Booking</a>
        </li>  
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
  <h6 class="text-center p-1 text-black">Rent Your Car Now!</h6>
</div>

<div class="container mb-6">
  <div class="card mt-3">
    <div class="row">
      <div class="col-lg-6 d-flex justify-content-center align-items-center">
        <div>
          <img src=" <?php
          if($namamobil == "Toyota Raize"){
            echo "raize.jpg";
          }
          else if ($namamobil == "Toyota Veloz"){
            echo "veloz.jpg";
          }
          else{
            echo "yaris.jpg";
          }
          ?>"class="img-fluid rounded">
        </div>
      </div>

      <div class="c0l-md-6">
        <form class="m-4" method="POST" action="Meisha_MyBooking.php" >
          <div class="mb-3">
            <label for="nameinput" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="nameinput" readonly="readonly" value="Meisha_1202204013">
          </div>
          
          <div class="mb-3 ">
            <label for="dateinput" class="form-label">Book Date</label>
            <input type="date" class="form-control" name="date" id="dateinput">
          </div>
          
          <div class="mb-3 ">
            <label for="time" class="form-label">Start Time</label>
            <input type="time" class="form-control" name="checkin" id="time">
          </div>
          
          <div class="mb-3 ">
            <label for="duration" class="form-label">Duration (Days)</label>
            <input type="number" class="form-control" name="duration" id="duration">
          </div>
          
          <div class="mb-3 ">
            <label for="selection" class="form-label">Type Car</label>
            <select name="mobil" class="form-select" aria-label="Default select example">
              <option selected disabled>Choose Type...</option>
              <option <?php if($namamobil == "Toyota Raize"){echo "selected";}?> value="Toyota Raize">Toyota Raize</option>
              <option <?php if($namamobil == "Toyota Veloz"){echo "selected";}?> value="Toyota Veloz">Toyota Veloz</option>
              <option <?php if($namamobil == "Toyota Yaris"){echo "selected";}?> value="Toyota Yaris">Toyota Yaris</option>
            </select>
          </div>
          
          <div class="mb-3 ">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="number" class="form-control" name="phone" id="phone">
          </div>
          
          <div class="mb-3">
            <label for="service" class="form-label">Add Service</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="service[]" value="Health Protocol" id="Health Protocol">
              <label class="form-check-label" for="Health Protocol">
                Health Protocol/RP25.000,00
              </label>
            </div>
  
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="service[]" value="Driver" id="Driver" >
              <label class="form-check-label" for="Driver">
                Driver/Rp100.000,00
              </label>
            </div>
            
            <div class="form-check">
              <input class="form-check-input" type="checkbox" name="service[]" value="Fuel Filled" id="Fuel Filled" >
              <label class="form-check-label" for="Fuel Filled">
                Fuel Filled/Rp250.000,00
              </label>
            </div>
          </div>
          
          <div class="d-grid gap-2 mb-3">
            <button type="submit" name="submit" class="btn btn-primary ">Book</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<br><br>

<footer class="card-footer text-center bg-light">
  Created By Meisha_1202204013   
</footer>
</body>
</html>