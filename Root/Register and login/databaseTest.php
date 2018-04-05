<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
  $servername = "localhost";
  $username = "root";
  $password = "toor";

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

  mysqli_close($conn);
  ?>

  </body>
</html>
