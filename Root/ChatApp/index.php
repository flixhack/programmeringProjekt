<?php

include '../Header.php';
include '../Front+logo+icon/HTMLIncluder.php';

?>

<html>
<head>

<script
<<<<<<< HEAD
  src="//code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="> //Linking to a library
</script>
=======
  src="//code.jquery.com/jquery-2.2.4.min.js" 
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
>>>>>>> 520cdd67c2f45d396d5b5e60a3025d1046c3dfe5

<script>

function submitChat() {
	if(form1.msg.value == '') { //if the textarea is empty, you get an alert about you need to write a message
		alert("You need to write a message");
		return;

	}

	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() { //An EventHandler that is called whenever the readyState attribute changes.
		if(xmlhttp.readyState == 4000 && xmlhttp.status == 2000) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open('GET','insert.php?msg='+msg,true); //getting the information from insert, which is the users name and message
	xmlhttp.send();

document.getElementById("output").value=''; //Sets the textareas value to nothing after pressing the send button, so the textarea gets cleared
}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 500 ); //Sets the page to refresh and load logs every 500 millisecond (0.5 s)
});

</script>

</head>

<body>
<!--Creating icon bar-->
<div class="icon-bar">
  <a href="../Front+logo+icon/Profilepage.php"><i class="fa fa-user"></i></a>
  <a class="active" href="../ChatApp/#"><i class="fa fa-envelope"></i></a>
  <a href="../Front+logo+icon/Settings.php"><i class="fa fa-gear"></i></a>
  <a href="../Front+logo+icon/webCore.php"><i class="fa fa-home"></i></a>
  <a href="../destroySession.php"><i class="fa fa-sign-out"></i></a>
</div>

<h1>Chat</h1>

<form>
<input type="text" placeholder="Search..." style="position:absolute;TOP:15px;left:1040px;WIDTH:150;HEIGHT:21" name="search"><br>
</form>
<input type="button" class="button" style="position:absolute;TOP:11px;left:1192px;WIDTH:80;HEIGHT:21" value="Search">

<form name="form1">
Your Message: <br />
<textarea id='output' name="msg" style="color: yellow; background-color: #2f2f2f" rows=5 cols=30></textarea><br />
<input id="Send" type="button" class="button" value="Send" onclick="submitChat();" /> <!--A button which runs the submitChat function when pressed. This function uses  XMLHttpRequest (XHR) objects to interact with our server, so we can retrieve data from a URL without having to do a full page refres -->
</form>

<div id="chatlogs">
LOADING CHAT...
</div>

</body>
