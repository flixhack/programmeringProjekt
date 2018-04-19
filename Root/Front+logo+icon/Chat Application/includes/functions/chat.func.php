<?php

function get_msg(){

$query = "SELECT `Sender`,`Message` FROM chat.`chat`";
$link = mysqli_connect("127.0.0.1", "root", "toor", "chat");

$run = mysqli_query($link, $query);

$messages = array();

while($message = mysqli_fetch_assoc($run)){
  $messages[]=array('sender'=>$sender['Sender'],
    'message'=>$message['Message']);
}



return $messages;

}

function send_msg($sender, $message){
    if(!empty($sender) && !empty($message)) {

        $sender = mysqli_real_escape_string($sender);
        $message = mysqli_real_escape_string($message);

        $query = "INSERT INTO 'chat','chat' VALUES(null,'{$sender}','{$message}')";
        $link = mysqli_connect("127.0.0.1", "root", "toor", "chat");
        if ($run = mysqli_query($link, $query)){
          return true;
        } else{
            return false;
        }

    }  else{
          return false;
    }
}
 ?>
