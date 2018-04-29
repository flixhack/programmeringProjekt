<?php
include '../Headernl.php';

$email2 = $_POST['Email']; /*Sets a variable with the text from Email input*/
$email = strtolower($email2); /*Sets the email to be all lowercase*/
$preHashPass = $_POST['Password']; /*Sets a variable with the text from Password input*/
$passwordLogin = hash('sha1', $preHashPass); /*Hashes the password*/
$loginCheck="SELECT * FROM mellowMembers WHERE Email = '{$email}' AND Password = '{$passwordLogin}'"; /*Making an sql-query that search for an matching email and hashed password*/

$rs = mysqli_query($conn, $loginCheck); /*Connect to our database and runs the sql-query*/

$data = mysqli_fetch_array($rs);

if ($rs->num_rows != 0) { /*Checks if database returns a row or not*/
  $_SESSION["loggedIn"] = $data['ID']; //Sets session variable loggedIn to be equal you ID from database
  header('Location: ../Front+logo+icon/webCore.php'); //Redirects you to the homepage
} else {
    $_SESSION["loggedIn"] = "0"; //Sets session variable to be equal 0
    print '<script type="text/javascript">alert("Incorrect email or password"); window.location = "FrontLogin.php"; </script>';//Makes a javascript prompt that says incorrect email or password
}
 ?>
