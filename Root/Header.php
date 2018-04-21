<?php
session_start();
include 'Headernl.php';
if ($_SESSION["loggedIn"] != "1") {
  header("location: /RegisterAndLogin/FrontLogin.php");
}
