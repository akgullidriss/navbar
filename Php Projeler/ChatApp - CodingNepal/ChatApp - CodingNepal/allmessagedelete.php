<?php
 include_once "php/config.php";
 session_start();
 if(isset($_SESSION['unique_id'])){
$id=@$_GET["user_id"];
$outgoing_id = $_SESSION['unique_id'];
$sql = "DELETE FROM messages WHERE incoming_msg_id = {$id} and outgoing_msg_id = {$outgoing_id} or incoming_msg_id = {$outgoing_id} and outgoing_msg_id = {$id}";

if ($conn->query($sql) === true) {

  $url = "users.php";
  header("Location: ".$url);
  
   
} else {
    echo "Hata oluştu: " . $conn->error;
}
 }





?>