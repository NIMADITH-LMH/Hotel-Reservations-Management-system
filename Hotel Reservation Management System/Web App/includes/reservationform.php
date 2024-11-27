<div class="reservation-form-container" id="reservation-form-container">
  <button onclick="popupreservationform()" class="close-btn">
  <img class="close-image" src="img/close-icon.jpg" alt="close-icon">
</button>
  <h1 class="booking_heading">Room Booking</h1>
  <p>Experience something new every moment</p>
  <form class="reservation-form" action="includes/booking.php" method="POST">
    <div class="roomtype-section">
      <label class="label" for="roomtype">Room Type:</label>
      <?php echo $row['roomType']."<br>"; $_SESSION['roomType'] = $row['roomType']; ?>
    </div>
    <label class="label" for="roomsno">Number of Rooms:</label>
    <input
      type="number"
      name="roomsno"
      id="roomsno"
      class="input"
      value="1"
      min="1"
      required
    />
    <label class="label" for="checkin">Check-In:</label>
    <input type="date" name="checkin" id="check_indate" class="input" onchange=updatedatefieldsinform() min="<?php echo date("Y-m-d"); ?>" required />
    <label class="label" for="checkout">Check-Out:</label>
    <input type="date" name="checkout" id="check_outdate" class="input" disabled required />
    <label class="label" for="specialrequests">Special Requests:</label>
    <textarea class="input text-area" name="specialrequests" id="specialrequests" cols="30" rows="10"></textarea>
    <input class="submit-btn" type="submit" value="Book Now" />
  </form>
</div>
<script src="js/bookingform.js"></script>
