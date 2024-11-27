<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

$reservationid = $_SESSION['reservation_id'];
$roomtype = $_POST['roomtype'];
$roomtype =  str_replace('_', ' ', $roomtype);
$roomsno = $_POST['roomsno'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$specialrequests = $_POST['specialrequests'];

$sql = "UPDATE reservations SET room_type='$roomtype', number_of_rooms='$roomsno',
        checkin='$checkin', checkout='$checkout', special_requests='$specialrequests',
        status='Pending' WHERE reservation_id='$reservationid'";

    $conn->query($sql);
    header("Location: ../profilereservations.php");

?>