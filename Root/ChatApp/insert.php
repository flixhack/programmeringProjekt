<?php
include '../Header.php';

$ID = $_SESSION["loggedIn"];

$qy ="SELECT * FROM mellowMembers WHERE ID = $ID";
$rs = mysqli_query($conn, $qy);
$data = mysqli_fetch_array($rs);
$sender = $data['fname'];


$msg = $_REQUEST['msg'];



$query2 = "INSERT INTO beskeder (sender, msg) VALUES ('{$sender}', '{$msg}')";
mysqli_query($conn, $query2);


$query="SELECT * FROM beskeder ORDER BY id DESC";

$result1 = mysqli_query($conn, $query);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['sender'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
?>
