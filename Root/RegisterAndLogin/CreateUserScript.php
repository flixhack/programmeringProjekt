<?php
include '../Headernl.php';





$email2 = $_POST['email'];
$email = strtolower($email2);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$preHashPass = $_POST['pw'];
$preHashPassC = $_POST['cpw'];
$password = hash('sha1', $preHashPass);
$passwordC = hash('sha1', $preHashPassC);


$sql = "INSERT INTO mellowMembers VALUES (NULL,'{$email}','{$fname}','{$lname}','{$password}','{$gender}','f')";
$check="SELECT * FROM mellowMembers WHERE Email = '{$email}'";
$rs = mysqli_query($conn,$check);
if ($email != "" && $fname != "" && $lname != "" && $preHashPass != "" && $preHashPassC != "") {
if ($password == $passwordC) {
  if($rs->num_rows == 0){
    if (mysqli_query($conn, $sql)) {
        print '<script type="text/javascript"> window.location = "FrontLogin.php"; </script>';
      } else {
        echo "Error: could not connect, try again later: " . mysqli_error($conn);
}    } else {
        print '<script type="text/javascript">alert("User already exist"); window.location = "CreateUserScript.php"; </script>';
} } else {
      print '<script type="text/javascript">alert("Passwords are not identical"); window.location = "Registre.php"; </script>';
}} else {
  print '<script type="text/javascript">alert("All fields are MANDATORY!!!"); window.location = "Registre.php"; </script>';
}

mysqli_close($conn);





 ?>
