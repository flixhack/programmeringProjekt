<?php
session_start();

$servername = "db";
$username = "root";
$password = "Dn91ND1aMw3ZkuENdC1j1J8F";
$database = "Mellow";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
