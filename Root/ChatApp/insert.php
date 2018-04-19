<?php


$servername = "db";
$username = "root";
$password = "Dn91ND1aMw3ZkuENdC1j1J8F";
$database = "chatApp";

$sender = $_REQUEST['sender'];
$msg = $_REQUEST['msg'];

$conn = mysqli_connect($servername, $username, $password, $database);

$query2 = "INSERT INTO beskeder (sender, msg) VALUES ('{$sender}', '{$msg}')";
mysqli_query($conn, $query2);

$query="SELECT * FROM beskeder ORDER BY id DESC";

$result1 = mysqli_query($conn, $query);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['sender'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
?>
