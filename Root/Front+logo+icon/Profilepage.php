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

<<<<<<< HEAD
$ID = $_SESSION["loggedIn"];
=======
<<<<<<< HEAD


=======
>>>>>>> 4f45abac79199a812a914c1d3c6b68c4718aa674
$fname = 'Martin Moeldrup';
$lname = 'Jensen';
>>>>>>> d3369764b1e3e1d37d4f680b984ec970b3e566bf

$query ="SELECT * FROM mellowMembers WHERE ID = $ID";

$result = mysqli_query($conn, $query);

while($data = mysqli_fetch_array($result)){
  echo $data['fname'] ." ". $data['lname'];
<<<<<<< HEAD

=======
>>>>>>> 4f45abac79199a812a914c1d3c6b68c4718aa674
}
?>


</html>
