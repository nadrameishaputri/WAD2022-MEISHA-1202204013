<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>MY BOOKING EAD RENT</title>    

</head>

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

  <?php 
    $name = $_POST['name'];
    $date = $_POST['date'];
    $time = $_POST['checkin'];
    $duration = $_POST['duration'];
    $checkin = date('d/m/Y H:i:s', strtotime($date)) ." ". date('', strtotime($time));
    $checkout = date('d/m/Y H:i:s', strtotime('+'.$duration.'day', strtotime("$checkin")));
    $phone = $_POST['phone'];
    $mobil =$_POST['mobil'];
    $harga_service = 0;
 
    if (isset($_POST['service'])) {
      $service = $_POST['service'];
    }
    else {
      $service = '';
    }

    if($mobil == "Toyota Raize"){
      $jumlah = $duration*200000;
    }else if($mobil == "Toyota Veloz"){
      $jumlah = $duration*300000;
    }else{
      $jumlah = $duration*200000;
    }    
  ?>

<div class="container" style="text-align: center;">
        <div class="m-2">
            <br><p class="m-0" style="font-size:30px">Thank you <?php echo $name; ?> for Reserving</p>
            <p class="m-0" style="font-size:25px">Please double check your reservation detail</p><br>
        </div>
</div>

<div class="container">
  <table class="table table-secondary">
    <tr >
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service</th>
      <th scope="col">Total Price</th>
    </tr>
    
    <tr>
      <td><?php echo rand();?></td>
      <td><?php echo $name;?></td>
      <td><?php echo $checkin;?></td>
      <td><?php echo $checkout;?></td>

      <td> 
        <?php echo $mobil?>
      </td>
      <td><?php echo $phone;?></td>

        <td>
        <?php
        if (!empty($service)) {
          echo '<ul>';
          foreach ($service as $myservice) {
            if ($myservice == "Health Protocol") {
              $harga_service += 25000;
              echo '<li>' . $myservice . '</li>';
            }
            else if($myservice == "Driver") {
              $harga_service += 100000;
              echo '<li>' . $myservice . '</li>';
            }
            else {
              $harga_service += 250000;
              echo '<li>' . $myservice . '</li>';
            }
          }  
          echo '</ul>';
        } else {
          echo 'no service';
        }
        ?>
        </td>

        <td>
            <?php echo 'Rp' .($jumlah+$harga_service)?>
        </td>
    </tr>
</table>
</div>
          
    <br><br>        
    <br><br>
    <br><br>        
    <br><br>
    <br><br>        
    <br><br>
    <br><br>
    <br><br>             

  <footer class="card-footer text-center bg-light">
    Created By Meisha_1202204013   
  </footer> 

</body>
</html>