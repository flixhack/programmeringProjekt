<?php
include '../Header.php';



$email2 = $_POST['Email']; /*Sets a variable with the text from Email input*/
$email = strtolower($email2); /*Sets the email to be all lowercase*/
$preHashPass = $_POST['Password']; /*Sets a variable with the text from Password input*/
$passwordLogin = hash('sha1', $preHashPass); /*Hashes the password*/


$loginCheck="SELECT * FROM mellowMembers WHERE Email = '{$email}' AND Password = '{$passwordLogin}'"; /*Making an sql-query that search for an matching email and hashed password*/
$rs = mysqli_query($conn, $loginCheck); /*Connect to our database and runs the sql-query*/
if ($rs->num_rows != 0) { /*Checks if database returns a row or not*/
  $_SESSION["loggedIn"] = "1";
  header('Location: ../Front+logo+icon/webcore.php');
} else {
    $_SESSION["loggedIn"] = "0"; ?>
    <script type="text/javascript">
      alert('Incorrect email or password')
    </script>
<?php
}
/*if ($_SESSION["loggedIn"] == "0") {
  header('location: FrontLogin.php');
}*/
 ?>
