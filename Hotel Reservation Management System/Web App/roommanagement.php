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
    <link rel="stylesheet" href="styles/roommanagement.css" />
    <link rel="stylesheet" href="styles/header.css" />
    <link rel="stylesheet" href="styles/roomadditionform.css" />
  </head>
  <body>
    <?php include 'includes/header.php' ?>
    <?php include 'includes/addroomform.php' ?>
    <div class="profile-component">
      <div class="navigation">
        <div class="profile-image-container"></div>
        <a href="userprofile.php" class="nav-btn">Account</a>
        <a href="profilereservations.php" class="nav-btn">Reservations</a>
        <a href="roommanagement.php" class="nav-btn highlight">Room Management</a>
        <a href="usermanagement.php" class="nav-btn">User Management</a>
        <a href="includes/logout.php" class="nav-btn logout-btn">Logout</a>
      </div>
      <div class="profile-content">
        <div class="room-management">
          <h2 class="main__heading">Room Management</h2>
          <button class="add_room-button" onclick="popupform()">Add a Room</button>
          <table class="rooms_table">
            <tr>
              <th>Room Type</th>
              <th>Size</th>
              <th>Capacity</th>
              <th>Price</th>
              <th>Quantity</th>
              <th class="actions">Actions</th>
            </tr>
            <?php
                $sql = "SELECT * FROM rooms";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                      echo "<tr>";
                      echo "<td>".$row['roomType']."</td>";
                      echo "<td>".$row['size']." ft</td>";
                      echo "<td>".$row['capacity']."</td>";
                      echo "<td>".$row['price']."$</td>";
                      echo "<td>".$row['quantity']."</td>";
                      $queryString = http_build_query($row);
                      echo "<td class=action-buttons id=action-buttons><a href=editroom.php?$queryString; class=btn>Edit</a><a href=includes/deleteroom.php?$queryString; class=btn>Delete</a></td>";
                      echo "</tr>";
                    }
                }
                ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
