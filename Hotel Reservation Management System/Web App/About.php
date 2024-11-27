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
   <link rel="stylesheet" href="styles/About.css">
   <link rel="stylesheet" href="styles/header.css" />
   <link rel="stylesheet" href="styles/footer.css" />
    <script src="https://kit.fontawesome.com/7c40190028.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include 'includes/header.php' ?>
<div class="maine-about-image">
<h1>ABOUT US</h1>
</div>

<div class="about-main">
    <div class="about-details">
       <h1>A Luxuries Hotel with Nature</h1>
       <p>The story of Grand Royal Hotel which opened its doors in 1984 is a
         splendid tale of continual improvement of product and the highest<br> standards of quality in hospitality.<br><br>
        Having embraced over 3 decades of expertise in hospitality our vision and<br> beliefs are firmly grounded in extending a true personalized service to all <br>our guests, laced with an unforgettable luxury hotel experience.<br><br>
        The brand has enticed many elite personalities from around the world<br>including heads of government, prime ministers of leading nations,<br> royalty, well known sports and entertainment personalities and many more.
         </p>
        
    </div>
    
    <div class="container1">
       <div class="item-img1"><img src="img/1.jpg" alt=""></div>
       <div class="item-img2"><img src="img/2.jpg" alt=""></div>
    </div>
</div>
<div class="divider"></div>



<div class="title">
    <h2>Facilities</h2>
    <div class="underline"></div>
</div>
<section class="features">
    <div class="icon1">
        <img src="img/air-conditioner.png" alt="">
         <h2>Air Conditioner</h2>
    </div>
    <div class="icon1">
        <img src="img/bar-counter.png" alt="">
        <h2>Bar</h2>
    </div>
    <div class="icon1">
        <img src="img/bathtub.png" alt="">
        <h2>Hot Water</h2>
    </div>
    <div class="icon1">
        <img src="img/clerk.png" alt="">
        <h2>Air Conditioner</h2>
    </div>
    <div class="icon1">
        <img src="img/parking.png" alt="">
        <h2>Car Park</h2>
    </div>
    <div class="icon1">
        <img src="img/swimming.png" alt="">
        <h2>Swimming Pool</h2>
    </div>
    <div class="icon1">
        <img src="img/shield.png" alt="">
        <h2>Safety</h2>
    </div>
    <div class="icon1">
        <img src="img/emergency-exit.png" alt="">
        <h2>Fire Exit</h2>
    </div>
    


    <div class="offer-gallery-title title">
        <h2>We Offer to Our Guest</h2>
        <div class="underline"></div>

    </div>
    <div class="offer">
        <div class="offer-img">
            <div class="offer-img-div">
                <img src="img/offer 2.jpg" alt="">
                <h2>Free Drinks</h2>
            </div>
            <div class="offer-overlay">
                <div class="offer-overlay-txt">
                    <h2>Free Drinkst</h2>
                    <p>That's a wonderful gesture to offer a free welcome drink to your guests! Providing a complimentary beverage upon arrival is a great way to make your guests feel valued and appreciated. It sets a positive tone for their stay and helps create a warm and hospitable atmosphere.</p>
                </div>
            </div>
        </div>
        <div class="offer-img">
            <div class="offer-img-div">
                <img src="img/offer1.jpg">
                <h2>Free Breakfast</h2>
            </div>
            <div class="offer-overlay">
                <div class="offer-overlay-txt">
                    <h2>Free Breakfast</h2>
                    <p>Offering a complimentary breakfast to your guests is a fantastic way to enhance their stay and provide added value to their experience. Providing a free breakfast helps guests start their day off right and ensures that they have a convenient and satisfying meal before venturing out.</p>
                </div>
            </div>
        </div>
        <div class="offer-img">
            <div class="offer-img-div">
                <img src="img/offer 3.jpg" alt="">
                <h2>Delicious Dinner</h2>
            </div>
            <div class="offer-overlay">
                <div class="offer-overlay-txt">
                    <h2>Delicious Dinner</h2>
                    <p> Offer a diverse range of options to cater to different tastes and dietary preferences. Include vegetarian, vegan, gluten-free, and other special dietary options to accommodate a variety of guests.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <?php include 'includes/footer.php'; ?>
</body>
</html>