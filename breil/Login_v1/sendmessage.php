<?php
include('dbcon.php');
include('session.php');
$friend_id  = $_POST['friend_id'];
$my_message  = $_POST['my_message'];
$conn->query("INSERT INTO message(reciever_id,content,date_sended,sender_id) VALUES('$friend_id','$my_message',NOW(),'$session_id')");
?>
<script>alert('le message a été transmis');</script>
<script>window.location = 'message.php'; </script>
