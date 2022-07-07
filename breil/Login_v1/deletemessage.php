<?php
include('dbcon.php');
$get_id = $_GET['id'];
$conn->query("DELETE FROM message WHERE message_id = '$get_id'");
header('location:message.php');
?>