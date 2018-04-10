<?php

$servername = "localhost";
$username = "test";
$password = "test";
$database = "mellowUsers";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}





// getting inputs
$id = $_post[]
$email = $_post['email'];
$fname = $_post['fname'];
$lname = $_post['lname'];
$gender = 'm';
$preHashPass = $_post['pw'];
$password = hash('sha1', $preHashPass);


$userCheck = "SELECT * FROM 'mellowMembers' WHERE email = '$email'";
$sql = "INSERT INTO `mellowmembers`(`Email`, `Fname`, `Lname`, `Password`, `gender`, `God`) VALUES ('$email','$fname','$lname','$password','$gender','f')";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);





 ?>
