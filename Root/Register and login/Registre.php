
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Mellow </title>
    <link href="interface.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="IMG/icon.png">
  </head>

<body>
<img src="IMG/Mellow2.png" alt="Title" style="width:190px;height:40px;">
<p class="sansserif">Hello, welcome to our site. <br /> This is the project for our programming exam.</p>

<p class="sansserif" style="position:absolute;TOP:240;left:547"> Email</P>
<p class="sansserif" style="position:absolute;TOP:265;left:505"> First Name</P>
<p class="sansserif" style="position:absolute;TOP:290;left:507"> Last Name</P>
<p class="sansserif" style="position:absolute;TOP:315;left:517"> Password</P>
<p class="sansserif" style="position:absolute;TOP:340;left:448"> Confirm Password</P>
  </body>

<input type="email" style="position:absolute;TOP:250px;left:600px;WIDTH:200" name="email"><br>
<input type="text" style="position:absolute;TOP:275px;left:600px;WIDTH:200" name="fname"><br>
<input type="text" style="position:absolute;TOP:300px;left:600px;WIDTH:200" name="lname"><br>
<input type="password" style="position:absolute;TOP:325px;left:600px;WIDTH:200" name="pw"><br>
<input type="password" style="position:absolute;TOP:350px;left:600px;WIDTH:200 " name="cpw"><br>

<A HREF="FrontLogin.php"><Button type="Button" onclick="<?php

$servername = "localhost";
$username = "test";
$password = "test";
$database = "mellowUsers";



$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}






$id = 'hey';
$email = $_POST['email'];
$fname = $_POST1['fname'];
$lname = $_POST2['lname'];
$gender = 'm';
$preHashPass = $_POST3['pw'];
$password = hash('sha1', $preHashPass);


$userCheck = "SELECT * FROM 'mellowMembers' WHERE email = '$email'";
$sql = "INSERT INTO 'mellowmembers'('Email', 'Fname', 'Lname', 'Password', 'gender', 'God') VALUES ('$email','$fname','$lname','$password','$gender','f')";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);





 ?>
" style="position:absolute;TOP:375px;left:600px;WIDTH:200;HEIGHT:20">Create account</button></a>
<A HREF="FrontLogin.php" style="position:absolute;TOP:395px;left:600px">Already a member?Login Here!</A>


</html>
