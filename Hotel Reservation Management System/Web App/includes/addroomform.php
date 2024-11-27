<div class="room_addition-form-container" id="room_addition-form-container">
  <button onclick="popupform()" class="close-btn">
  <img class="close-image" src="img/close-icon.jpg" alt="close-icon">
</button>
  <h1 class="main_heading">Room Addition</h1>
  <p>Enhance Your Hotel Reservation Experience</p>
  <form class="room_addition-form" action="includes/addrooms.php" method="POST">
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
    <label class="label" for="description">Description</label>
    <textarea class="input text-area" name="description" id="description" cols="30" rows="50"></textarea>
    <input class="input" type="file" accept="image/*" name="image" style="border: none;" required/>
    <input class="submit-btn" type="submit" value="Add Room">
  </form>
</div>
<script src="js/addroomform.js"></script>