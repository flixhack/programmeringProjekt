<?php
session_start(); //Starts session
include 'Headernl.php';//includer Headernl.php(database info and connect)
if ($_SESSION["loggedIn"] == "0") { //Checks that your logged in, if not it redirects you to front page
  header("location: /RegisterAndLogin/FrontLogin.php");
}
