
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
  </body>


  <input type="password" style="position:absolute;TOP:35px;left:1030px" placeholder="Password" name="fname"><br>
  <input type="email" style="position:absolute;TOP:35px;left:850px" placeholder="Email" name="fname"><br>
  <button type="button" style="position:absolute;TOP:35px;left:1210px;WIDTH:60;HEIGHT:22" onclick="<?php $servername = "localhost";
  $username = "test";
  $password = "test";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Create database
  $sql = "CREATE DATABASE myDB";
  if (mysqli_query($conn, $sql)) {
      echo "Database created successfully";
  } else {
      echo "Error creating database: " . mysqli_error($conn);
  }

  mysqli_close($conn); ?>">Login </button>

  <A HREF="Registre.php" style="position:absolute;TOP:60px;left:850px">Not user yet? Sign up here!</A>
</html>
