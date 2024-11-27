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
    <link rel="stylesheet" href="styles/editroom.css" />
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <?php $row = $_GET; $_SESSION['roomtype'] = $row['roomType']; ?>
    <div class="room_addition-form-container" id="room_addition-form-container">
  <h1 class="main_heading">Edit Room Details</h1>
  <p>Enhance Your Hotel Reservation Experience</p>
  <form class="room_addition-form" action="includes/updateroom.php" method="POST">
    <label class="label" for="roomType">Room Type Name</label>
    <input
      type="text"
      name="roomType"
      id="roomType"
      class="input"
      value="<?php echo $row['roomType']; ?>"
      required
    />
    <label class="label" for="price">Price ($)</label>
    <input
      type="number"
      name="price"
      id="price"
      class="input"
      value="<?php echo $row['price']; ?>"
      required
    />
    <label class="label" for="size">Size (ft)</label>
    <input
      type="number"
      name="size"
      id="size"
      class="input"
      value="<?php echo $row['size'];?>"
      required
    />
    <label class="label" for="capacity">Capacity</label>
    <input
      type="text"
      name="capacity"
      id="capacity"
      class="input"
      value="<?php echo $row['capacity']; ?>"
      required
    />
    <label class="label" for="bedtype">Bed Type</label>
    <input
      type="text"
      name="bedtype"
      id="bedtype"
      class="input"
      value="<?php echo $row['bed']; ?>"
      required
    />
    <label class="label" for="facilities">Facilities</label>
    <input
      type="text"
      name="facilities"
      id="facilities"
      class="input"
      value="<?php echo $row['facilities']; ?>"
      required
    />
    <label class="label" for="quantity">Quantity</label>
    <input
      type="number"
      name="quantity"
      id="quantity"
      class="input"
      value="<?php echo $row['quantity']; ?>"
      required
    />
    <label class="label" for="description">Description</label>
    <textarea class="input text-area" name="description" id="description" cols="30" rows="50"><?php echo $row['description']; ?></textarea>
    <input class="input" type="file" accept="image/*" name="image" style="border: none;" required/>
    <input class="submit-btn" type="submit" value="Update">
  </form>
</div>
  </body>
</html>
