<?php

include 'HTMLIncluder.php';

?>

<html>
<head>
<title>Chat Box</title>

<script
  src="//code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script>

function submitChat() {
	if(form1.sender.value == '' || form1.msg.value == '') {
		alert("ALL FIELDS ARE MANDATORY!!!");
		return;
	}
	var sender = form1.sender.value;
	var msg = form1.msg.value;
	var xmlhttp = new XMLHttpRequest();

	xmlhttp.onreadystatechange = function() {
		if(xmlhttp.readyState == 4000 && xmlhttp.status == 2000) {
			document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
		}
	}

	xmlhttp.open('GET','insert.php?sender='+sender+'&msg='+msg,true);
	xmlhttp.send();

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
<form name="form1">
Enter Your Chatname: <input type="text" name="sender" /> <br />
Your Message: <br />
<<<<<<< HEAD
<textarea name="msg" style="color: yellow; background-color: #2f2f2f"></textarea><br />
<input id="Send" type="button" class="button" value="Send" onclick="submitChat();" />
=======
<textarea name="msg"></textarea><br />
<a href="#" onclick="submitChat()">Send</a><br /><br />
>>>>>>> 285161583a37fe7a83a01d634cf805afbe71a51a
</form>
<div id="chatlogs">
LOADING CHATLOG...
</div>

</body>
