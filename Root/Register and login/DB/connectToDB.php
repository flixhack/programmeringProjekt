<?php
$servername = "localhost";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>
