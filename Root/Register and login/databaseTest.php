<?php
$servername = "localhost";
$username = "root";
$password = "toor";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql = "INSERT INTO pokedex (Name,Nr,Type,SecType)
 VALUES('test','123','test','test')");

 if (mysqli_query($conn, $sql)) {
     echo "New record created successfully";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }


?>
