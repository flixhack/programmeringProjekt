<?php
include '../Header.php';

$conn = mysqli_connect($servername, $username, $password, $database);

$query ="SELECT * FROM beskeder ORDER BY id DESC";

$result1 = mysqli_query($conn, $query);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['sender'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
