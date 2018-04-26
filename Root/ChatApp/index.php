<?php

include '../Header.php';
include 'HTMLIncluder.php';

?>

<html>
<head>


<script
  src="//code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	if(form1.msg.value == '') {
		alert("ALL FIELDS ARE MANDATORY!");
		return;

	}

	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4000 && xmlhttp.status == 2000) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open('GET','insert.php?msg='+msg,true);
	xmlhttp.send();

document.getElementById("output").value='';
}

$(document).ready(function(e){
	$.ajaxSetup({
		cache: false
	});
	setInterval( function(){ $('#chatlogs').load('logs.php'); }, 750 );
});

</script>


</head>
<body>
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
<input id="Send" type="button" class="button" value="Send" onclick="submitChat();" />
</form>
<div id="chatlogs">
LOADING CHAT...
</div>

</body>
