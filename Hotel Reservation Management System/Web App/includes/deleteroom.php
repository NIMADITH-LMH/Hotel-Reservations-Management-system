<?php
require_once 'config.php';
require_once 'functions.php';

$row = $_GET;
$roomid = $row['roomId'];

$sql = "DELETE FROM rooms WHERE roomid = '$roomid'";

$conn->query($sql);
header("Location: ../roommanagement.php")

?>