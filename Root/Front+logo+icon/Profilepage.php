<?php
include '../Header.php';
include 'HTMLIncluder.php';
  ?>

<body>

<div class="icon-bar">
  <a class="active" href="Profilepage.php"><i class="fa fa-user"></i></a>
  <a href="../ChatApp/#"><i class="fa fa-envelope"></i></a>
  <a href="Settings.php"><i class="fa fa-gear"></i></a>
  <a href="webCore.php"><i class="fa fa-home"></i></a>
  <a href="../RegisterAndLogin/FrontLogin.php"><i class="fa fa-sign-out"></i></a>
</div>
<form>
<input type="text" placeholder="Search..." style="position:absolute;TOP:15px;left:1040px;WIDTH:150;HEIGHT:21" name="search"><br>
</form>
<input type="button" class="button" style="position:absolute;TOP:11px;left:1192px;WIDTH:80;HEIGHT:21" value="Search">
<h1>Profile</h1>
  </body>

<?php


$servername = "db";
$username = "root";
$password = "Dn91ND1aMw3ZkuENdC1j1J8F";
$database = "MellowUsers";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$fname = 'Martin Moeldrup';
$lname = 'Jensen';

$query ="SELECT * FROM mellowMembers WHERE fname = '$fname' AND lname = '$lname'";

$result = mysqli_query($conn, $query);

while($data = mysqli_fetch_array($result)){
  echo $data['fname'] ." ". $data['lname'];

}
?>


</html>
