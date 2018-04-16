<?php

require('core.php');

if(isset($_POST['send'])){
  if(send_msg($_POST['sender'], $_POST['message'])){
    echo 'Message sent';
  } else{
    echo 'Message failed to sent';
  }
}
 ?>

<div id="messages">
<?php
  $messages = get_msg();
  foreach($messages  as $message){
    echo '<strong>',$message['sender'],'Sent</strong><br />';
    echo $message['message'],'<br /><br />';
  }
 ?>
</div>

<form action="index.php" method="post">
  <lable>Enter name:<input type="text" name="sender"/></lable>
  <lable>Enter Message:<input type="text" name="message"/></lable>
  <input type="submit" name="send" value="Send message"/>
</form>
