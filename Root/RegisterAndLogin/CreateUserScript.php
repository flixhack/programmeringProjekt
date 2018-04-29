<?php
include '../Headernl.php'; // includes Headernl.php(Database info and login)





$email2 = $_POST['email']; //Gets the email from input on register page
$email = strtolower($email2); //Makes the email all lowercase
$fname = $_POST['fname']; //Gets the first name from input on register page
$lname = $_POST['lname']; //Gets the last name from input on register page
$gender = $_POST['gender']; //Gets the gender from the radio input on register page
$preHashPass = $_POST['pw']; // Gets the password from input on register page
$preHashPassC = $_POST['cpw'];// Gets the confirm password from input on register page
$password = hash('sha1', $preHashPass); // Hashes the Password
$passwordC = hash('sha1', $preHashPassC);// Hashes the Confirm Password


$sql = "INSERT INTO mellowMembers VALUES (NULL,'{$email}','{$fname}','{$lname}','{$password}','{$gender}','f')"; //Makes sql query for inserting user
$check="SELECT * FROM mellowMembers WHERE Email = '{$email}'"; // Makes sql query that searches database for matching email
$rs = mysqli_query($conn,$check); // Runs sql connect and check query
if ($email != "" && $fname != "" && $lname != "" && $preHashPass != "" && $preHashPassC != "") { //Checks if inputs are empty, if empty, runs javascript alert saying all fields are mandatory
if ($password == $passwordC) { //Checks if the two hashed passwords are identical, if not runs javascript alert that says passwords are not identical
  if($rs->num_rows == 0){ // runs the sql check query, if mathcing email are found runs javascript alert that says User already exist
    if (mysqli_query($conn, $sql)) { //if all above are true, inserts data into database and directs you to login page.
        print '<script type="text/javascript"> window.location = "FrontLogin.php"; </script>';
      } else {
        echo "Error: could not connect, try again later: " . mysqli_error($conn);
}    } else {
        print '<script type="text/javascript">alert("User already exist"); window.location = "Registre.php"; </script>';
} } else {
      print '<script type="text/javascript">alert("Passwords are not identical"); window.location = "Registre.php"; </script>';
}} else {
  print '<script type="text/javascript">alert("All fields are MANDATORY!!!"); window.location = "Registre.php"; </script>';
}

mysqli_close($conn);





 ?>
