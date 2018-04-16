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

/**$sql ="SELECT * FROM 'mellowMembers' WHERE Email='felix@mathidassen.dk'";
$result=mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);
if ($data[0]>1) {
  echo "user found";
} else {
  echo "User not found";
}
*/
mysqli_close($conn);



 ?>
