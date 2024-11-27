<?php
require_once 'config.php';
require_once 'functions.php';

$roomType = $_POST['roomType'];
$price = $_POST['price'];
$size = $_POST['size'];
$capacity = $_POST['capacity'];
$bed = $_POST['bedtype'];
$facilities = $_POST['facilities'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$roomImage = $_POST['image'];

if (RoomTypeExists($conn, $roomType) === false) {
    $sql = "INSERT INTO rooms (roomType, price, size, capacity, bed, facilities, quantity, description, roomImage)
            VALUES ('$roomType', '$price', '$size', '$capacity', '$bed', '$facilities', '$quantity', '$description', '$roomImage');";

    $conn->query($sql);
    header("Location: ../roommanagement.php");
}
else {
    header("Location: ../roommanagement.php?error=roomtypealreadyexists");
}


?>