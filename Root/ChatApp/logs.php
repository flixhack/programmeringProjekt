<?php
include '../Header.php'; //includes Header.php

$conn = mysqli_connect($servername, $username, $password, $database);

$query="SELECT * FROM beskeder ORDER BY id DESC"; // Makes sql query that selects all messages from our database

$result1 = mysqli_query($conn, $query); //Connects to database and runs the sql query above

while($extract = mysqli_fetch_array($result1)) { // while loop that connects to database and runs the sql query above
	echo "<span>" . $extract['sender'] . "</span>: <span>" . $extract['msg'] . "</span><br />"; //Displays the messages on the chat page
}
