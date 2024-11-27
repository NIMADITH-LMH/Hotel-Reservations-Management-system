<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

$oldroomtype = $_SESSION['roomtype'];

$roomType = $_POST['roomType'];
$price = $_POST['price'];
$size = $_POST['size'];
$capacity = $_POST['capacity'];
$bed = $_POST['bedtype'];
$facilities = $_POST['facilities'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$roomImage = $_POST['image'];

if (RoomTypeExists($conn, $roomType) === false or $oldroomtype === $roomType) {
    $sql = "UPDATE rooms SET roomType='$roomType', price='$price', size='$size',
    capacity='$capacity', bed='$bed', facilities='$facilities', description='$description',
    quantity='$quantity',roomImage='$roomImage' WHERE roomType='$oldroomtype'";

    $conn->query($sql);
    header("Location: ../roommanagement.php");
}
else {
    header("Location: {$_SERVER['HTTP_REFERER']}");
}

?>