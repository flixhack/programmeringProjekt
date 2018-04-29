<?php
include '../Header.php'; //includes Header.php

$ID = $_SESSION["loggedIn"]; //Sets your Session id to be ID

$qy ="SELECT * FROM mellowMembers WHERE ID = $ID"; //Makes sql query thats searches our database for a member where id is equal to id
$rs = mysqli_query($conn, $qy); //Connects to database and runs the sql query above
$data = mysqli_fetch_array($rs); //Fetches the row of the person with the specefic id
$sender = $data['fname']; // Sets sender to be equal the name with correct id from database


$msg = $_REQUEST['msg']; //Requesting the text from the input on the chat page (chatApp/Index.php)



$query2 = "INSERT INTO beskeder (sender, msg) VALUES ('{$sender}', '{$msg}')";//Makes sql query that inserts the message and sender in our database
mysqli_query($conn, $query2); //Connects to database and runs the sql query above
