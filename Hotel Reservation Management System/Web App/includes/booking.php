<?php
require_once 'config.php';
require_once 'functions.php';
session_start();

if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        $roomtype = $_SESSION['roomType'];
        $roomsno = $_POST['roomsno'];
        $checkin = $_POST['checkin'];
        $checkout = $_POST['checkout'];
        $specialrequests = $_POST['specialrequests'];


        $sql = "INSERT INTO reservations (username, room_type, number_of_rooms, checkin, checkout, special_requests)
        VALUES ('$username', '$roomtype', '$roomsno', '$checkin', '$checkout', '$specialrequests')";

        $conn->query($sql);
        header("Location: {$_SERVER['HTTP_REFERER']}");
}
else {
        header("Location: login.php");
}

?>