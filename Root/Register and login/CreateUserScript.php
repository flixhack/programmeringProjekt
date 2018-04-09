<?php

$servername = "localhost";
$username = "test";
$password = "test";
$database = "mellowUsers"


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$preHashPass=$_post['pw'];


// getting inputs
$id=$_post[]
$email=$_post['$email'];
$fname=$_post['fname'];
$lname=$_post['$lname'];
$gender=
$password=



$sql = "INSER INTO mellowMembers VALUES('')";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);





 ?>
