<?php
require_once 'config.php';
require_once 'functions.php';

session_start();

$username = $_SESSION['username'];
$roomId = $_SESSION['roomId'];
$review = $_POST['review'];
$date = date('dS M Y');

if ($review) {
    $sql = "INSERT INTO reviews (roomId, username, review, date) VALUES (?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param("ssss", $roomId, $username, $review, $date);

    $stmt->execute();
}

header("Location: {$_SERVER['HTTP_REFERER']}");

