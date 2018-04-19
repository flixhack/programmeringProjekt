<?php
$servername = "db";
$username = "root";
$password = "Dn91ND1aMw3ZkuENdC1j1J8F";
$database = "chatApp";


$conn = mysqli_connect($servername, $root, $password, $database);

$query ="SELECT * FROM beskeder ORDER BY id DESC";

$result1 = mysqli_query($conn, $query);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['sender'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
