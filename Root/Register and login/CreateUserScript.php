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
$preHashPassC = $_POST['cpw'];
$password = hash('sha1', $preHashPass);
$passwordC = hash('sha1', $preHashPassC);


$sql = "INSERT INTO mellowmembers VALUES ('{$email}','{$fname}','{$lname}','{$password}','{$gender}','f')";
$check="SELECT * FROM mellowMembers WHERE Email = 'felix@mathiassen.dk'";
$rs = mysqli_query($conn,$check);
if ($password == $passwordC) {
  if($rs->num_rows == 0){
    if (mysqli_query($conn, $sql)) {
        header('Location: FrontLogin.php');
      } else {
        echo "Error: could not connect, try again later: " . mysqli_error($conn);
}    } else {
        echo "user already exist";
} } else {
      echo "passwords are not identical";
}
    

mysqli_close($conn);





 ?>
