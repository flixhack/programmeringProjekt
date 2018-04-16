<?php
$servername = "localhost";
$username = "test";
$password = "test";
$database = "mellowUsers";



$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$check="SELECT * FROM mellowMembers WHERE Email = 'felix@mathiassen.dk'";
$rs = mysqli_query($conn,$check);
if($rs->num_rows != 0) {
    echo "User Already in Exists<br/>";
}else {
  echo "user not found";
}


mysqli_close($conn);



 ?>
