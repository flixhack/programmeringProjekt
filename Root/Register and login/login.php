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


$email2 = $_POST['Email'];
$email = strtolower($email2);
$preHashPass = $_POST['Password'];
$passwordLogin = hash('sha1', $preHashPass);



$loginCheck="SELECT * FROM mellowMembers WHERE Email = '{$email}' AND Password = '{$passwordLogin}'";
$rs = mysqli_query($conn,$loginCheck);
if ($rs->num_rows != 0) {
  
  header('Location: ../Front+logo+icon/webcore.php');
} else {
  echo "Wrong password or email";
}


 ?>
