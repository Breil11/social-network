<?php
include('dbcon.php');
$id = $_GET['id'];
$conn ->query("DELETE FROM friends WHERE friends_id = '$id'");
header('location:amis.php');
?>