<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
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
    <link rel="stylesheet" href="styles/styles.css" />
  </head>
  <body>
    <div class="background-image"></div>
    <header>
      <nav class="top-nav">
        <a class="link" href="index.php"
          ><img class="logo" src="img/grandroyale-logo-white.png" alt="logo"
        /></a>
        <button class="btn menu-btn" id="menu-btn" onclick=popupmenu()>
          <img class="icon" src="img/menu_icon.png" alt="menu_icon" />
        </button>
        <ul class="top-nav-list">
          <li class="list-item"><a class="highlight" href="index.php">Home</a></li>
          <li class="list-item"><a href="rooms.php">Rooms</a></li>
          <li class="list-item"><a href="careers.php">Careers</a></li>
          <li class="list-item"><a href="facilities.php">Facilities</a></li>
          <li class="list-item"><a href="about.php">About Us</a></li>
          <li class="list-item"><a href="contact.php">Contact</a></li>
          <?php if (isset($_SESSION['username'])) {
            include 'includes/profile.inc.php';
          }
          else {
            include 'includes/signupandlogin.inc.php';
          }
          ?>
        </ul>
      </nav>
      <nav class="mobile-nav" id="mobile-nav">
        <button onclick=popupmenu() class="btn"><img class="icon" src="img/close-icon.jpg" alt="close-icon"></button>
      <ul class="mobile-nav-list">
        <?php if (isset($_SESSION['username'])) {
          echo '<li class="list-item"><a class="profile-container" href="userprofile.php"><img class="profile" src="img/ProfileUser-black.png" alt="ProfileUser">';
          echo getUsername($conn, $_SESSION['username']);
          echo '</a></li>';
        }
        else {
          echo '<li class="list-item f-btn"><a href=login.php>Login</a></li>';
          echo '<li class="list-item f-btn"><a class=signup-btn href=signup.php>Sign up</a></li>';
        }
        ?>
        <li class="list-item"><a class="highlight" href="index.php">Home</a></li>
        <li class="list-item"><a href="rooms.php">Rooms</a></li>
        <li class="list-item"><a href="careers.php">Careers</a></li>
        <li class="list-item"><a href="facilities.php">Facilities</a></li>
        <li class="list-item"><a href="about.php">About Us</a></li>
        <li class="list-item"><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
    </header>
    <section class="hero-section">
      <div class="canvas"></div>
      <div class="container">
        <div class="hero__content">
          <div class="hero__text">
            <p class="hero__body">
              ENJOY YOUR WONDERFUL HOLIDAYS WITH A GREAT LUXURY EXPERIENCE!
            </p>
            <h1 class="hero__heading">Most Relaxing Place</h1>
            <a class="rooms-link" href="rooms.php">Book Now</a>
          </div>
        </div>
      </div>
    </section>
    <section class="aboutus__section">
      <div class="container">
        <div class="aboutus__content">
          <div class="aboutus__text">
            <span class="aboutus__title">ABOUT US</span>
            <h1 class="aboutus__heading">The Grand Royale Luxury Hotel</h1>
            <p class="aboutus__body p1">
              Welcome to our hotel! We are a premier destination for travelers
              looking for luxury, comfort, and exceptional service. Our hotel is
              conveniently located in the heart of the city, providing easy
              access to the most popular tourist attractions, shopping centers,
              and business districts.
            </p>
            <p class="aboutus__body p2">
              So when it comes to booking the perfect hotel, vacation rental,
              resort, apartment, guest house, or tree house, we’ve got you
              covered.
            </p>
            <a class="aboutus__link" href="About.php">READ MORE</a>
          </div>
          <div class="aboutus__images">
            <div class="image__container">
              <img
                class="aboutus__image"
                src="img/1.jpg"
                alt="aboutus__image"
              />
            </div>
            <div class="image__container">
              <img
                class="aboutus__image"
                src="img/2.jpg"
                alt="aboutus__image"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="services__section">
      <div class="container">
        <span class="WhatWeDo__text">WHAT WE DO</span>
        <h3 class="main__services__heading">Discover Our Services</h3>
        <div class="services__grid">
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/car-parking.png"
              alt="car-parking-icon"
            />
            <h4 class="service__heading">Car Parking</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/cattering.png"
              alt="cattering-icon"
            />
            <h4 class="service__heading">Catering Service</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/baby-sitting.jpg"
              alt="baby-sitting-icon"
            />
            <h4 class="service__heading">Babysitting</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/laundry.webp"
              alt="laundry-icon"
            />
            <h4 class="service__heading">Laundry</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img
              class="icon-medium"
              src="img/hire-driver.png"
              alt="hire-driver-icon"
            />
            <h4 class="service__heading">Hire Driver</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
          <div class="grid__item">
            <img class="icon-medium" src="img/bar-icon.png" alt="bar-icon" />
            <h4 class="service__heading">Bar & Drink</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
              eiusmod tempor incididunt ut labore et dolore magna.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="room_type__section"> 
        <span class="WhatWeDo__text">OUR ROOMS</span>
        <h3 class="room-type__heading">Featured Rooms</h3>
        <div class="rooms__grid">
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/premium-room.jpg" alt="room-1" />
            </div>
            <div class="room__description">
              <h3 class="room-type-heading">Premium Room</h3>
              <p class="room-type-text">
              Relaxing room with a queen-size bed, private balcony, and mesmerizing views of the ocean.
              </p>
              <span class="WhatWeDo__text">$100 / NIGHT</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/room-2.jpg.webp" alt="room-1" />
            </div>
            <div class="room__description">
              <h3 class="room-type-heading">Family Room</h3>
              <p class="room-type-text">
              Spacious suite with a king-size bed, separate living area, and a private balcony showcasing stunning city views..
              </p>
              <span class="WhatWeDo__text">$250 / NIGHT</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/room-3.jpg.webp" alt="room-1" />
            </div>
            <div class="room__description">
              <h3 class="room-type-heading">Deluxe Room</h3>
              <p class="room-type-text">
              Comfortable room with a combination of a king-size bed and twin beds, perfect for families. Cozy sitting area and a private bathroom.
              </p>
              <span class="WhatWeDo__text">$300 / NIGHT</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
          <div class="grid__item">
            <div class="room-img-container">
              <img class="room-img" src="img/room-1.jpg.webp" alt="room-1" />
            </div class="room__description">
            <div>
              <h3 class="room-type-heading">Suite Room</h3>
              <p class="room-type-text">
              Functional studio with a king-size bed, separate living area, and a well-equipped kitchenette for added convenience.
              </p>
              <span class="WhatWeDo__text">$450 / NIGHT</span>
              <a class="booknow-link" href="rooms.php">BOOK NOW</a>
            </div>
          </div>
        </div>
    </section>
    <section class="testimonials__section">
      <div class="container">
        <span class="WhatWeDo__text">TESTIMONIALS</span>
        <h3 class="testimonials__section__heading">What Customers Say?</h3>
        <div class="feedback-grid">
          <div class="feedback">
            <p class="comment">"This Hotel was absolutely fantastic!
              The staff was incredibly welcoming and attentive, making us feel right at home.
              The rooms were spacious, clean, and beautifully decorated."
            </p>
            <p class="customer_name">- John and Sarah Thompson</p>
          </div>
          <div class="feedback">
            <p class="comment">"I can't say enough good things about our experience at this Hotel.
              From the moment we checked in until the moment we left, the staff went above and
              beyond to ensure our comfort and satisfaction."
            </p>
            <p class="customer_name">- David and Emily Johnson</p>
          </div>
          <div class="feedback">
            <p class="comment">"This Hotel exceeded all our expectations. The attention to detail and
              the level of service were outstanding. The rooms were spacious and beautifully
              designed, with luxurious amenities."
            </p>
            <p class="customer_name">- Michael and Jessica Davis</p>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer__section">
      <div class="footer__content">
        <div class="container">
          <div class="footer__description">
            <div class="about__block">
              <img class="logo" src="img/grandroyale-logo-white.png" alt="logo" />
              <p>
              Discover our hotel's offerings and amenities, 
              browse our comfortable rooms and suites.
              </p>
            </div>
            <div class="contactus__block">
              <span class="contact__title">CONTACT US</span>
              <ul class="footer__contact-list">
                <li>(12) 365 63240</li>
                <li>TheGrandRoyale@gmail.com</li>
                <li>The Grand Royale Hotel 123 Main Street Cityville, State 12345 Colombo</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright__content">
        <div class="container">
          <div class="copyright__option">
            <ul class="copyright__option-list">
              <li><a href="contact.php">Contact</a></li>
              <li><a href="#">Terms of use</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <script src="js/mobilenav.js"></script>
  </body>
</html>
