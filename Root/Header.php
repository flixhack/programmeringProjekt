<?php
session_start();
include 'Headernl.php';
if ($_SESSION["loggedIn"] == "0") {
  header("location: /RegisterAndLogin/FrontLogin.php");
}
