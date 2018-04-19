<?php

$uname = $_REQUEST['uname'];
$msg = $_REQUEST['msg'];

$con = mysqli_connect('localhost','root','toor','chatbox');

$query2 = "INSERT INTO logs (username, msg) VALUES ('{$uname}', '{$msg}')";
mysqli_query($con, $query2);

$query="SELECT * FROM logs ORDER BY id DESC";

$result1 = mysqli_query($con, $query);

while($extract = mysqli_fetch_array($result1)) {
	echo "<span>" . $extract['username'] . "</span>: <span>" . $extract['msg'] . "</span><br />";
}
?>
