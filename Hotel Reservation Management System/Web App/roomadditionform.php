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
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/roomadditionform.css" />
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="room_addition-form-container" id="room_addition-form-container">
  <button onclick="popupreservationform()" class="close-btn">
  <img class="close-image" src="img/close-icon.jpg" alt="close-icon">
</button>
  <h1 class="main_heading">Room Addition</h1>
  <p>Enhance Your Hotel Reservation Experience</p>
  <form class="room_addition-form" action="" method="POST">
    <label class="label" for="roomType">Room Type Name</label>
    <input
      type="text"
      name="roomType"
      id="roomType"
      class="input"
      required
    />
    <label class="label" for="price">Price ($)</label>
    <input
      type="number"
      name="price"
      id="price"
      class="input"
      required
    />
    <label class="label" for="size">Size (ft)</label>
    <input
      type="number"
      name="size"
      id="size"
      class="input"
      required
    />
    <label class="label" for="capacity">Capacity</label>
    <input
      type="text"
      name="capacity"
      id="capacity"
      class="input"
      required
    />
    <label class="label" for="bedtype">Bed Type</label>
    <input
      type="text"
      name="bedtype"
      id="bedtype"
      class="input"
      required
    />
    <label class="label" for="facilities">Facilities</label>
    <input
      type="text"
      name="facilities"
      id="facilities"
      class="input"
      required
    />
    <label class="label" for="quantity">Quantity</label>
    <input
      type="number"
      name="quantity"
      id="quantity"
      class="input"
      required
    />
    <label class="label" for="Description">Description</label>
    <textarea class="input text-area" name="Description" id="Description" cols="30" rows="10"></textarea>
    <input class="input" type="file" accept="image/*" name="image" style="border: none;"/>
    <input class="submit-btn" type="submit" value="Add Room">
  </form>
</div>
<script src="js/addroomform.js"></script>
  </body>
</html>
