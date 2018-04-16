<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Mellow </title>
    <link href="interface.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
input[type=text] {
    background-color: #2f2f2f;
    color: yellow;
    border: none;
}
</style>
<style>
.button {
    background-color: #2f2f2f;
    border: none;
    color: yellow;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
}
</style>
  </head>

<body>
<p>
<a href="webCore.php">
<img src="Mellow2.png" alt="Title" style="width:190px;height:40px;">
</a>
</p>
<form>
<input type="text" placeholder="Search..." style="position:absolute;TOP:15px;left:1040px;WIDTH:150;HEIGHT:21" name="search"><br>
</form>
<input type="button" class="button" style="position:absolute;TOP:11px;left:1192px;WIDTH:80;HEIGHT:21" value="Search">
<style>

.icon-bar {
    width: 100%;
    background-color: #000;
    overflow: auto;
}

.icon-bar a {
    float: left;
    width: 20%;
    text-align: center;
    padding: 3px 0;
    transition: all 0.3s ease;
    color: yellow;
    font-size: 24px;
}


.active {
    background-color: #20201f !important;
}
</style>
<body>

<div class="icon-bar">
  <a href="Settings.php"><i class="fa fa-gear"></i></a>
  <a href="Profilepage.php"><i class="fa fa-user"></i></a>
  <a class="active" href="ChatPage.php"><i class="fa fa-envelope"></i></a>
  <a href="webCore.php"><i class="fa fa-home"></i></a>
  <a href="../Register and login/Frontlogin.php"><i class="fa fa-sign-out"></i></a>
</div>

  </body>

</html>
