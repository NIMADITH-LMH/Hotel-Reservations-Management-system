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
    <link rel="stylesheet" href="styles/contact.css">
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/footer.css" />
</head>
<body>
    <?php include 'includes/header.php' ?>
    <div class="contactUs">
        <div class="title">
           <h2>Get in Touch</h2>
           </div>
           <div class="box">
               <!--Form-->
               <div class="contact form">
                   <h3>Send a Message</h3>
                   <form action="includes/insertcontactdetails.php" method="POST">
                    <div class="formBox">
                     <div class="row50">
                      <div class="inputBox">
                       <span>First Name</span>
                       <input type="text" name="First_Name" placeholder="Jhon">
                   </div>
                   <div class="inputBox">
                    <span>Last Name</span>
                    <input type="text" name="Last_Name" placeholder="Doe">
                   </div>
                 </div>
                 <div class="row50">
                    <div class="inputBox">
                     <span>Email</span>
                     <input type="text" name="Email" placeholder="johndoe@gmail.com">
                 </div>
                 <div class="inputBox">
                  <span>Mobile</span>
                  <input type="text" name="Mobile" placeholder="+9411 855 6775">
                 </div>
                </div>

                <div class="row100">
                    <div class="inputBox">
                     <span>Message</span>
                     <textarea name="Message" placeholder="Write your message here ..."></textarea>
                  </div>
                 </div>

                 <div class="row100">
                    <div class="inputBox">
                     <input type="submit" value="send">
                 </div>
                 </div>
                </div> 
               </form>
              </div>
              <!--info Box-->
               <div class="contact info">
                 <h3>Contact Info</h3>
                  <div class="infoBox">
                    <div>
                        <span><ion-icon name="location-outline"></ion-icon></span>
                        <p>Grand Royal Hotel, Colombo 5 <br>SRI LANKA</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail-outline"></ion-icon></span>
                        <a href="mailto:grandroyal@gmail.com">grandroyal@email.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+94118556775">+9411 855 6775</a>
                    </div>
                    <ul class="sci">
                        <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        
                  </div>
            </div>
            <!--Map-->
            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3960.
                6558961358205!2d79.84302699999999!3d6.9316682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13
                .1!2m1!1scolombo%205!5e0!3m2!1sen!2slk!4v1685610894366!5m2!1sen!2slk" style="border:0;" allowfullscreen="" 
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
            </div>
        </div>
     </div>
     <?php include 'includes/footer.php'; ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>