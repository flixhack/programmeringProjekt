<?php
session_start();

$servername = "db";
$username = "root";
$password = "Dn91ND1aMw3ZkuENdC1j1J8F";
$database = "MellowUsers";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SESSION["loggedIn"] != "1"); {
  print '<script type="text/javascript">alert("You have been logged out"); window.location = "../RegisterAndLogin/FrontLogin.php"; </script>';
}
