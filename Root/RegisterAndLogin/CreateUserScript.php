<?php
include '../Header.php';





$email2 = $_POST['email'];
$email = strtolower($email2);
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$gender = 'm';
$preHashPass = $_POST['pw'];
$preHashPassC = $_POST['cpw'];
$password = hash('sha1', $preHashPass);
$passwordC = hash('sha1', $preHashPassC);


$sql = "INSERT INTO mellowMembers VALUES (NULL,'{$email}','{$fname}','{$lname}','{$password}','{$gender}','t')";
$check="SELECT * FROM mellowMembers WHERE Email = '{$email}'";
$rs = mysqli_query($conn,$check);
if ($password == $passwordC) {
  if($rs->num_rows == 0){
    if (mysqli_query($conn, $sql)) {
        header('Location: FrontLogin.php');
      } else {
        echo "Error: could not connect, try again later: " . mysqli_error($conn);
}    } else {
        echo "User already exist";
} } else {
      echo "Passwords are not identical";
}


mysqli_close($conn);





 ?>
