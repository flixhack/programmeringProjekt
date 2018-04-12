<?php

$servername = "localhost";
$username = "test";
$password = "test";
$database = "mellowUsers";



$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






$id = 'hey';
$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = 'm';
$preHashPass = $_POST['pw'];
$password = hash('sha1', $preHashPass);




$userCheck = "SELECT * FROM 'mellowMembers' WHERE email = '$email'";
$sql = "INSERT INTO mellowmembers VALUES ('{$email}','{$fname}','{$lname}','{$password}','{$gender}','f')";
if (mysqli_query($conn, $sql)) {
    header('Location: FrontLogin.php');
} else {
    echo "Error: could not connect, try again later: " . mysqli_error($conn);
}

mysqli_close($conn);





 ?>
