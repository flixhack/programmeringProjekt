<?php
include '../Header.php'; // includes header and the repeating HTML
include 'HTMLIncluder.php';
 ?>
<body>
<!-- Creates icon bar -->
<div class="icon-bar">
  <a href="Profilepage.php"><i class="fa fa-user"></i></a>
  <a href="../ChatApp/#"><i class="fa fa-envelope"></i></a>
  <a href="Settings.php"><i class="fa fa-gear"></i></a>
  <a class="active" href="webCore.php"><i class="fa fa-home"></i></a>
  <a href="../destroySession.php"><i class="fa fa-sign-out"></i></a>
</div>

<form>
<input type="text" placeholder="Search..." style="position:absolute;TOP:15px;left:1040px;WIDTH:150;HEIGHT:21" name="search"><br>
</form>
<input type="button" class="button" style="position:absolute;TOP:11px;left:1192px;WIDTH:80;HEIGHT:21" value="Search">
<h1>Home</h1>
<?php
//Fetches your name from the database for use on the home page
$ID = $_SESSION["loggedIn"];

$query ="SELECT * FROM mellowMembers WHERE ID = $ID";

$result = mysqli_query($conn, $query);

while($data = mysqli_fetch_array($result)){
  echo "Welcome" ." ". $data['fname'].",";

}
?>
<p>This is Mellow. <br /> We've created this website for our programmning exam. <br /> It's a social media with an opportunity to register as a user <br /> and use the chat function to chat with all of Mellows members. </p>
<p>We wish you a nice day</p>
<p>With best regards <br /> Felix & Martin</p>
</body>

</html>
