<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>The Grand Royale Hotel</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />
    <link rel="stylesheet" href="styles/facilities.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
</head>
<body>
<?php include 'includes/header.php' ?>
    <div class="center">
        <h1>The Grand Royal Hotel...</h1>
        <h2>---The Best Hotel Experience---</h2>
    </div>
    <div class="slideshow-container">
        <div class="slide">
          <img src="img/img14.jpg" alt="Image 1">
        </div>
        <div class="slide">
          <img src="img/img15.jpg" alt="Image 2">
        </div>
        <div class="slide">
          <img src="img/img12.jpg" alt="Image 3">
        </div>
        <div class="slide">
          <img src="img/img13.jpg" alt="Image 4">
        </div>
        <div class="slide">
          <img src="img/img16.jpg" alt="Image 5">
        </div>
        <div class="slide">
          <img src="img/img17.jpeg" alt="Image 5">
         </div>
         <div class="slide">
          <img src="img/img18.jpg" alt="Image 5">
        </div>
        <div class="slide">
          <img src="img/img19.jpg" alt="Image 5">
         </div>
         <div class="slide">
          <img src="img/img20.jpg" alt="Image 5">
        </div>
        <div class="slide">
          <img src="img/img21.jpeg" alt="Image 5">
        </div>
      </div>
      <div class="menu">
        <h1 class="title">....Discover Our Facilities....</h1>
        <ul class="colour">
          <li class = "c2">Water Park.....</li>
          <li>Mini Bar.....</li>
          <li class = "c2">Fitness Center.....</li>
          <li>Motor Boat riding.....</li>
          <li class = "c2">Jogging Path.....</li>
          <li>Large Area Car Park.....</li>
          <li class = "c2">High Luxary Film Halls.....</li>
        </ul>  
        <ul class="colour1">
          <li>Swimming Pool.....</li>
          <li class = "c2">Large Area Buffet.....</li>
          <li>Comfortable Rooms.....</li>
          <li class = "c2">Open & Outdoor Resturent.....</li>
          <li>Luxary Spa.....</li> 
          <li class = "c2">Luxary Wedding Halls.....</li> 
          <li>Indoor DJ Party.....</li>   
        </ul> 
    </div>
    <div class="box-cointainer">
        <div class="box1"></div>
        <div class="box2"></div>
        <div class="box3"></div>
        <div class="box4"></div>
        <div class="box5"></div>
    </div>
    <div class="box-content">
        <div class="box6"></div>
        <div class="box8">The Grand Royal Hotel</div>  
        <div class="box10"></div>
    </div>
    <div class="box-content1">
        <div class="box11"></div>
        <div class="box12"></div>
        <div class="box13"></div>
        <div class="box14"></div>
        <div class="box15"></div>
    </div>
    <?php include 'includes/footer.php'; ?>
      <script src="js/facilities.js"></script>
</body>
</html>