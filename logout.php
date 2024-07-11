<?php
include "./connection.php";
include "./session_check.php";

$username = $_SESSION['username'];

$update = mysqli_query($conn, "UPDATE users SET `live_player` = '0' WHERE `username` = '$username'");

session_destroy();
header("Location: index.php");
?>


