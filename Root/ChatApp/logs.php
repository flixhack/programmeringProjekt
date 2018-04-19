<?php

$con = mysqli_connect('localhost','root','toor','chat');

$result = mysqli_query("SELECT * FROM chat ORDER BY id DESC");

while($extract = mysqli_fetch_array($result)) {
	echo "<span>" . $extract['Sender'] . "</span>: <span>" . $extract['Message'] . "</span><br />";
}
